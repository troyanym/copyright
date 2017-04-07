/**
 * Created by Chernomorets on 03.04.2017.
 */

function showMsg($msg, $status) {
    $('#report')
        .prepend('<span class="' + $status + '">' + $msg + '</span>')
        .show('Slow');
}

function closeReport()
{
    $('#report').fadeOut(400, function(){
        $('#report span').remove();
    });
}

function modalShow($modal_view) {
    closeReport();
    $('#overlay').fadeIn(400, // сначала плавно показываем темную подложку
        function(){ // после выполнения предъидущей анимации
            $modal_view
                .css('display', 'block') // убираем у модального окна display: none;
                .animate({opacity: 1, top: '50%'}, 200); // плавно прибавляем прозрачность одновременно со съезжанием вниз
        });
}

function modalClose() {
    $('.modal-form')
        .animate({opacity: 0, top: '45%'}, 200,  // плавно меняем прозрачность на 0 и одновременно двигаем окно вверх
            function(){ // после анимации
                $(this).css('display', 'none'); // делаем ему display: none;
                $('#overlay').fadeOut(400); // скрываем подложку
            }
        );
}

$(document).ready(function() {

    $('.phone-input').mask('+38 (999) 999-9999');

    $('.owl-carousel').owlCarousel({
        margin:10,
        loop:true,
        autoWidth:true,
        items: 4,
        nav:true,
        navText: ["<img src='/assets/catalog/images/arrow-left.png'>","<img src='/assets/catalog/images/arrow-right.png'>"],
        dots: true
    });

    $('#report_close').click(function(e){
        e.preventDefault();

        closeReport();
    });

    $('#request_btn').click(function(e){
        e.preventDefault();
        modalShow($('#request_copyright'));
    });

    $('#ask_btn').click(function(e){
        e.preventDefault();
        modalShow($('#question_copyright'));
    });

    $('.back').click(function(e){
        e.preventDefault();

        $('html, body').animate({
            scrollTop: $("body").offset().top
        }, 1000);
    });

    $(".modal-form .ajax-form").on("submit", function(){

        $form = $(this);
        $submit_btn = $( this ).find('button[type=submit]');
        $loading = $( this ).find('.loading-status');

        $.ajax({
            type: "POST",
            url: $form.attr('action'),
            dataType: 'json',
            data: $form.serialize(),
            beforeSend: function(){
                $submit_btn.fadeOut(400, function(){
                        $loading.fadeIn(400);
                    }
                );
            },
            success: function(json) {
                if(json['error']) {
                    showMsg(json['error'], 'error');
                } else {
                    showMsg(json['success'], 'success');
                }

                $loading.show();
                $submit_btn.hide();
                modalClose();
            },
            error: function (jqXHR, exception) {
                var msg = '';
                if (jqXHR.status === 0) {
                    msg = 'Not connect.\n Verify Network.';
                } else if (jqXHR.status == 404) {
                    msg = 'Requested page not found. [404]';
                } else if (jqXHR.status == 500) {
                    msg = 'Internal Server Error [500].';
                } else if (exception === 'parsererror') {
                    msg = 'Your server might not be configured to send mail.';
                } else if (exception === 'timeout') {
                    msg = 'Time out error.';
                } else if (exception === 'abort') {
                    msg = 'Ajax request aborted.';
                } else {
                    msg = 'Uncaught Error.\n' + jqXHR.responseText;
                }

                $loading.show();
                $submit_btn.hide();
                modalClose();
                showMsg(msg, 'error');
            },
        });

        return false;
    });

    /* Закрытие модального окна, тут делаем то же самое но в обратном порядке */
    $('.modal_close, #overlay').click( function(event){ // ловим клик по крестику или подложке
        event.preventDefault();

        modalClose();
    });
});

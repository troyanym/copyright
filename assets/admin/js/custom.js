/**
 * Created by Chernomorets on 03.04.2017.
 */

function modalShow($modal_view) {
    //$('body').css('overflow', 'hidden'); // выключаем скролл
    $('#overlay').fadeIn(400, // сначала плавно показываем темную подложку
        function(){ // после выполнения предъидущей анимации
            $modal_view
                .css('display', 'block') // убираем у модального окна display: none;
                .animate({opacity: 1, top: '50%'}, 200); // плавно прибавляем прозрачность одновременно со съезжанием вниз
        });
}

$(document).ready(function() {

    $('.phone-input').mask('+38 (999) 999-9999');

    $('.owl-carousel').owlCarousel({
        margin:10,
        loop:true,
        autoWidth:true,
        items: 4,
        nav:true,
        navText: ["<img src='/assets/images/arrow-left.png'>","<img src='/assets/images/arrow-right.png'>"],
        dots: true
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

    $("#contact-form").on("submit", function(){

        $.ajax({
            type: "POST",
            url: "../handler.php",
            dataType: 'json',
            data: { "name": $('input[name=\'client_name\']').val(), "email": $('input[name=\'client_email\']').val(), "phone": $('input[name=\'client_phone\']').val() },
            success: function(json) {
                if(json['error']) {
                    alert(json['error']);
                } else {
                    $("#contact-form input").val("");
                    modalShow();
                }
            }
        });

        return false;
    });

    /* Закрытие модального окна, тут делаем то же самое но в обратном порядке */
    $('.modal_close, #overlay').click( function(event){ // ловим клик по крестику или подложке
        event.preventDefault();
        //$('body').css('overflow', 'auto'); // включаем скролл
        $('.modal-form')
            .animate({opacity: 0, top: '45%'}, 200,  // плавно меняем прозрачность на 0 и одновременно двигаем окно вверх
                function(){ // после анимации
                    $(this).css('display', 'none'); // делаем ему display: none;
                    $('#overlay').fadeOut(400); // скрываем подложку
                }
            );
    });
});

/**
 * Created by Chernomorets on 03.04.2017.
 */

$(document).ready(function() {
    $('textarea').each(function(e){
        CKEDITOR.replace(this.id, {
            filebrowserBrowseUrl : '/assets/admin/js/elFinder/elfinder.html',
            uiColor : '#9AB8F3'
        });
    });

    var fm;

    $(document).on("click", "#button_image", function() {
         $('<div id="editor" />').dialogelfinder({
             url : '/assets/admin/js/elFinder/elf.html'
         });


        /*if (!fm) {
            fm = $('<div id="editor" />').dialogelfinder({
                url : '/assets/admin/js/elFinder/php/connector.php',
                lang : 'ru',
                width : 840,
                title: 'Менеджер файлов',
                getFileCallback : function(files, fm) {
                    console.log(files);
                }
            }).dialogelfinder('instance')
        } else {
            fm.show();
        }*/

        alert("ggggg");
    });

    /*$('#elfind').elfinder({
        url : '/assets/admin/js/elFinder/elfinder.html', // connector URL (REQUIRED)
        lang : 'ru',
        height : '600'
    }).elfinder('instance');*/

    var image = '<button type="button" id="button_image" class="btn btn-primary"><i class="fa fa-pencil"></i></button> <button type="button" id="button-clear" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>';
    $('#popover').popover({
        placement: 'right',
        content: image,
        html: true
    });

    $("#InputFile").on("change", function(){
        files = this.files;
    });

    $('#send_img').click(function( event ){
        event.stopPropagation(); // Остановка происходящего
        event.preventDefault();  // Полная остановка происходящего

        // Создадим данные формы и добавим в них данные файлов из files

        var data = new FormData();
        $.each( files, function( key, value ){
            data.append( key, value );
        });

        // Отправляем запрос
        $.ajax({
            url: "/admin/upload/upload_photo",
            type: 'POST',
            data: data,
            cache: false,
            dataType: 'html',
            processData: false, // Не обрабатываем файлы (Don't process the files)
            contentType: false, // Так jQuery скажет серверу что это строковой запрос
            success: function( data ){
                $(".help-block").empty().append(data);
            },
            error: function( jqXHR, textStatus, errorThrown ){
                console.log('ОШИБКИ AJAX запроса: ' + textStatus );
            }
        });
    });
});

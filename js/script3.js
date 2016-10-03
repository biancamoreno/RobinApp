$(document).ready(function(){
    Materialize.updateTextFields();
    $('#form-mailing').submit(function(e){
        $.ajax({
            type: "POST",
            url: "news_insert.php",
            data: $(this).serializeArray(),
        });
        $('.sucess-form').css("visibility", "visible");
        setTimeout(function(){ $('.sucess-form').css("visibility", "hidden"); }, 3000);
        $('#emailNew').val("");
        $('#nameNew').val("");
        return false;
    });

    $("#form-signup-update").submit(function () {
        var formData = new FormData(this);

        $.ajax({
            url: 'signup_update.php',
            type: 'POST',
            data: formData,
            success: function (data) {
                $('.sucess-form').css("visibility", "visible");
                setTimeout(function(){ $('.sucess-form').css("visibility", "hidden"); }, 3000);
                $('input').val("");
            },
            cache: false,
            contentType: false,
            processData: false,
            xhr: function() {
                var myXhr = $.ajaxSettings.xhr();
                if (myXhr.upload) {
                    myXhr.upload.addEventListener('progress', function () {
                    }, false);
                }
                return myXhr;
            }
        });
        return false;
    });

    $("#form-signup").submit(function () {
        var formData = new FormData(this);

        $.ajax({
            url: 'signup_insert.php',
            type: 'POST',
            data: formData,
            success: function (data) {
                $('.sucess-form').css("visibility", "visible");
                setTimeout(function(){ $('.sucess-form').css("visibility", "hidden"); }, 3000);
                $('input').val("");
            },
            cache: false,
            contentType: false,
            processData: false,
            xhr: function() {
                var myXhr = $.ajaxSettings.xhr();
                if (myXhr.upload) {
                    myXhr.upload.addEventListener('progress', function () {
                    }, false);
                }
                return myXhr;
            }
        });
        return false;
    });

    $('#form-pin').submit(function(e){
        $.ajax({
            type: "POST",
            url: "pin_insert.php",
            data: $(this).serializeArray(),
        });
        $('.sucess-form').css("visibility", "visible");
        setTimeout(function(){ $('.sucess-form').css("visibility", "hidden"); }, 3000);
        $('#emailNew').val("");
        $('#nameNew').val("");
        return false;
    });

    $("#pin-alerts > span").click(function() {
        $("#pin-alerts > span").each(function() {
            $(this).removeClass('active');
        });
        $(this).addClass('active');
        $('#alertPin').val($(this).attr('value'));
    });

    $(".tab").click(function(){
        $(".tab").removeClass('active');
        $(this).addClass('active');

        switch($('.tab.active').attr('class')) {
            case 'tab-feed tab active':
                $('.lists-box-right').hide();
                $('.feed').show();
                break;
            case 'tab-friends tab active':
                $('.lists-box-right').hide();
                $('.list-friends').show();
                break;
            case 'tab-msgs tab active':
                $('.lists-box-right').hide();
                $('.messages').show();
                break;
            case 'tab-groups tab active':
                $('.lists-box-right').hide();
                $('.groups').show();
                break;
            case 'tab-ads tab active':
                $('.lists-box-right').hide();
                $('.local-ads').attr("style", "display: block !important");;
                break;
        }
    });
});


$(document).ready(function(){
    Materialize.updateTextFields();
    $('#form-mailing').submit(function(e){
        $.ajax({
            type: "POST",
            url: "insert.php",
            data: $(this).serializeArray(),
        });
        $('.sucess-form').css("visibility", "visible");
        setTimeout(function(){ $('.sucess-form').css("visibility", "hidden"); }, 3000);
        $('#emailNew').val("");
        $('#nameNew').val("");
        return false;
    });
    $('#form-signup').submit(function(e){
        $.ajax({
            type: "POST",
            url: "insert2.php",
            data: $(this).serializeArray(),
        });
        $('.sucess-form').css("visibility", "visible");
        setTimeout(function(){ $('.sucess-form').css("visibility", "hidden"); }, 3000);
        $('input').val("");
        return false;
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


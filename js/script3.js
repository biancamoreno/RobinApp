$(document).ready(function() {
    Materialize.updateTextFields();
});

$(document).ready(function(){
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
});


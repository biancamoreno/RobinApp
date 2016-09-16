$(document).ready(function() {
 Materialize.updateTextFields();
});

 $(function () {
   $('#form-mailing').submit(function(e){
       if($('#emailNew').val() == "" || $('#nameNew').val() == ""){
          e.preventDefault();
       }else{
           $.ajax({
               type: "POST",
               url: "../insert.php",
               data: $(this).serializeArray(),
           });

       }
       return false;
   });
});

//function validaImovel(){
//    $('#form-mailing').submit(function(e){
//        if($('#emailNew').val() == ""){
//           e.preventDefault();
//        }else{
//            $.ajax({
//                type: "POST",
//                url: "insert.php",
//                data: $(this).serializeArray(),
//            });
//
////             //Pop up informando cadastro com sucesso
////            $('.sucesso').css("display", "flex");
////            setTimeout(function(){
////                $('.sucesso').css("display", "none");}, 3000);
////            setTimeout(function(){
////                (location.reload());},2000);
//
//
//            return false;
//        }
//        if($('#nameNew').val() == ""){
//           e.preventDefault();
//        }else{
//            $.ajax({
//                type: "POST",
//                url: "insert.php",
//                data: $(this).serializeArray(),
//            });
//
//            return false;
//        }
//
//
//    });
//
//}

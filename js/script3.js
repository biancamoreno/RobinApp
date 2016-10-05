URL_BASE = "./";


function timeDifference(previous) {

    var now = new Date()
    var current = now.getTime();

    var msPerMinute = 60 * 1000;
    var msPerHour = msPerMinute * 60;
    var msPerDay = msPerHour * 24;
    var msPerMonth = msPerDay * 30;
    var msPerYear = msPerDay * 365;

    var elapsed = current - previous;

    if (elapsed < 5000) {
         return 'agora';   
    }

    else if (elapsed < msPerMinute) {
         return Math.round(elapsed/1000) + ' segundos atrás';   
    }

    else if (elapsed < msPerHour) {
         return Math.round(elapsed/msPerMinute) + ' minutos atrás';   
    }

    else if (elapsed < msPerDay ) {
         return Math.round(elapsed/msPerHour ) + ' horas atrás';   
    }

    else if (elapsed < msPerMonth) {
        return Math.round(elapsed/msPerDay) + ' dias atrás';   
    }

    else if (elapsed < msPerYear) {
        return Math.round(elapsed/msPerMonth) + ' meses atrás';   
    }

    else {
        return Math.round(elapsed/msPerYear ) + ' anos atrás';   
    }
}

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

    $("#form-update").submit(function(abc) {
        abc.preventDefault();
        var userId = firebase.auth().currentUser.uid;
        var nome = $(this).find('#firstnameUpdate').val();
        var sobrenome = $(this).find('#lastnameUpdate').val();
        var email = $(this).find('#emailUpdate').val();
        var senha = $(this).find('#passwordUpdate').val();
        var cep = $(this).find('#cepUpdate').val();
        var numero = $(this).find('#numberUpdate').val();

        var data = {
            nome: nome,
            sobrenome: sobrenome,
            email: email,
            senha: senha
        }

        var dataEndereco = {
            cep: cep,
            numero: numero
        }

        var dataConfiguracoes = {
            raio: 5,
            notificacoes: true
        }

        updateData(userId, data, dataEndereco, dataConfiguracoes)

        return false;
    });


    function updateData(userId, data, dataEndereco, dataConfiguracoes) {
        var updates = {};
        updates['/usuarios/' + userId] = data;
        updates['/usuarios/' + userId + '/endereco'] = dataEndereco;
        updates['/usuarios/' + userId + '/configuracaoes'] = dataConfiguracoes;

        return firebase.database().ref().update(updates);
    }

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

    $('.modal-delete').leanModal();
});


var database = firebase.database();
var firebaseRef = database.ref("locations");
var geoFire = new GeoFire(firebaseRef);


$('#form-login').submit(function() {
    var email = $(this).find('input[name="email"]').val();
    var password = $(this).find('input[name="password"]').val();

    firebase.auth().signInWithEmailAndPassword(email, password).then(function(user) {

        if (user) {
             window.location=URL_BASE+"home.php"
        }


    }, function(error) {
      var errorCode = error.code;
      var errorMessage = error.message;
      alert(errorMessage);
    });

    return false;
});


$('#logoutUser').click(function() {
    firebase.auth().signOut().then(function() {
      window.location=URL_BASE+"index.php"
    }, function(error) {
      alert(error.message)
    });
});



$('#form-signup').submit(function() {
    var nome = $(this).find('#firstnameSignup').val();
    var sobrenome = $(this).find('#lastnameSignup').val();
    var email = $(this).find('#emailSignup').val();
    var senha = $(this).find('#passwordSignup').val();
    var cep = $(this).find('#cepSignup').val();
    var numero = $(this).find('#numberSignup').val();

    var data = {
        nome: nome,
        sobrenome: sobrenome,
        email: email,
        senha: senha
    }

    var dataEndereco = {
        cep: cep,
        numero: numero
    }

    var dataConfiguracoes = {
        raio: 5,
        notificacoes: true
    }


    firebase.auth().createUserWithEmailAndPassword(email, senha).then(function(user) {

        var fullname = data.nome+" "+data.sobrenome;

        user.updateProfile({
            displayName: fullname
        })

        database.ref('usuarios/'+user.uid).set(data);
        database.ref('usuarios/'+user.uid+'/endereco').set(dataEndereco);
        database.ref('usuarios/'+user.uid+'/configuracoees').set(dataConfiguracoes);

        window.location=URL_BASE+"home.php";


    }, function(error) {
      var errorCode = error.code;
      var errorMessage = error.message;
      alert(errorMessage);
    });


    return false;
});


$('#deleteUser').click(function() {
    firebase.auth().onAuthStateChanged(function(user) {
        user.delete().then(function() {
            window.location=URL_BASE+"index.php"
        }, function(error) {
          // An error happened.
        });
    })
});



function isLogged()
{
    firebase.auth().onAuthStateChanged(function(user) {
        if (user) {
        // User is signed in.
        } else {
            window.location=URL_BASE+"index.php"
        }
    });
}

































var myCenter=new google.maps.LatLng(-23.574761, -46.622472);
var construcaoLocal=new google.maps.LatLng(-23.575228, -46.622542);
var aguaLocal1=new google.maps.LatLng(-23.575331, -46.622070);
var aguaLocal2=new google.maps.LatLng(-23.574870, -46.622762);
var eventoLocal1=new google.maps.LatLng(-23.574515, -46.623416);


function  initMap(){
  var mapProp = {
    center:myCenter,
    zoom:18,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };

  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

  // var pinInitial=new google.maps.Marker({
  //   position:myCenter,
  //   icon:'img/pin/mini/pin_robin.png'
  // });
  // var construcao=new google.maps.Marker({
  //   position:construcaoLocal,
  //   icon:'img/pin/mini/pin_construcao.png'
  // });
  // var faltaAgua1=new google.maps.Marker({
  //   position:aguaLocal1,
  //   icon:'img/pin/mini/pin_agua.png'
  // });
  // var faltaAgua2=new google.maps.Marker({
  //   position:aguaLocal2,
  //   icon:'img/pin/mini/pin_agua.png'
  // });
  // var evento1=new google.maps.Marker({
  //   position:eventoLocal1,
  //   icon:'img/pin/mini/pin_evento.png'
  // });

  // var infowindowInitial = new google.maps.InfoWindow({
  //   content:" <p>Rua São João Del Rei, 22 </p>"
  // });
  // var construcaoInfo = new google.maps.InfoWindow({
  //   content:"<p>Estão construindo um prédio na Rua Heitor Peixoto e a rua está fechada</p> <p><b>Angelina Jolie</b><span>3 horas atrás</span></p>"
  // });
  // var faltaAguaInfo1 = new google.maps.InfoWindow({
  //   content:"<p>Acabou a água e está sem previsão de retorno.</p> <p><b>Will Smith</b><span>1 hora atrás</span></p>"
  // });
  // var faltaAguaInfo2 = new google.maps.InfoWindow({
  //   content:"<p>Falta de água devido a contrução da rua de trás.</p> <p><b>Brad Pitt</b><span>30 min. atrás</span></p>"
  // });
  // var eventoInfo1 = new google.maps.InfoWindow({
  //   content:"<p>Hackaton Fiap</p> <p><b>Mark Zuckerberg</b><span>3 min. atrás</span></p>"
  // });

  // google.maps.event.addListener(pinInitial, 'click', function() {
  //   infowindowInitial.open(map,pinInitial);
  // });
  // google.maps.event.addListener(construcao, 'click', function() {
  //   construcaoInfo.open(map,construcao);
  // });
  // google.maps.event.addListener(faltaAgua1, 'click', function() {
  //   faltaAguaInfo1.open(map,faltaAgua1);
  // });
  // google.maps.event.addListener(faltaAgua2, 'click', function() {
  //   faltaAguaInfo2.open(map,faltaAgua2);
  // });
  // google.maps.event.addListener(evento1, 'click', function() {
  //   eventoInfo1.open(map,evento1);
  // });

  // pinInitial.setMap(map);
  // construcao.setMap(map);
  // faltaAgua1.setMap(map);
  // faltaAgua2.setMap(map);
  // evento1.setMap(map);

  firebase.database().ref('pins').on('child_added', function(data) {
    var pinData = data.val()
    addPinToMap(pinData, map)

    var usuarioNome = "";

    if (pinData['usuario']!="" && pinData['usuario']!==undefined) {
      usuarioNome=pinData['usuario']["nome"];
    }else{
      var user = firebase.auth().currentUser;
      usuarioNome=user.displayName;
    }

    var time = timeDifference(pinData['data'])

    var feedHtml = '<li>'
                        +'<div class="photo-user circle"></div>'
                        +'<div class="content-msg">'
                            +'<p class="name-user">'+usuarioNome+'</p>'
                            +'<p class="simple">'+pinData['descricao']+'</p>'
                            +'<p class="time-notification">'+time+'</p>'
                        +'</div>'
                        +'<div class="type-notification '+pinData['categoria']+'"></div>'
                    +'</li>';

    $('#tab-feed').prepend(feedHtml)
  });
}

var markersArray = [];

function addPinToMap(pin, map){

  var icon ='img/pin/mini/pin_'+pin['categoria']+'.png';

  var marker = new google.maps.Marker({
    position: {lat: pin['latitude'], lng: pin['longitude']},
    icon: icon,
    map: map,
    title: pin['titulo']
  });

  var usuario = pin['usuario'];

  var text = "<p>"+pin['descricao']+"</p>";
  var time = timeDifference(pin['data'])

  var usuarioNome = "";

  if (pin['usuario']!="" && pin['usuario']!==undefined) {
    usuarioNome=pin['usuario']["nome"];
  }else{
    var user = firebase.auth().currentUser;
    usuarioNome=user.displayName;
  }

  text = text+"<p>"+usuarioNome+": "+time+"</p>";

  var info = new google.maps.InfoWindow({
    content: text
  });

  google.maps.event.addListener(marker, 'click', function() {
    info.open(map,marker);
  });




}

function initMapModal(){
  var mapPropModal = {
    center:myCenter,
    zoom:18,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };

  var mapModal=new google.maps.Map(document.getElementById("googleMapModal"),mapPropModal);

  var pinInitialModal=new google.maps.Marker({
    position:myCenter
  });

  mapModal.addListener('click', function(e) {
    pinInitialModal.setPosition(e.latLng);
  });

  pinInitialModal.setMap(mapModal);


  $('#form-pin').submit(function() {

    var data = {
      latitude: pinInitialModal.getPosition().lat(),
      longitude: pinInitialModal.getPosition().lng(),
      titulo: $(this).find('#titlePin').val(),
      descricao: $(this).find('#descriptionPin').val(),
      categoria: $(this).find('#pin-alerts .icon.active').attr('data-value'),
      data: firebase.database.ServerValue.TIMESTAMP
    }

    newPin(data);

    return false;
  });

}


function newPin(data) {
  var user = firebase.auth().currentUser;
  
  var usuarioData = {
    nome: user.displayName,
    id: user.uid
  }

  var newPinKey = firebase.database().ref().child('pins').push().key;

  firebase.database().ref('pins/'+newPinKey).set(data);
  firebase.database().ref('pins/'+newPinKey+'/usuario').set(usuarioData);

  $('#form-pin').find('#titlePin').val("");
  $('#form-pin').find('#descriptionPin').val("");

  $('#modal-add').closeModal();
}


function initialize()
{
  if ($('#googleMap').length) {
    initMap()
  }
}

$(document).ready(function() {
  var mapModal = true;

  $('.modal-trigger').leanModal({
      ready: function() { 
          if (mapModal) {
              initMapModal();
              mapModal=false;
          }
      }
  });
});



google.maps.event.addDomListener(window, 'load', initialize);

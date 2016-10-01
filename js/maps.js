var myCenter=new google.maps.LatLng(-23.574761, -46.622472);
var construcaoLocal=new google.maps.LatLng(-23.575228, -46.622542);
var aguaLocal1=new google.maps.LatLng(-23.575331, -46.622070);
var aguaLocal2=new google.maps.LatLng(-23.574870, -46.622762);
var eventoLocal1=new google.maps.LatLng(-23.574515, -46.623416);

function initialize()
{
  // INITIAL POSITION

  var mapProp = {
    center:myCenter,
    zoom:18,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var mapPropModal = {
    center:myCenter,
    zoom:18,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };

  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
  var mapModal=new google.maps.Map(document.getElementById("googleMapModal"),mapPropModal);

  // INSTANCIA PINS

  var pinInitial=new google.maps.Marker({
    position:myCenter,
    icon:'img/pin/mini/pin_robin.png'
  });
  var construcao=new google.maps.Marker({
    position:construcaoLocal,
    icon:'img/pin/mini/pin_construcao.png'
  });
  var faltaAgua1=new google.maps.Marker({
    position:aguaLocal1,
    icon:'img/pin/mini/pin_agua.png'
  });
  var faltaAgua2=new google.maps.Marker({
    position:aguaLocal2,
    icon:'img/pin/mini/pin_agua.png'
  });
  var evento1=new google.maps.Marker({
    position:eventoLocal1,
    icon:'img/pin/mini/pin_evento.png'
  });

  var pinInitialModal=new google.maps.Marker({
    position:myCenter
  });

  // INFOWINDOWS

  var infowindowInitial = new google.maps.InfoWindow({
    content:" <p>Rua São João Del Rei, 22 </p>"
  });
  var construcaoInfo = new google.maps.InfoWindow({
    content:"<p>Estão construindo um prédio na Rua Heitor Peixoto e a rua está fechada</p> <p><b>Angelina Jolie</b><span>3 horas atrás</span></p>"
  });
  var faltaAguaInfo1 = new google.maps.InfoWindow({
    content:"<p>Acabou a água e está sem previsão de retorno.</p> <p><b>Will Smith</b><span>1 hora atrás</span></p>"
  });
  var faltaAguaInfo2 = new google.maps.InfoWindow({
    content:"<p>Falta de água devido a contrução da rua de trás.</p> <p><b>Brad Pitt</b><span>30 min. atrás</span></p>"
  });
  var eventoInfo1 = new google.maps.InfoWindow({
    content:"<p>Hackaton Fiap</p> <p><b>Mark Zuckerberg</b><span>3 min. atrás</span></p>"
  });

  // CHAMA INFOWINDOWS

  google.maps.event.addListener(pinInitial, 'click', function() {
    infowindowInitial.open(map,pinInitial);
  });
  google.maps.event.addListener(construcao, 'click', function() {
    construcaoInfo.open(map,construcao);
  });
  google.maps.event.addListener(faltaAgua1, 'click', function() {
    faltaAguaInfo1.open(map,faltaAgua1);
  });
  google.maps.event.addListener(faltaAgua2, 'click', function() {
    faltaAguaInfo2.open(map,faltaAgua2);
  });
  google.maps.event.addListener(evento1, 'click', function() {
    eventoInfo1.open(map,evento1);
  });

  // CHAMA PINS NO MAPA

  pinInitial.setMap(map);
  construcao.setMap(map);
  faltaAgua1.setMap(map);
  faltaAgua2.setMap(map);
  evento1.setMap(map);
  pinInitialModal.setMap(mapModal);
}

google.maps.event.addDomListener(window, 'load', initialize);

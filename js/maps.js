var myCenter=new google.maps.LatLng(-23.574761, -46.622472);

function  initMap(){
  var mapProp = {
    center:myCenter,
    zoom:18,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };

  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

  map.addListener('center_changed', function() {
    var lat = map.getCenter().lat();
    var lng = map.getCenter().lng();

    geoQuery.updateCriteria({
      center: [lat, lng]
    });
  });

  if ($('#map-search').length) {

      var input = document.getElementById('map-search');
      var searchBox = new google.maps.places.SearchBox(input);
      // map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

      map.addListener('bounds_changed', function() {
        searchBox.setBounds(map.getBounds());
      });

      searchBox.addListener('places_changed', function() {
        var places = searchBox.getPlaces();

        if (places.length == 0) {
          return;
        }
        // For each place, get the icon, name and location.
        var bounds = new google.maps.LatLngBounds();
        places.forEach(function(place) {

          if (place.geometry.viewport) {
            // Only geocodes have viewport.
            bounds.union(place.geometry.viewport);
          } else {
            bounds.extend(place.geometry.location);
          }
        });
        map.fitBounds(bounds);
      });
  }



  var geoQuery = geoFire.query({
    center: [-23.574761, -46.622472],
    radius: 5
  });

  var onKeyEnteredRegistration = geoQuery.on("key_entered", function(key, location, distance) {
    return firebase.database().ref('/pins/' + key).once('value').then(function(snapshot) {
      
      var pinData = snapshot.val();
      var now = new Date();
      var lastHour = new Date(now.getTime() - (1000*60*60*12));

      if (pinData["data"] >= lastHour) {
        addPinToMap(key, pinData, map);
      }else{
        geoFire.remove(key);
      }
    });
  });

  var onKeyExitedRegistration = geoQuery.on("key_exited", function(key, location, distance) {
    removePin(key);
  });
}

var markersArray = [];

function removePin(key){
  if (markersArray[key]!==undefined) {
    markersArray[key].setMap(null);
    markersArray.splice( key, 1 );
    $('#tab-feed li[data-id="'+key+'"]').remove();
  }
}

function addPinToMap(key, pin, map){

  var icon ='img/pin/mini/pin_'+pin['categoria']+'.png';

  var marker = new google.maps.Marker({
    position: {lat: pin['latitude'], lng: pin['longitude']},
    icon: icon,
    map: map,
    title: pin['titulo']
  });

  markersArray[key]=marker;

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

  var feedHtml = '<li data-id="'+key+'">'
                        +'<div class="photo-user circle"></div>'
                        +'<div class="content-msg">'
                            +'<p class="name-user">'+usuarioNome+'</p>'
                            +'<p class="simple">'+pin['descricao']+'</p>'
                            +'<p class="time-notification">'+time+'</p>'
                        +'</div>'
                        +'<div class="type-notification '+pin['categoria']+'"></div>'
                    +'</li>';

  $('#tab-feed').prepend(feedHtml)
$(".nano").nanoScroller();



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
  geoFire.set(newPinKey, [data.latitude, data.longitude]);


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

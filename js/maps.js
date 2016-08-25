var myCenter=new google.maps.LatLng(51.508742,-0.120850);

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:18,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  icon:'img/pin/pin_agua.png'
  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);

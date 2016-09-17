var markers = [];

var map = new google.maps.Map(document.getElementById('map'), {
zoom: 9,
center: new google.maps.LatLng(14.8302664,121.1126421),
mapTypeId: google.maps.MapTypeId.ROADMAP
});
var locations_danger = dangerArray;
var locations_safe = safeArray;


var infowindow = new google.maps.InfoWindow();
var marker, i,earthquake;


for (i = 0; i < locations_danger.length; i++) {
  marker = new google.maps.Marker({
  icon: 'images/danger.png',
    position: new google.maps.LatLng(locations_danger[i][3], locations_danger[i][4]),
    map: map
  });

  google.maps.event.addListener(marker, 'click', (function(marker, i) {
    return function() {
      infowindow.setContent("<b>Date: "+locations_danger[i][1]+"<br>Time: "+locations_danger[i][2]+"<br></b>");
      infowindow.open(map, marker);
    }
  })(marker, i));
    markers.push(marker);

}

for (i = 0; i < locations_safe.length; i++) {
  marker = new google.maps.Marker({
    icon: 'images/safe.png',
    position: new google.maps.LatLng(locations_safe[i][3], locations_safe[i][4]),
    map: map
  });

  google.maps.event.addListener(marker, 'click', (function(marker, i) {
    return function() {
      infowindow.setContent("<b>Date: "+locations_safe[i][1]+"<br>Time: "+locations_safe[i][2]+"<br></b>");
      infowindow.open(map, marker);
    }
  })(marker, i));
    markers.push(marker);
}

//set earthquakes minus the evacuation
function setMapOnAll(map) {
       for (var i = 0; i <  locations_danger.length; i++) {
         markers[i].setMap(map);
       }
     }
     function setSafe(map) {
            for (var i = locations_danger.length; i < locations_danger.length+locations_safe.length; i++) {
              markers[i].setMap(map);
            }
          }
          function setAll(map) {
                 for (var i = 0; i < locations_danger.length+locations_safe.length; i++) {
                   markers[i].setMap(map);
                 }
               }

function showDanger() {
      setMapOnAll(map);
      setSafe(null);
      userCoordinate.setMap(null);

    }
    function showSafe() {
            setMapOnAll(null);
            setSafe(map);
            userCoordinate.setMap(null);

          }
function showAll(){
  setAll(map);
}

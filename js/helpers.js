var lock = new PatternLock("#patternContainer", {
    onDraw:function(pattern){
      console.log(pattern);
      $("#pattern").val(pattern).trigger('change');
    }
});

$('#marker').change(function(){
  if($("#marker").val() != "" && $("#pattern").val() != ""){
    $("#encrypt").removeAttr("disabled");
  } else {
    $("#encrypt").attr("disabled", true);
  }
});

var markersArray = [];

function clearOverlays() {
  for (var i = 0; i < markersArray.length; i++ ) {
    markersArray[i].setMap(null);
  }
  markersArray.length = 0;
}

var initMap = function () {
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 4
  });

  if ((location.hostname === "localhost" || location.hostname === "127.0.0.1" ) || location.protocol == 'https:')
    if (navigator.geolocation) {
       navigator.geolocation.getCurrentPosition(function (position) {
           initialLocation = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
           map.setCenter(initialLocation);
           map.setZoom(15);
       });
    }
  }
  
  map.addListener('click', function(e) {
    clearOverlays();
    placeMarkerAndPanTo(e.latLng, map);
  });
}

function placeMarkerAndPanTo(latLng, map) {
  console.log(latLng.lat() + "&" + latLng.lng());
  $("#marker").val(latLng.lat() + "&" + latLng.lng()).trigger('change');
  var marker = new google.maps.Marker({
    position: latLng,
    map: map
  });

  markersArray.push(marker);
  map.panTo(latLng);
}

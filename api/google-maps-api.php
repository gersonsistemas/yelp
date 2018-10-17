<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      #map {
        height: 600px;
        width: 100%;
      }
      html, body {
        height: 50%;
        margin: 0;
        padding: 0;
      }

      .controls {
        margin-top: 10px;
        border: 1px solid transparent;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        height: 32px;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
      }

      #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 300px;
      }

      #pac-input:focus {
        border-color: #4d90fe;
      }

      .pac-container {
        font-family: Roboto;
      }

      #type-selector {
        color: #fff;
        background-color: #4d90fe;
        padding: 5px 11px 0px 11px;
      }

      #type-selector label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }
      #target {
        width: 345px;
      }
    </style>
  </head>
  <body>
    <input id="pac-input" class="controls" type="text" placeholder="Search Box">
    <div id="map"></div>
    <script>
      function initMap() {

        var map = new google.maps.Map(document.getElementById('map'), {
        center: new google.maps.LatLng(<?php echo "$_POST[latitude]";?>, <?php echo "$_POST[longitude]";?>),
        zoom: 13,
        });
  
        var infoWindow = new google.maps.InfoWindow({map: map});
    
        //Creo un evento asociado a "mapa" cuando se hace "click" sobre el
        google.maps.event.addListener(map, "click", function(evento) {
          //Obtengo las coordenadas separadas
          var latitude = evento.latLng.lat();
          var longitude = evento.latLng.lng();

          var citymap = {
        		position: {
          	center: {lat: evento.latLng.lat(), lng: evento.latLng.lng()}
        		}
      		};
          //Unir en una unica variable
          var coordenadas = "Use latitude: " + evento.latLng.lat() + " and longitude: " + evento.latLng.lng();
          
          //Las envio a los input del formulario
          document.formulario.latitude.value = latitude; 
          document.formulario.longitude.value = longitude;
     
          //Las muestro con un popup
          alert(coordenadas);

          for (var city in citymap) {
          	var cityCircle = new google.maps.Circle({
	            strokeColor: '#FF0000',
	            strokeOpacity: 0.8,
	            strokeWeight: 2,
	            fillColor: '#FF0000',
	            fillOpacity: 0.35,
	            map: map,
	            center: citymap[city].center,
	            animation: google.maps.Animation.DROP,
	            radius: 500
         		});
        	}
          
          //Debo crear un punto geografico utilizando google.maps.LatLng
          var coordenadas = new google.maps.LatLng(latitude, longitude);

          //Creo un marcador utilizando las coordenadas obtenidas y almacenadas por separado en "latitud" y "longitud"
          var marcador = new google.maps.Marker({
            position: coordenadas,
            map: map, animation: 
            google.maps.Animation.DROP, 
            title:"Un marcador cualquiera"});
        }); 
        //Fin del evento

        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });

        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }

          // Clear out the old markers.
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
              map: map,
              icon: icon,
              title: place.name,
              position: place.geometry.location
            }));

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
    </script>

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=APIKEY&libraries=places&callback=initMap">
    </script>
  </body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>Google Maps API - Multiple Flags Example</title>
	<style>
		#map {
			height: 500px;
			width: 100%;
		}

		@import url("https://fonts.googleapis.com/css?family=Open+Sans:400,700");

/* RESET RULES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
:root {
  --white: #afafaf;
  --red: #e31b23;
  --bodyColor: #292a2b;
  --borderFormEls: hsl(0, 0%, 10%);
  --bgFormEls: hsl(0, 0%, 14%);
  --bgFormElsFocus: hsl(0, 7%, 20%);
}

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  outline: none;
}

a {
  color: inherit;
}

input,
select,
textarea,
button {
  font-family: inherit;
  font-size: 100%;
}

button,
label {
  cursor: pointer;
}

select {
  appearance: none;
}

/* Remove native arrow on IE */
select::-ms-expand {
  display: none;
}

/*Remove dotted outline from selected option on Firefox*/
/*https://stackoverflow.com/questions/3773430/remove-outline-from-select-box-in-ff/18853002#18853002*/
/*We use !important to override the color set for the select on line 99*/
select:-moz-focusring {
  color: transparent !important;
  text-shadow: 0 0 0 var(--white);
}

textarea {
  resize: none;
}

ul {
  list-style: none;
}

body {
  font: 18px/1.5 "Open Sans", sans-serif;
  background: var(--bodyColor);
  color: var(--white);
  margin: 1.5rem 0;
}

.container {
  max-width: 800px;
  margin: 0 auto;
  margin-top:100px;
  padding: 0 1.5rem;
}

/* FORM ELEMENTS
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.my-form h1 {
  margin-bottom: 1.5rem;
}

.my-form li,
.my-form .grid > *:not(:last-child) {
  margin-bottom: 1.5rem;
}

.my-form select,
.my-form input,
.my-form textarea,
.my-form button {
  width: 100%;
  line-height: 1.5;
  padding: 15px 10px;
  border: 1px solid var(--borderFormEls);
  color: var(--white);
  background-color:#191a1a;
  transition: background-color 0.3s cubic-bezier(0.57, 0.21, 0.69, 1.25),
    transform 0.3s cubic-bezier(0.57, 0.21, 0.69, 1.25);
}

.my-form textarea {
  height: 170px;
}

.my-form ::placeholder {
  color: inherit;
  /*Fix opacity issue on Firefox*/
  opacity: 1;
}

.my-form select:focus,
.my-form input:focus,
.my-form textarea:focus,
.my-form button:enabled:hover,
.my-form button:focus,
.my-form input[type="checkbox"]:focus + label {
  background: var(--bgFormElsFocus);
}

.my-form select:focus,
.my-form input:focus,
.my-form textarea:focus {
  transform: scale(1.02);
}

.my-form *:required,
.my-form select {
  background-repeat: no-repeat;
  background-position: center right 12px;
  background-size: 15px 15px;
}

.my-form *:required {
  background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/asterisk.svg);  
}

.my-form select {
  background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/down.svg);
}

.my-form *:disabled {
  cursor: default;
  filter: blur(2px);
}
	</style>
</head>
<body>
<table style="width:100%">
  <tr>
    <td><?php require 'indexfetch (2).php';?></td>
  </tr>
</table><br/><br/>
	<div>
		<label for="address">Enter an address:</label>
		<input type="text" id="address" placeholder="Address">
		<label for="flag-type">Select a flag type:</label>
		<select id="flag-type">
			<option value="red">Red Flag</option>
			<option value="blue">Blue Flag</option>
			<option value="green">Green Flag</option>
			<option value="yellow">Yellow Flag</option>
		</select>
		<button onclick="addMarker()">Approve</button>
	</div>
	<div id="map"></div>
	<script>
		var map;
		var markers = [];

		function initMap() {
			map = new google.maps.Map(document.getElementById('map'), {
				center: {lat: 7.8731, lng:80.7718},
            zoom: 8
			});
		}
    


		function addMarker() {
			var address = document.getElementById('address').value;
			var flagType = document.getElementById('flag-type').value;
			var geocoder = new google.maps.Geocoder();
			geocoder.geocode({'address': address}, function(results, status) {
				if (status === 'OK') {
					var marker = new google.maps.Marker({
						position: results[0].geometry.location,
						map: map,
						icon: getMarkerIcon(flagType)
					});
					markers.push(marker);
				} else {
					alert('Geocode was not successful for the following reason: ' + status);
				}
			});
		}

		function getMarkerIcon(flagType) {
			var markerIcon = '';
			switch(flagType) {
				case 'red':
					markerIcon = 'http://maps.google.com/mapfiles/ms/icons/red-dot.png';
					break;
				case 'blue':
					markerIcon = 'http://maps.google.com/mapfiles/ms/icons/blue-dot.png';
					break;
				case 'green':
					markerIcon = 'http://maps.google.com/mapfiles/ms/icons/green-dot.png';
					break;
				case 'yellow':
					markerIcon = 'http://maps.google.com/mapfiles/ms/icons/yellow-dot.png';
					break;
			}
			return markerIcon;
		}

    var geocoder = new google.maps.Geocoder();
geocoder.geocode({address: '	96 "A", Mahiyangana Road, Badulla.'}, function(results, status) {
  if (status === 'OK') {
    var location = results[0].geometry.location;
    map.setCenter(location);
    var marker = new google.maps.Marker({
      map: map,
      position: location
    });
    
  } 
});
	</script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAx9qVEgwT3rlE5yciz9S76F6ISao0QMJs&callback=initMap"></script>
</body>
</html>
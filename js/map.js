document.getElementById('search').addEventListener('click', initMap);
window.onload = function() {
	var input = document.getElementById("adresse").focus();
  }
var geocoder;

function getRandomInt(min, max) {
	min = Math.ceil(min);
	max = Math.floor(max);
	return (Math.floor(Math.random() * (max - min)) + min) / 1000000;
}


// Convertir adresse en lat/long
function convertRad(input) {
	return (Math.PI * input) / 180;
}

// Convertir adresse en lat/long
function Distance(lat_a_degre, lon_a_degre, lat_b_degre, lon_b_degre) {
	R = 6378000 // Rayon de la terre en mètre
	lat_a = convertRad(lat_a_degre);
	lon_a = convertRad(lon_a_degre);
	lat_b = convertRad(lat_b_degre);
	lon_b = convertRad(lon_b_degre);
	d = R * (Math.PI / 2 - Math.asin(Math.sin(lat_b) * Math.sin(lat_a) + Math.cos(lon_b - lon_a) * Math.cos(lat_b) *
		Math.cos(lat_a)))
	return d;
}

function initialize() {
	geocoder = new google.maps.Geocoder();
}

function initMap(e) {

	var min1 = 45908635;
	var max1 = 45929803;
	var min2 = 6078718;
	var max2 = 6153979;
	var min3 = 45864183;
	var max3 = 45902089;
	var min4 = 6058902;
	var max4 = 6122631;
	var car1y = getRandomInt(min1, max1);
	var car1x = getRandomInt(min2, max2);
	var car2y = getRandomInt(min1, max1);
	var car2x = getRandomInt(min2, max2);
	var car3y = getRandomInt(min1, max1);
	var car3x = getRandomInt(min2, max2);
	var car4y = getRandomInt(min3, max3);
	var car4x = getRandomInt(min4, max4);
	var car5y = getRandomInt(min3, max3);
	var car5x = getRandomInt(min4, max4);

	var directionsService = new google.maps.DirectionsService;
	var directionsDisplay = new google.maps.DirectionsRenderer;
	var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 13,
		center: {
			lat: 45.897521,
			lng: 6.120606
		},
		styles: [{
				elementType: 'geometry',
				stylers: [{
					color: '#242f3e'
				}]
			},
			{
				elementType: 'labels.text.stroke',
				stylers: [{
					color: '#242f3e'
				}]
			},
			{
				elementType: 'labels.text.fill',
				stylers: [{
					color: '#746855'
				}]
			},
			{
				featureType: 'administrative.locality',
				elementType: 'labels.text.fill',
				stylers: [{
					color: '#d59563'
				}]
			},
			{
				featureType: 'poi',
				elementType: 'labels.text.fill',
				stylers: [{
					color: '#d59563'
				}]
			},
			{
				featureType: 'poi.park',
				elementType: 'geometry',
				stylers: [{
					color: '#263c3f'
				}]
			},
			{
				featureType: 'poi.park',
				elementType: 'labels.text.fill',
				stylers: [{
					color: '#6b9a76'
				}]
			},
			{
				featureType: 'road',
				elementType: 'geometry',
				stylers: [{
					color: '#38414e'
				}]
			},
			{
				featureType: 'road',
				elementType: 'geometry.stroke',
				stylers: [{
					color: '#212a37'
				}]
			},
			{
				featureType: 'road',
				elementType: 'labels.text.fill',
				stylers: [{
					color: '#9ca5b3'
				}]
			},
			{
				featureType: 'road.highway',
				elementType: 'geometry',
				stylers: [{
					color: '#746855'
				}]
			},
			{
				featureType: 'road.highway',
				elementType: 'geometry.stroke',
				stylers: [{
					color: '#1f2835'
				}]
			},
			{
				featureType: 'road.highway',
				elementType: 'labels.text.fill',
				stylers: [{
					color: '#f3d19c'
				}]
			},
			{
				featureType: 'transit',
				elementType: 'geometry',
				stylers: [{
					color: '#2f3948'
				}]
			},
			{
				featureType: 'transit.station',
				elementType: 'labels.text.fill',
				stylers: [{
					color: '#d59563'
				}]
			},
			{
				featureType: 'water',
				elementType: 'geometry',
				stylers: [{
					color: '#17263c'
				}]
			},
			{
				featureType: 'water',
				elementType: 'labels.text.fill',
				stylers: [{
					color: '#515c6d'
				}]
			},
			{
				featureType: 'water',
				elementType: 'labels.text.stroke',
				stylers: [{
					color: '#17263c'
				}]
			}
		]
	});

	directionsDisplay.setMap(map);
	calculateAndDisplayRoute(directionsService, directionsDisplay);

	function calculateAndDisplayRoute(directionsService, directionsDisplay) {
		var iconBase = 'http://maps.google.com/mapfiles/ms/micons/';
		var icons = {
			library: {
				icon: iconBase + 'cabs.png'
			}
		};
		var features = [{
				position: new google.maps.LatLng(car1y, car1x),
				type: 'library'
			},
			{
				position: new google.maps.LatLng(car2y, car2x),
				type: 'library'
			},
			{
				position: new google.maps.LatLng(car3y, car3x),
				type: 'library'
			},
			{
				position: new google.maps.LatLng(car4y, car4x),
				type: 'library'
			},
			{
				position: new google.maps.LatLng(car5y, car5x),
				type: 'library'
			},
		];

		// Create markers.
		features.forEach(function (feature) {
			var marker = new google.maps.Marker({
				position: feature.position,
				icon: icons[feature.type].icon,
				map: map
			});
		});

		var address_raw = document.getElementById("adresse").value + " haute savoie";
		var address = address_raw.split('\n');
		var seuil = 5;
		var lat, long;
		var lat1;
		var long1;
		document.getElementById('résultats').innerHTML = "";

		for (var i = 0; i < address.length; i++) {
			// ce bout là limite le nombre de requêtes envoyées simultanément pour éviter une erreur du type OVER QUERY LIMIT
			// on demande les coordonnées au gentil google
			geocoder.geocode({
					'address': address[i]
				},
				function (results, status) // Depart
				{
					if (status == google.maps.GeocoderStatus.OK) {
						lat = results[0].geometry.location.lat();
						long = results[0].geometry.location.lng();
					}
				});
		}

		var destination_raw = document.getElementById("adresse2").value + " haute savoie";
		var destination = destination_raw.split('\n');
		var seuil = 5;

		document.getElementById('fare-distance').innerHTML = "";
		for (var i = 0; i < destination.length; i++) {
			// ce bout là limite le nombre de requêtes envoyées simultanément pour éviter une erreur du type OVER QUERY LIMIT
			if (i % seuil == 0 && i > seuil) {
				alert(i + " requêtes passées sur " + destination.length);
			}
			// on demande les coordonnées au gentil google
			geocoder.geocode({
					'address': destination[i]
				},
				function (results2, status) // Destination
				{
					if (status == google.maps.GeocoderStatus.OK) {
						lat1 = results2[0].geometry.location.lat();
						long1 = results2[0].geometry.location.lng();
						var distanceInKm = 0.001 * Distance(lat, long, lat1, long1);
						if (distanceInKm < 120) {
							document.getElementById('info').innerHTML = "Info";
							document.getElementById('fare-distance').innerHTML = "Fare distance: " + distanceInKm.toFixed(2) + " km";
							var dist1 = Distance(car1y, car1x, lat, long);
							var dist2 = Distance(car2y, car2x, lat, long);
							var dist3 = Distance(car3y, car3x, lat, long);
							var dist4 = Distance(car4y, car4x, lat, long);
							var dist5 = Distance(car5y, car5x, lat, long);

							var minimum = Math.min(dist1, dist2, dist3, dist4, dist5);
							document.getElementById('nearest-taxi').innerHTML = "The nearest taxi is located " + ((0.001 * minimum).toFixed(2)) + " km away.";

							var price = (distanceInKm * 0.9).toFixed(2)
							document.getElementById('ride-price').innerHTML = "Price: " + price.toString() + " €";
							document.getElementById("confirm-button").classList.remove("hidden");
							pride='rideprice';
							document.cookie = pride+"=" + price.toString() ;

							directionsService.route({
								origin: document.getElementById('adresse').value + " haute savoie",
								destination: destination_raw,
								travelMode: 'DRIVING'

							}, function (response, status) {
								if (status === 'OK') {
									directionsDisplay.setDirections(response);
								}
							});
						} else {
							// alert("Chosen destination is out of boundry");
							// document.getElementById('info').innerHTML = "";
							document.getElementById('fare-distance').innerHTML = "Try searching again.";
							document.getElementById('nearest-taxi').innerHTML = "";
							document.getElementById('ride-price').innerHTML = "";
							document.getElementById("confirm-button").classList.add("hidden");
						}
					}
				}
			);
		}
	}
}

$(window).load(initialize)
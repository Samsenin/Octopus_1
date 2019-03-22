var addresse = [48.99782219999999, 2.390222499999936];

// Création de la map
var map = L.map('Leaflet').setView(addresse, 16);

// Création du calque images
L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
	
	MaxZoom : 20,
	attribution: '&copy; Openstreetmap France | &copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'

}).addTo(map);

// Markeur
var marker = L.marker(addresse,).addTo(map);

// Pop-UP Markeur
marker.bindPopup('<h3> Coding Valley </h3></br> <h5>32 rue de l\'Escouvrier, 95200 Sarcelles</h5> ');
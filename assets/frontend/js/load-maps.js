$(function() {
	var map = L.map('mapid').setView([-6.886795, 107.615331], 17);
L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox.streets',
    accessToken: 'pk.eyJ1IjoicmlzcWl3aW5kdSIsImEiOiJjazN1emx0N2owNjljM2RsZmgzZW4zaDRxIn0.nrjLb33mFQlbVulF_Xbmmw'
}).addTo(map);

L.marker([-6.886795, 107.615331]).addTo(map)
    .bindPopup('ITSC UNIKOM <br><a href="https://goo.gl/maps/dQgpteDE2pY6KGKa6">Google Maps</a>')
    .openPopup();
});
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peta Pontianak</title>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>

     <style>
        #map { height: 500px; }
     </style>
</head>
<body>
<div id="map"></div>

<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>

<script>
    var map = L.map('map').setView([-0.0236, 109.3307], 13); // Pontianak Coordinates

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    // Marker for Pontianak
    L.marker([-0.0236, 109.3307]).addTo(map)
        .bindPopup('<b>Pontianak</b>').openPopup();

    // Marker for Rumah Sakit
    L.marker([-0.0324, 109.3221]).addTo(map)
        .bindPopup('<b>Rumah Sakit</b>').openPopup();

    // Marker for Sekolah
    L.marker([-0.0254, 109.3443]).addTo(map)
        .bindPopup('<b>Sekolah</b>').openPopup();

    // Marker for Kampus
    L.marker([-0.0368, 109.3506]).addTo(map)
        .bindPopup('<b>Kampus</b><br').openPopup();
</script>
</body>
</html>

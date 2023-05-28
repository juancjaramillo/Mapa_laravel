<!DOCTYPE html>
<html>
<head>
    <title>Mapa con datos de MySQL en Laravel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet@1.7.1/dist/leaflet.css" />
    <style>
        #map {
            height: 400px;
        }
    </style><!DOCTYPE html>
<html>
<head>
    <title>Mapa con datos de MySQL en Laravel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet@1.7.1/dist/leaflet.css" />
    <style>
        #map {
            height: 400px;
        }
    </style>
</head>
<body>
    <h1>Mapa con datos de MySQL en Laravel</h1>
    <div id="map"></div>

    <script src="https://cdn.jsdelivr.net/npm/leaflet@1.7.1/dist/leaflet.js"></script>
    <script>
        var map = L.map('map').setView([51.505, -0.09], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        @foreach ($ubicaciones as $ubicacion)
            L.marker([{{ $ubicacion->latitud }}, {{ $ubicacion->longitud }}]).addTo(map);
        @endforeach
    </script>
</body>
</html>

</head>
<body>
    <h1>Mapa con datos de MySQL en Laravel</h1>
    <div id="map"></div>

    <script src="https://cdn.jsdelivr.net/npm/leaflet@1.7.1/dist/leaflet.js"></script>
    <script>
        var map = L.map('map').setView([51.505, -0.09], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Recorre los datos de ubicaciones y crea marcadores en el mapa
        @foreach ($ubicaciones as $ubicacion)
            L.marker([{{ $ubicacion->latitud }}, {{ $ubicacion->longitud }}]).addTo(map);
        @endforeach
    </script>
</body>
</html>

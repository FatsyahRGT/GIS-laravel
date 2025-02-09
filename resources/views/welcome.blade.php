<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Geographic Information System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://unpkg.com/maplibre-gl/dist/maplibre-gl.css">
    <script src="https://unpkg.com/maplibre-gl/dist/maplibre-gl.js"></script>
    <style>
        html, body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }
        #map {
            width: 100%;
            height: 100vh;
        }
    </style>
</head>
<body>
    <div id="map"></div>
    <script>
        var map = new maplibregl.Map({
            container: 'map',
            style: 'https://api.maptiler.com/maps/streets-v2/style.json?key=h5adLjJFVSkLVNPeR0HM',
            center: [106.8456, -6.2088], // Jakarta, Indonesia
            zoom: 10
        });

        // Tambahkan marker
        var marker = new maplibregl.Marker()
            .setLngLat([106.8456, -6.2088])
            .addTo(map);
    </script>
</body>
</html>

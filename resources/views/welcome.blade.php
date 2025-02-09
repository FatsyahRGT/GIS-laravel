<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Geographic Information System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- MapLibre CDN -->
    <link rel="stylesheet" href="https://unpkg.com/maplibre-gl/dist/maplibre-gl.css">
    <script src="https://unpkg.com/maplibre-gl/dist/maplibre-gl.js"></script>
    
    <style>
        html, body, #map { width: 100%; height: 100vh; margin: 0; padding: 0; overflow: hidden; }
        #controls, #floatingPanel { z-index: 1000; }
        #suggestions { max-height: 150px; overflow-y: auto; }
    </style>
</head>
<body>
    <!-- Panel informasi pelanggan -->
    <div id="floatingPanel" class="position-absolute bottom-0 start-0 m-2 p-2 bg-white shadow rounded" style="width: 220px; font-size: 14px;">
        
        <!-- Informasi Pelanggan -->
        <div class="text-center mb-2">
            <img src="https://via.placeholder.com/100x30" alt="Logo" class="mb-1">
            <div class="fw-bold">STATUS PELANGGAN</div>
            <small id="dateTime"></small>
        </div>

        <!-- Pencarian Wilayah -->
        <div class="mb-2">
            <input type="text" id="searchBox" class="form-control form-control-sm" placeholder="Cari wilayah..." onkeyup="fetchSuggestions()">
            <div id="suggestions" class="border rounded d-none mt-1 bg-white"></div>
        </div>

        <!-- Pencarian Pelanggan -->
        <div class="mb-2">
            <input type="text" id="searchBox" class="form-control form-control-sm" placeholder="Cari Pelanggan..." onkeyup="fetchSuggestions()">
            <div id="suggestions" class="border rounded d-none mt-1 bg-white"></div>
        </div>
    
        <div class="alert alert-success text-center p-1">🟢 Online <span>(1493/57)</span></div>
        <div class="alert alert-danger text-center p-1">🔴 2 ❌ 29 ❌ 39</div>
    
        <!-- Tombol Aksi -->
        <div class="d-grid gap-1">
            <button class="btn btn-success btn-sm">Masa Berlaku</button>
            <button class="btn btn-primary btn-sm">Mode Pengukuran</button>
            <button class="btn btn-secondary btn-sm" onclick="location.reload()">Refresh</button>
        </div>    
    </div>
</body>

    
    <!-- Peta GIS -->
    <div id="map"></div>

    <script>
        var map = new maplibregl.Map({
            container: 'map',
            style: 'https://api.maptiler.com/maps/streets-v2/style.json?key=h5adLjJFVSkLVNPeR0HM',
            center: [106.8456, -6.2088], // Jakarta
            zoom: 10
        });

        map.addControl(new maplibregl.NavigationControl());

        var marker = new maplibregl.Marker().setLngLat([106.8456, -6.2088]).addTo(map);
        var isDragEnabled = true;

        function fetchSuggestions() {
            var query = document.getElementById('searchBox').value;
            if (query.length < 2) return document.getElementById('suggestions').classList.add('d-none');
            
            fetch(`https://api.maptiler.com/geocoding/${encodeURIComponent(query)}.json?key=h5adLjJFVSkLVNPeR0HM`)
                .then(response => response.json())
                .then(data => {
                    var suggestionBox = document.getElementById('suggestions');
                    suggestionBox.innerHTML = '';
                    data.features.forEach(place => {
                        var item = document.createElement('div');
                        item.className = 'p-2 border-bottom bg-light';
                        item.innerText = place.place_name;
                        item.onclick = () => selectLocation(place);
                        suggestionBox.appendChild(item);
                    });
                    suggestionBox.classList.remove('d-none');
                })
                .catch(console.error);
        }

        function selectLocation(place) {
            var [lng, lat] = place.geometry.coordinates;
            map.flyTo({ center: [lng, lat], zoom: 12 });
            marker.setLngLat([lng, lat]);
            document.getElementById('searchBox').value = place.place_name;
            document.getElementById('suggestions').classList.add('d-none');
        }

        function updateDateTime() {
            document.getElementById('dateTime').innerText = new Date().toLocaleString();
        }
        setInterval(updateDateTime, 1000);
        updateDateTime();
    </script>
</body>
</html>

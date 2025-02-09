<!DOCTYPE html>
<html lang="id">
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
            font-family: Arial, sans-serif;
        }
        #map {
            width: 100%;
            height: 100vh;
        }
        /* Panel pencarian wilayah */
        #controls {
            position: absolute;
            top: 10px;
            left: 10px;
            background: white;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            z-index: 1000;
        }
        #searchBox {
            width: 200px;
            padding: 5px;
        }
        #suggestions {
            position: absolute;
            background: white;
            width: 210px;
            max-height: 150px;
            overflow-y: auto;
            border: 1px solid #ccc;
            display: none;
            z-index: 1001;
        }
        .suggestion-item {
            padding: 5px;
            cursor: pointer;
        }
        .suggestion-item:hover {
            background: #f0f0f0;
        }
        button {
            display: block;
            margin-top: 5px;
            padding: 5px;
            cursor: pointer;
        }
        /* Panel informasi pelanggan */
        #floatingPanel {
            position: absolute;
            top: 10px;
            right: 10px;
            background: rgba(255, 255, 255, 0.9);
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            width: 280px;
        }
        .header {
            text-align: center;
            font-size: 16px;
            font-weight: bold;
        }
        #dateTime {
            font-size: 12px;
            text-align: center;
            margin-top: 5px;
        }
        .status {
            display: flex;
            align-items: center;
            padding: 5px;
            background: #2ecc71;
            color: white;
            font-weight: bold;
            border-radius: 5px;
            margin: 5px 0;
        }
        .warning {
            display: flex;
            align-items: center;
            padding: 5px;
            background: #e74c3c;
            color: white;
            font-weight: bold;
            border-radius: 5px;
            margin: 5px 0;
        }
        .buttons {
            display: flex;
            flex-direction: column;
            gap: 5px;
            margin-top: 10px;
        }
        .buttons button {
            padding: 8px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }
        .green { background: #27ae60; color: white; }
        .blue { background: #2980b9; color: white; }
        .brown { background: #8e44ad; color: white; }
    </style>
</head>
<body>

    <!-- Panel pencarian wilayah -->
    <div id="controls">
        <input type="text" id="searchBox" placeholder="Cari wilayah..." onkeyup="fetchSuggestions()">
        <div id="suggestions"></div>
        <button onclick="toggleDrag()">🔒 Kunci Drag</button>
    </div>

    <!-- Panel informasi pelanggan -->
    <div id="floatingPanel">
        <div class="header">
            <img src="https://via.placeholder.com/120x40" alt="Logo" />
            <div>STATUS PELANGGAN</div>
            <div id="dateTime"></div>
        </div>

        <div class="status">
            🟢 Online <span>(1493/57)</span>
        </div>
        <div class="warning">
            🔴 2 ❌ 29 ❌ 39
        </div>

        <div class="buttons">
            <button class="green">Masa Berlaku Pelanggan</button>
            <button class="blue">Mode Pengukuran</button>
            <button class="brown" onclick="location.reload()">Refresh</button>
        </div>
    </div>

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

        var marker = new maplibregl.Marker()
            .setLngLat([106.8456, -6.2088])
            .addTo(map);

        var isDragEnabled = true;

        function toggleDrag() {
            if (isDragEnabled) {
                map.dragPan.disable();
                alert("Drag dikunci");
            } else {
                map.dragPan.enable();
                alert("Drag dibuka");
            }
            isDragEnabled = !isDragEnabled;
        }

        function fetchSuggestions() {
            var query = document.getElementById('searchBox').value;
            if (query.length < 2) {
                document.getElementById('suggestions').style.display = 'none';
                return;
            }

            var url = `https://api.maptiler.com/geocoding/${encodeURIComponent(query)}.json?key=h5adLjJFVSkLVNPeR0HM`;

            fetch(url)
                .then(response => response.json())
                .then(data => {
                    var suggestionBox = document.getElementById('suggestions');
                    suggestionBox.innerHTML = '';
                    if (data.features.length > 0) {
                        data.features.forEach(place => {
                            var item = document.createElement('div');
                            item.className = 'suggestion-item';
                            item.innerText = place.place_name;
                            item.onclick = function() {
                                selectLocation(place);
                            };
                            suggestionBox.appendChild(item);
                        });
                        suggestionBox.style.display = 'block';
                    } else {
                        suggestionBox.style.display = 'none';
                    }
                })
                .catch(error => console.error("Error fetching suggestions:", error));
        }

        function selectLocation(place) {
            var lng = place.geometry.coordinates[0];
            var lat = place.geometry.coordinates[1];

            map.flyTo({ center: [lng, lat], zoom: 12 });

            marker.setLngLat([lng, lat]);

            document.getElementById('searchBox').value = place.place_name;
            document.getElementById('suggestions').style.display = 'none';
        }

        function updateDateTime() {
            const now = new Date();
            document.getElementById('dateTime').innerText = now.toLocaleString();
        }
        setInterval(updateDateTime, 1000);
        updateDateTime();
    </script>

</body>
</html>

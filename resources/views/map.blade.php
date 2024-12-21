<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gökyüzü Haritası</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #map {
            height: 600px;
            width: 100%;
        }
    </style>
</head>
<body class="bg-light">
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="text-primary">Kişiye Özel Gökyüzü Haritası</h1>
        <a href="/" class="btn btn-secondary">Geri Dön</a>
    </div>
    <div class="card shadow-lg">
        <div class="card-body p-4">
            <div id="map"></div>
        </div>
    </div>
</div>

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script>
    const lat = {{ $lat }};
    const lng = {{ $lng }};
    const birthDate = "{{ $birth_date }}";

    // Harita oluşturma
    const map = L.map('map').setView([lat, lng], 13);

    // Harita katmanı
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    // Harita işareti
    L.marker([lat, lng]).addTo(map)
        .bindPopup(`Doğum Yeri: ${lat}, ${lng}<br>Doğum Tarihi: ${birthDate}`)
        .openPopup();

    // Buraya daha gelişmiş gökyüzü haritası mantığını ekleyebilirsiniz.
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

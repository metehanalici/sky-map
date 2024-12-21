<!DOCTYPE html>
<html>
<head>
    <title>Gökyüzü Haritanız</title>
</head>
<body>
<h1>{{ $birthDetail->name }} için Özel Gökyüzü Haritası</h1>
<p>Doğum Yeri: {{ $birthDetail->birth_place }}</p>
<p>Doğum Tarihi: {{ $birthDetail->birth_date }}</p>

@if($skyMapUrl)
    <img src="{{ $skyMapUrl }}" alt="Gökyüzü Haritası">
@else
    <p>Gökyüzü haritası oluşturulamadı.</p>
@endif
</body>
</html>

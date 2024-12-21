@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Kişisel Gökyüzü Haritanız</h1>
        <p><strong>Doğum Yeri:</strong> {{ $latitude }}, {{ $longitude }}</p>
        <p><strong>Doğum Tarihi:</strong> {{ $birthdate }}</p>
        <p><strong>Doğum Saati:</strong> {{ $birthtime }}</p>

        <!-- Gökyüzü haritasını burada görüntüleyin -->
        <!-- Örneğin, bir resim veya interaktif harita ekleyebilirsiniz -->

        <div>
            <!-- Placeholder -->
            <img src="path_to_generated_sky_map_image" alt="Gökyüzü Haritası">
        </div>
    </div>
@endsection

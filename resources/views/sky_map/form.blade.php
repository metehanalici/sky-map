@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Kişisel Gökyüzü Haritanızı Oluşturun</h1>
        <form action="{{ route('sky_map.generate') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="birthplace">Doğum Yeri:</label>
                <input type="text" name="birthplace" id="birthplace" class="form-control" required>
                @error('birthplace')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="birthdate">Doğum Tarihi:</label>
                <input type="date" name="birthdate" id="birthdate" class="form-control" required>
                @error('birthdate')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="birthtime">Doğum Saati:</label>
                <input type="time" name="birthtime" id="birthtime" class="form-control" required>
                @error('birthtime')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mt-3">Gökyüzü Haritasını Oluştur</button>
        </form>
    </div>
@endsection

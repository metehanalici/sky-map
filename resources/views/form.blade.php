<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gökyüzü Haritası Oluştur</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header text-center bg-primary text-white">
            <h1>Kişiye Özel Gökyüzü Haritası</h1>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('generateMap') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="location" class="form-label">Doğum Yeri:</label>
                    <input type="text" class="form-control" id="location" name="location" placeholder="Örneğin: İstanbul" required>
                </div>

                <div class="mb-3">
                    <label for="birth_date" class="form-label">Doğum Tarihi:</label>
                    <input type="date" class="form-control" id="birth_date" name="birth_date" required>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-lg">Haritayı Oluştur</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

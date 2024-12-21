<!DOCTYPE html>
<html>
<head>
    <title>Doğum Bilgileri</title>
</head>
<body>
<h1>Doğum Bilgilerinizi Girin</h1>

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('birth.store') }}" method="POST">
    @csrf
    <label for="name">İsim:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="birth_place">Doğum Yeri:</label>
    <input type="text" id="birth_place" name="birth_place" required><br><br>

    <label for="birth_date">Doğum Tarihi:</label>
    <input type="datetime-local" id="birth_date" name="birth_date" required><br><br>

    <button type="submit">Göster</button>
</form>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Hitung Akar Kuadrat</title>
</head>
<body>
    <h1>Hitung Akar Kuadrat</h1>
    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif
    <form method="post" action="/calculate-square-root">
        @csrf
        <label for="number">Masukkan angka:</label>
        <input type="number" name="number" required max="1000">
        <button type="submit">Hitung</button>
    </form>
    @isset($squareRoot)
        <h2>Hasil Akar Kuadrat:</h2>
        <p>{{ $squareRoot }}</p>
    @endisset
</body>
</html>

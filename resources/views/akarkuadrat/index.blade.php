<!-- resources/views/akarkuadrat/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akar Kuadrat Web</title>
</head>
<body>
    <h1>Hitung Nilai Akar Kuadrat</h1>

    <form id="akarForm">
        @csrf
        <label for="angka">Masukkan Angka:</label>
        <input type="number" name="angka" id="angka" required>
        <button type="submit">Hitung</button>
        <button type="reset">Reset</button>
    </form>

    <div id="hasilAkar"></div>

    <div id="errorAngka" style="color: red;"></div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

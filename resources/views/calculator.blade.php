<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator Akar Kuadrat</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Kalkulator Akar Kuadrat</h1>
        <form action="/calculate" method="post">
            @csrf
            <div class="form-group">
                <label for="number">Masukkan angka:</label>
                <input type="number" class="form-control" id="number" name="number" placeholder="Masukkan angka" value="{{ isset($number) ? $number : '' }}">
            </div>
            <button type="submit" class="btn btn-primary">Hitung</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </form>
        @if(isset($result))
            <div class="alert alert-success mt-3">
                <p>Hasil Akar Kuadrat: {{ $result }}</p>
            </div>
        @endif
        @if($errors->any())
            <div class="alert alert-danger mt-3">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</body>
</html>

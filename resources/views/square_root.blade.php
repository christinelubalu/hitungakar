<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Akar Kuadrat</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Kalkulator Akar Kuadrat</h1>
        <div id="app">
            <div class="form-group text-center">
                <label for="number">Masukkan angka (<= 1000):</label>
                <input type="number" v-model="inputNumber" class="form-control" max="1000">
            </div>
            <div class="text-center">
                <button @click="calculateSquareRoot" class="btn btn-primary">Hitung</button>
            </div>
            <div class="text-center mt-4">
                <div v-if="error" class="text-danger">{{ error }}</div>
                <div v-if="result" class="text-success">Hasil Akar Kuadrat: {{ result }}</div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.min.js"></script>
    <script>
        new Vue({
            el: '#app',
            data: {
                inputNumber: null,
                result: null,
                error: null
            },
            methods: {
                calculateSquareRoot: function() {
                    if (!this.inputNumber || isNaN(this.inputNumber)) {
                        this.error = "Masukkan angka yang valid";
                        return;
                    }

                    this.error = null;

                    axios.post('/api/calculate-square-root', {
                        number: this.inputNumber
                    })
                    .then(response => {
                        this.result = response.data.result;
                    })
                    .catch(error => {
                        this.error = "Terjadi kesalahan saat menghitung akar kuadrat";
                    });
                }
            }
        });
    </script>
</body>
</html>

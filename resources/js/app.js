import './bootstrap';
// public/js/app.js

document.addEventListener('DOMContentLoaded', function () {
    const akarForm = document.getElementById('akarForm');
    const hasilAkar = document.getElementById('hasilAkar');
    const errorAngka = document.getElementById('errorAngka');

    akarForm.addEventListener('submit', function (e) {
        e.preventDefault();

        const angkaInput = document.getElementById('angka');
        const angka = parseFloat(angkaInput.value);

        if (isNaN(angka) || angka > 1000) {
            errorAngka.innerText = 'Masukkan angka yang valid (maksimal 1000).';
            hasilAkar.innerText = '';
        } else {
            errorAngka.innerText = '';
            fetch('/api/hitung-akarkuadrat', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                },
                body: JSON.stringify({ angka: angka }),
            })
            .then(response => response.json())
            .then(data => {
                hasilAkar.innerText = `Hasil Akar Kuadrat: ${data.hasil}`;
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }
    });

    akarForm.addEventListener('reset', function () {
        errorAngka.innerText = '';
        hasilAkar.innerText = '';
    });
});

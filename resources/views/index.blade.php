<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <style>
            body {
                padding: 20px;
            }
        </style>
    </head>
    <body>
        <table class="table">
            <thead>
                <tr>
                    <th>Pengguna</th>
                    <th>Paket Langganan</th>
                    <th>Mentor Kelas</th>
                    <th>Durasi Nonton</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $dt)
                    <tr>
                        <th>{{ $dt->pengguna }}</th>
                        <td>{{ $dt->paket }}</td>
                        <td>{{ $dt->mentor }}</td>
                        <td>{{ $dt->durasi_nonton }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <p>Total orang: {{ $count }}</p>
        <p>Hasil bersih: {{ $count }} x (Rp69000 x 20%) = Rp{{ $hasil_bersih }}</p>
        <p>Total durasi: {{ $total_durasi }} menit</p>
        <hr>
        <p>Durasi Total A: {{ $durasi_a }} menit</p>
        <p>Durasi Total B: {{ $durasi_b }} menit</p>
        <p>Durasi Total C: {{ $durasi_c }} menit</p>
        <hr>
        <p>Persen A: {{ $persen_a }}</p>
        <p>Persen B: {{ $persen_b }}</p>
        <p>Persen C: {{ $persen_c }}</p>
        <hr>
        <p>Penghasilan Mentor A: Rp{{ $penghasilan_a }}</p>
        <p>Penghasilan Mentor B: Rp{{ $penghasilan_b }}</p>
        <p>Penghasilan Mentor C: Rp{{ $penghasilan_c }}</p>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
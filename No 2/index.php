<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No 2</title>
</head>
<body>
    <h1>Kompensasi Jam</h1>
    <form action="" method="POST">
        <label for="masuk">Waktu masuk</label>
        <input type="time" name="masuk">
        <label for="pulang">Waktu pulang</label>
        <input type="time" name="pulang">
        <input type="submit" value="hitung">
    </form>
</body>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $masuk = $_POST['masuk'];
        $pulang = $_POST['pulang'];

        $masuk_detik = strtotime($masuk);
        $pulang_detik = strtotime($pulang);

        $selisih_detik = $pulang_detik - $masuk_detik;
        $selisih_jam = $selisih_detik / 3600;

        $kompensasi_pertama = 50000;
        $kompensasi_berikutnya = 25000;

        $jam_lembur = $selisih_jam - 8;

        if ($jam_lembur > 0) {
            if ($jam_lembur <= 1) {
                $upah = $kompensasi_pertama;
            } else {
                $upah = $kompensasi_pertama + ($jam_lembur - 1) * $kompensasi_berikutnya;
            }

            echo "Jumlah jam lembur: " . $jam_lembur . " jam <br>";
            echo "Kompensasi: Rp " . number_format($upah, 0, ',', '.') . "<br>";
        } else {
            echo "Tidak ada jam lembur";
        }
    }
   
?>
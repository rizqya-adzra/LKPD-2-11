<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No 9</title>
</head>
<body>
    <h1>Pecahan Lembar</h1>
    <form action="" method="POST">
        <label for="">Hitung lembah pecahan</label>
        <input type="text" name="jumlah">
        <input type="submit" name="hitung" value="Hitung">
    </form>
</body>
</html>

<?php
    $pecahan = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 500, 100, 50, 20, 10, 5, 1];

    $jumlah = isset($_POST['jumlah']) ? intval($_POST['jumlah']) : 0;
    $original_amount = $jumlah;
    $result = [];

    foreach ($pecahan as $pecah) {
        if ($jumlah >= $pecah) {
            $result[$pecah] = intdiv($jumlah, $pecah);
            $jumlah %= $pecah;
        }
    }
    
?>

<div>
    <p>Uang Rp. <?php echo number_format($original_amount, 0, ',', '.') ?></p>
    <p>Lembar rupiah</p>
</div>
<?php foreach ($result as $pecah => $jumlah_lembar): ?>
    <p>Rp. <?php echo number_format($pecah, 0, ',', '.') ?> : <?php echo $jumlah_lembar ?></p>
<?php endforeach ;?>
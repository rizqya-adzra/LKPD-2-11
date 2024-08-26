<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No 1</title>
</head>
<body>
    <h1>Pengkondisian</h1>
    <form action="" method="POST">
        <label for="teks"></label>
        <input type="text" name="teks">
        <input type="submit" value="hitung">
    </form>
</body>
</html>

<?php
    if ($_SERVER['REQUEST_METHOD'] == "POST")
    $teks = $_POST["teks"];

    $number = preg_replace('/[^0-9]/' , '', $teks);
     if ($number) {
        $arrNumber = str_split($number, 1);
        echo"teks mengandung angka : " . implode(', ', str_split($number, 1));
     } else {
        echo "teks tidak mengandung angka.";
    }
?>
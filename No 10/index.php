<title>No 10</title>

<?php 

$usia = [12, 15, 18, 20, 25, 30];
$anak_anak = 0;
$dewasa = 0;

foreach ($usia as $umur) {
    if ($umur < 18) {
        $anak_anak++;
    } else {
        $dewasa++;
    }
}

echo "Jumlah anak-anak: " . $anak_anak;
echo "Jumlah dewasa: " . $dewasa;

?>
  s
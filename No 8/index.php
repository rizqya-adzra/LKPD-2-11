<title>No 8</title>

<?php

$data = array(80, 90, 75, 100, 85, 100, 66);
$cari = array_count_values($data);

echo "jumlah angka 100: " . $cari['100'];
print_r($cari);

?>
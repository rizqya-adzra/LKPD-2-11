<title>No 7</title>

<?php

function bandingkan($nama1, $nama2) {
    $jumlah1 = strlen($nama1);  
    $jumlah2 = strlen($nama2);
    
    if ($jumlah1 > $jumlah2) {
        $selisih = $jumlah1 - $jumlah2; 
        echo $nama1 . " Memiliki jumlah karakter lebih dari " . $nama2 . " selisih: " . $selisih;
    } else if ($jumlah2 > $jumlah1) {
        $selisih = $jumlah2 - $jumlah1;
        echo $nama1 . " Memiliki jumlah karakter sedikit dari " . $nama2 . " selisih: " . $selisih;
    } else {
        echo $nama1 . " Memiliki jumlah karakter yang sama dengan " . $nama2;
    }
} bandingkan ("Fema Flamelina Putri", "Artasya Legina");
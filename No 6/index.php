<title>No 6</title>

<?php

$students = [
    [
        'nama' => 'Andi',
        'nilai' => [80, 78, 82, 78, 88],
    ],
    [
        'nama' => 'Beni',
        'nilai' => [86, 70, 80, 85, 81],
    ],
    [
        'nama' => 'Dani',
        'nilai' => [83, 91, 70, 73, 81],
    ],
    [
        'nama' => 'Eko',
        'nilai' => [89, 85, 84, 86, 88],
    ],
];

    foreach ($students as $student) {
        $total = array_sum($student['nilai']);
        $jumlah = count($student['nilai']);
        $rata2 = $total / $jumlah;
        echo "Rata rata nilai dari " . $student['nama'] . " adalah " . $rata2 . "<br>";
    }


?>
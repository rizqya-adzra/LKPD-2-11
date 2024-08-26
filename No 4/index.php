<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No 4</title>
</head>
<body>

<table>
    <?php
    for ($x = 10; $x > 0; $x--) {
        echo "<tr>";
        echo "<td>$x x 1 = $x</td>";
        echo "<td>$x x 2 = " . ($x * 2) . "</td>";
        echo "</tr>";
    }
    ?>
</table>

</html>
</body>
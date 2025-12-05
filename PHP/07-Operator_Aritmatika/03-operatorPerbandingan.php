<?php
    $a = 5;
    $b = 10;
    $c = '5';

    var_dump($a == $b) . "<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator Perbandingan</title>
</head>
<body>
    <p>a = 5, b = 10, c = '5'</p>
    <ul>
        <li>operator == : <?php var_dump($a == $b) . "<br>";?></li>
        <li>operator != : <?php var_dump($a != $b) . "<br>";?></li>
        <li>operator === : <?php var_dump($a === $c) . "<br>";?></li>
        <li>operator !== : <?php var_dump($a !== $c) . "<br>";?></li>
        <li>operator > : <?php var_dump($a > $b) . "<br>";?></li>
        <li>operator < : <?php var_dump($a < $b) . "<br>";?></li>
        <li>operator >= : <?php var_dump($a >= $b) . "<br>";?></li>
        <li>operator <= : <?php var_dump($a <= $b) . "<br>";?></li>
    </ul>
</body>
</html>
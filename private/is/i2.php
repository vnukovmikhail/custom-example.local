<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
<?php
    $x = 5;
    $y = 7;

    echo $x + $y . '<br>';
    echo $x - $y . '<br>';
    echo $x * $y . '<br>';
    echo $x / $y . '<br>';
    echo $x % $y . '<br>';

    $x += 1; # $x = $x += 7;
    $y -= 7;
    echo $x . ':' . $y . '<br>';

    $x++;
    $y--;
    echo $x . ':' . $y . '<br>';

    echo M_PI . '<br>';
    echo M_E . '<br>';

    echo abs(-22).'<br>';
    echo ceil(1.1).'<br>';
    echo floor(1.5).'<br>';
    echo round(3.512312, 2).'<>'.round(3.4).'<br>';

    $rand = mt_rand(1, 10).'<br>';
    echo $rand;

    echo min(1, 3, 5 , 0, 1).max(1, 3, 7, 0, -1).'<br>';
?> 
</body>
</html>
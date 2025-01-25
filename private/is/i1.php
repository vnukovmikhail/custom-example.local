<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
<?php
    echo "<b>Hello World!</b>"; # коментарий

    $number = 0;
    $num = 1; # или 0.1, -5, 0.101, 0,01
    # $number = 1;
    $str = 'переменная';
    $bool = true;
    echo '<br><code>' . $str . ':' . $number . ':' . $num . $bool . '</code><br>';

    $a = 0.1;
    $b = "0.6";
    echo $a + floatval($b); 

    define('MY_AGE', 19);
    echo '<br>' . MY_AGE;
?> 
</body>
</html>
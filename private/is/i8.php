<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>php</title>
</head>
<body>
<?php
    function info($word = ':^>') {
        echo "$word<br>";
    }
    info('Info printed.');
    $i = 'Let\'s do it!';
    info($i);
    info();

    function math($x, $y) {
        $res = $x + $y;
        return $res;
    }
    $res_1 = math(5, 2);
    $res_2 = math(10, 1);
    info($res_1);
    info($res_2);

    function summary($arr) {
        $summa = 0;
        foreach($arr as $value) {
            $summa += $value;
        }
        return $summa.'<br>';
    }
    $list = [5, 8, 2, 3, 5, 7, 1];
    echo summary($list);

    function info2() {
        global $x;
        $x = 0;
    }

    $x = 10;
    info2();
    echo $x.'<br>';

    function click() {
        static $count;
        $count++;
        echo $count.'<br>';
    }
    click();
    click();
    click();
?> 
</body>
</html>
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
    for($i = 0; $i < 5; $i++)
        echo 0;
    echo '<br>';

    $i = 0;
    while($i < 5) {
        echo 1;
        $i++;
    }
    echo '<br>';

    $i = 0;
    do {
        echo 0;
        $i++;
    } while ($i < 5);
    echo '<br>';

    for($el = 100; $el > 10; $el /= 2) {
        if($el < 50)
            break; # continue; - пропуск :|
        echo $el;
    }
    echo '<br>';

    $list = [1, 0, 0, 1, 1];
    for($i = 0; $i < count($list); $i++) {
        echo "Element#$i:$list[$i] ";
    }
    echo '<br>';

    $list = ['age' => 19, 'name' => 'kiki'];
    foreach($list as $item => $value) {
        echo "key[$item]=$value<br>";
    }

    $list = [1, 0, 0, 1, 1];
    foreach($list as $value) {
        echo "value:$value; ";
    }
    echo '<br>';
?> 
</body>
</html>
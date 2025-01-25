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
    $nums = array(0, 1, 2, 3);
    $nums[3] = 5;

    echo $nums[0].$nums[3].'<br>';

    $arr = [0.1, 'ik', false, -1];
    echo $arr[0].'<br>';

    $list = ['age' => 19, 'name' => 'kiki'];
    echo $list['name'].'<br>';

    $matrix = [
        [1, 0.1, 0],
        [0.3, 1, 1],
        [0.1, 0, 1]
    ];
    echo $matrix[0][1].'<br>';
?> 
</body>
</html>
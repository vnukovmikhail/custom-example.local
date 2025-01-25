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
    $a = 5;
    $str = 'ilk';
    $isFeeling = true;

    if($a == 0 && $str != 'lk') {
        echo '$a = 5';
        echo 'yes';
    } else if($a == 6 || $isFeeling) {
        echo "$a-error";
    } else
        echo 'no';
?> 
</body>
</html>
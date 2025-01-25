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
    $x = 1;

    switch($x) {
        case 7:
            echo 's';
            break;
        case 9:
            echo 'i';
            break;
        default:
            echo '._.';
            break; # можно и не писать
    }
?> 
</body>
</html>
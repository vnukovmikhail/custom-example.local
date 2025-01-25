<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
<?php
    $str = "Hello World!";
    echo "var: $str".' var: $str <br>';
    echo "<input type=\"text\"><br>";

    $length = strlen($str);
    echo trim('   fds   ');
    echo strtolower('FAS');
    echo strtoupper('saf');
    echo $length;
    
    echo md5('let\'s go.'); # кеширование
?> 
</body>
</html>
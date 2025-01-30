<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<?php
    session_start();
    // error_reporting(0); 
    $mysql = new mysqli("MySQL-8.2", "root", "", "php-example.local");
    $result = $mysql->query("SELECT * FROM `users`");
    echo 'количество пользователей: '.$result->num_rows;
?>
<body>
    <fieldset style="padding: 5px;">
        <legend>запрос на создание пользователя</legend>
        <form action="check.php" method="post">
            <input type="text" name="user_name" required placeholder="имя">
            <input type="password" name="user_pass" required placeholder="пароль">
            <input type="submit">
            <label><?=$_SESSION['success']?></label>
        </form>
    </fieldset>
    <?php
    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo 'ID:'.$row['id'].'|'.$row['login'].'<br>';
        }
    }
?>
</body>
</html>
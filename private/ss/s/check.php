<?php
    session_start();
    
    $mysql = new mysqli("MySQL-8.2", "root", "", "php-example.local");
    
    $login = $_POST['user_name'];
    $password = $_POST['user_pass'];
    $mysql->query("INSERT INTO `users` (`id`, `login`, `password`) VALUES (NULL, '$login', '$password')");
    $mysql->close();

    $_SESSION["success"] = htmlspecialchars('аккаунт создан успешно!');

    header("Location: /");
    exit();
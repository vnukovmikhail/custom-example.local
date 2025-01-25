<?php
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(trim($name) == '')
        echo 'не коректное имя пользователя';
    else if(strlen(trim($name)) <= 1)
        echo 'слишком короткое имя пользователя';
    else if(trim($email) == '' || trim($password) == '')
        echo 'необходимо заполнить поля данными';
    else {
        $_POST['password'] = md5($password);
        echo "<h1>все данные</h1>";
        foreach($_POST as $key => $value)
            echo "<p>$key: $value</p>";

        header('Location: /about.php'); # переадресация
        exit; # весь код после выполняться не будет
    }
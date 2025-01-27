<?php
echo 'fdsfsdfsdf';
    session_start();

    function redirect() {
        header('Location: /pages/contacts');
        exit();
    }

    unset($_SESSION['username']);
    unset($_SESSION['email']);
    unset($_SESSION['subject']);
    unset($_SESSION['message']);

    unset($_SESSION['error_username']);
    unset($_SESSION['error_email']);
    unset($_SESSION['error_subject']);
    unset($_SESSION['error_message']);
 
    $user_name = htmlspecialchars(trim($_POST['username']));
    $email = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    $_SESSION['username'] = $user_name;
    $_SESSION['email'] = $email;
    $_SESSION['subject'] = $subject;
    $_SESSION['message'] = $message;

    if(strlen($user_name) <= 1) {
        $_SESSION['error_username'] = 'введите корректное имя';
        redirect();
    } else if(strlen($email) < 5 || strpos($email, '@') == false) {
        $_SESSION['error_email'] = 'вы ввели некоректный email';
        redirect();
    } else if(strlen($subject) <= 5) {
        $_SESSION['error_subject'] = 'слишком короткая тема сообщения';
        redirect();
    } else if(strlen($subject) <= 6) {
        $_SESSION['error_message'] = 'короткое сообщение';
        redirect();
    } else {
        $_SESSION['error_username'] = "";
        $_SESSION['error_email'] = "";
        $_SESSION['error_subject'] = "";
        $_SESSION['error_message'] = "";
        $_SESSION["success"] = 'вы успешно зарегестрировались!';
        redirect();
    }
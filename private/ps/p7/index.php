<?php
    $title = 'php';
    require_once "blocks/header.php";
?>
<h1>Главная страница</h1>
<?php
    $message = 'сообщение...';
    $to = 'vnukovmisa72@gmail.com';
    $from = 'unoquegi@gmail.com';
    $subject = 'тема сообщения';

    $subject = "=?utf-8?B?".base64_encode($subject)."?=";
    $headers = "From: $from\r\nReply-to: $from\r\nContent-type:text/plain; charset=utf-8\r\n";

    mail($to, $subject, $message, $headers);

    require_once "blocks/footer.php";
?>
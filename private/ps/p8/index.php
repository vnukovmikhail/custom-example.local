<?php
    session_start();
    $title = 'php';
    require_once "blocks/header.php";
?>
<h1>Главная страница</h1>
<?php
    $user_name = 'Alex';
    // setcookie("user_name", $user_name, time() + 180);
    // setcookie("user_name", $user_name, time() - 180);
    // print_r($_COOKIE);
    // echo $_COOKIE['user_name'];
    $_SESSION['user_name'] = $user_name;
    unset($_SESSION['user_name']);
    session_destroy();
    if($_SESSION['user_name'] == 'Alex')
        echo 'сессия установлена';
    else
        echo 'провал запуска сессии';

    require_once "blocks/footer.php";
?>
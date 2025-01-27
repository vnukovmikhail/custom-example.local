<?php
    session_start();
    error_reporting(0);
    $title = 'contacts';
    require_once "../blocks/header.php";
?>
<h1>Контакты</h1>
<h2><?=$_SESSION["success"]?></h2>
<form action="/app/check_contacts" method="post">
    <input type="text" name="username" placeholder="имя" value="<?=$_SESSION["username"]?>"><label><?=$_SESSION['error_username']?></label><br>
    <input type="email" name="email" placeholder="почта" value="<?=$_SESSION["email"]?>"><label><?=$_SESSION['error_email']?></label><br>
    <input type="text" name="subject" placeholder="тема" value="<?=$_SESSION["subject"]?>"><label><?=$_SESSION['error_subject']?></label><br>
    <textarea name="message" placeholder="сообщение"><?=$_SESSION["message"]?></textarea><label><?=$_SESSION['error_message']?></label><br>
    <input type="submit"><br>
</form>
<?php
    require_once "../blocks/footer.php";
?>
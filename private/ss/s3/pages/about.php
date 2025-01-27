<?php
    $title = 'about-us';
    require_once "../blocks/header.php";
?>
<!DOCTYPE html>
<h1>Про нас</h1>

<section class="forms">
    <fieldset>
        <form action="check_post.php" method="post">
            <legend>запрос post</legend>
            <input type="text" name="username" placeholder="введите имя" required><br>
            <input type="email" name="email" placeholder="введите email" required><br>
            <input type="password" name="password" placeholder="введите пароль" required><br>
            <textarea name="message" placeholder="введите сообщение"></textarea><br>
            <input type="submit" value="отправить">
        </form>
    </fieldset>
    <fieldset>
        <form action="check_get.php" method="get">
            <legend>запрос get</legend>
            <input type="text" name="username" placeholder="введите имя"><br>
            <input type="email" name="email" placeholder="введите email"><br>
            <input type="password" name="password" placeholder="введите пароль"><br>
            <textarea name="message" placeholder="введите сообщение"></textarea><br>
            <input type="submit" value="отправить">
        </form>
    </fieldset>
</section>

<?php
    require_once "../blocks/footer.php";
?>
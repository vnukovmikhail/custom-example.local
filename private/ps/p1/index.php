<?php
    $title = 'php';
    require_once "blocks/header.php";
    # require выражает необходимость
    # include продолжит ввыполнение, хоть и выдаст ошибку
    # include_once только раз можно подлючить
    # require_once выдаст ошибку и не позволит создать второй компонент
?>
<h1>Главная страница</h1>
<?php
    require_once "blocks/footer.php";
?>
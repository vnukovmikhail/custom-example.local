<?php
    $title = 'php';
    require_once "blocks/header.php";
?>
<h1>Главная страница</h1>
<?php
    echo date('t F').'<br>';
    echo date('m-l H:i:s').'<br>';

    echo date('m-l H:i:s', time() + 1000).'<br>';
    echo date('m-d-Y H:i:s', strtotime('-1 Hour +1 Minute +1 Second')).'<br>';
    echo date('m-d-Y H:i:s', strtotime('last Monday')).'<br>';
    require_once "blocks/footer.php";
?>
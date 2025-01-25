<?php
    $title = 'php';
    require_once "blocks/header.php";
?>
<h1>Главная страница</h1>
<?php
    $filename = 'text.txt';
    $file = fopen($filename, 'r'); # w - перезапись a - добавление r - чтение
    fwrite($file, "example text\n");
    $content = fread($file, filesize($filename));
    echo $content;
    echo __FILE__;
    echo fileperms(__FILE__); # cmod() изменение прав доступа
    fclose($file);
    # file_put_contents('filename', 'content');
    # echo file_get_contents('filename');
    # file_exists() проверка наличия файла
    # unlink() - удаление rename() - переименование
    require_once "blocks/footer.php";
?>
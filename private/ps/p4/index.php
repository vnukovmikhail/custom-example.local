<?php
    $title = 'php';
    require_once "blocks/header.php";
?>
<h1>Главная страница</h1>
<?php
    $list = [1, 0, 2, 1, 7, 9, 3, 5];
    unset($list[1]); # удаляет элемент под ключом
    $list = array_values($list); # обновляет массив а то между ключами пробел будет
    sort($list); # rsort наоборот
    shuffle($list); # в хаотичном порядке разложить
    echo in_array(3, $list);
    $arr = array_slice($list, 2, 4);
    var_dump($arr);
    echo '<br>';
    print_r($list);
    echo '<br>';

    $arr_1 = [1, 3, 6];
    $arr_2 = [2, 4, 7];
    $arr_3 = array_merge($arr_1, $arr_2);
    var_dump($arr_3);
    $x = floatval('10');
    echo gettype($arr_1).$x.is_numeric($x); # is_типданных и это просто проверка
    echo strpos('opos', 'o');

    $words = 'k, a, v, i, s';
    $arr_words = explode(', ', $words);
    echo '<br>';
    print_r($arr_words);
    $words = implode('|', $arr_words);
    echo $words;

    require_once "blocks/footer.php";
?>
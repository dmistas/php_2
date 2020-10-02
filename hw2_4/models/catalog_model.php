<?php
require_once "../config/config.php";
//получаем номер id после которого нужны данные
$i = (isset($_GET['id'])) ? $_GET['id'] : 0;

$result = $db->query("SELECT * FROM goods WHERE id > $i LIMIT 5");
$error_array = $db->errorInfo();

if ($db->errorCode() != 0000) {
    echo "SQL ошибка: " . $error_array[2] . '<br /><br />';
}
$goods = [];
    while ($row = $result->fetch()) {
        // в результате получаем ассоциативный массив
        $goods[]=$row;
    }
//print_r($goods);
//foreach ($goods as $good){
//    echo "title of product: ".$good['title']."<br>";
//    echo "price of product: ".$good['price']."<br>";
//}

try {
    $template=(!$i)?$twig->loadTemplate('catalog.tmpl'):$twig->loadTemplate('catalog_part.tmpl');

    $content = $template->render(array(
        'goods' => $goods
    ));
    echo $content;

} catch (Exception $e) {
    die ('ERROR: ' . $e->getMessage());
}

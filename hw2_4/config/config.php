<?php
define('DB_DRIVER', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'phpgb');
define('DB_USER', 'root');
define('DB_PASS', '515298');

try {
    // соединяемся с базой данных

    $connect_str = DB_DRIVER . ':host=' . DB_HOST . ';dbname=' . DB_NAME;
    $db = new PDO($connect_str, DB_USER, DB_PASS);

    // теперь выберем несколько строчек из базы

//    $result = $db->query("SELECT * FROM `testing` LIMIT 2");
//
//    // в случае ошибки SQL выражения выведем сообщене об ошибке
//
//    $error_array = $db->errorInfo();
//
//    if ($db->errorCode() != 0000) {
//
//        echo "SQL ошибка: " . $error_array[2] . '<br /><br />';
//    }
//    // теперь получаем данные из класса PDOStatement
//
//
//    while ($row = $result->fetch()) {
//        // в результате получаем ассоциативный массив
//        print_r($row);
//    }
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}

// подгружаем и активируем авто-загрузчик Twig-а
require_once '..\library\Twig\Autoloader.php';
Twig_Autoloader::register();

try {
    // указывае где хранятся шаблоны
    $loader = new Twig_Loader_Filesystem('../templates');

    // инициализируем Twig
    $twig = new Twig_Environment($loader);

//    // подгружаем шаблон
//    $template = $twig->loadTemplate('catalog.tmpl');
//
//    // передаём в шаблон переменные и значения
//    // выводим сформированное содержание
//
//    $content = $template->render(array(
//        'goods' => $goods
//    ));
//    echo $content;

} catch (Exception $e) {
    die ('ERROR: ' . $e->getMessage());
}

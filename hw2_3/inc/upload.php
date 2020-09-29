<?php
    
    require_once("resize.php");
    

    $path_small = "../img_small/" . $_FILES['photo']['name'];
    $path = "../img/" . $_FILES['photo']['name'];
    if (copy($_FILES['photo']['tmp_name'], $path)) {
        echo "Файл загружен!<br>";
    } else {
        echo "Ошибка при загрузке файла<br>";
    }
    resize($_FILES['photo']['tmp_name'], 300);
    if (move_uploaded_file($_FILES['photo']['tmp_name'], $path_small)) {
        echo "Уменьшенная копия создана!<br>";
    } else {
        echo "Ошибка при загрузке уменьшенного файла<br>";
    }

header('location: ../index.php');



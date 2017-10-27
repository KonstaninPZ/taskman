<?php
//передача массива между двумя страницами
//
//включаем файл с массивом $file_name
include './file_name.php';
//выводим содержимое массива
foreach ($file_name as $key => $value) {
    echo "$value<br>";
}
?>


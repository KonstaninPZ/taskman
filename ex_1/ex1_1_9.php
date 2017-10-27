<?php
// Передача массива через cookies
include_once './file_name.php';

// Упаковываем массив в строку
$content = serialize($file_name);

// Устанавливаем cookie, последний параметр 
// time() + 3600 -  это время жизни cookie
// устанавливаеться на час

setcookie('file_name', $content, time() + 3600);

// Выводим ссылку на страницу second.php
echo "<a href=second.php>Переход на страницу second.php</a>";
?>
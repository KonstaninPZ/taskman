<?php
include_once './file_name.php';
// Инициирую сессию
session_start();

// Удаляем старые данные
unset($_SESSION['file_name']);

// В цикле формируем скрытые поля с элементами массива
foreach ($file_name as $name) {
    $_SESSION['file_name'][] = $name;
}

//Выводим ссылку на страницу second.php
echo "<a href=second.php>Переход на страницу second.php</a>";
?>


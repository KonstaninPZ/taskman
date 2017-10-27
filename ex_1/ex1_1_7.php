//Передача массива методом POST
<?php
include_once './file_name.php';
 ?>
<form action="second.php" method="POST">
    <?php
    //в цикле формируем скрытые поля с элементами массива
    foreach ($file_name as $name) {
        echo "<input type=hidden name=file_name[] value=$name>";
    }
    ?>
    <input type="submit" value="Переправить массив">
</form>


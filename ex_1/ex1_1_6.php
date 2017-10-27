<?php
//передача массива методом GET
include_once './file_name.php';
 //обьединяем элементы массива в строку вида
 //file_name[]=first&file_name[]=second&...
 $url = implode("&file_name[]=",$file_name);
 $url = "second.php?file_name[]=".$url;
 echo "<a href=$url>Ссылка на файл second.php</a>";
 ?>



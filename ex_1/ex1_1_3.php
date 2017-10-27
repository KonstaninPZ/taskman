<?php
include_once './file_name.php';
 // вычисляем количество элементов в массиве
 $total = count($file_name);
 //Определяем сколько элементов должно быть в одном столбце
 $half = $total/2;
 
 $max_length_first = 0;
 for($i = 0; $i < $half; $i++){
     $length = strlen($file_name[$i]);
     if($length > $max_length_first)
         $max_length_first = $length;
    
 }
 
 $max_length_second = 0;
 for($i = $half; $i < $total; $i++){
     $length = strlen($file_name[$i]);
     if($length > $max_length_second)
         $max_length_second = $length;
 }
 echo "<pre>";
 for($i = 0; $i < $half; $i++){
     printf($file_name[$i].str_repeat(" ",
             $max_length_first - strlen($file_name[$i])).""
             . "%{$max_length_second}s\n",$file_name[$half + $i]);
 }

 echo "</pre>";
 ?>



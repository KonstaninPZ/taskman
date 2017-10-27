<?php

include_once './file_name.php';
 // вычисляем количество элементов в массиве
 $total = count($file_name);
 //количество столбцов в таблице
 $num_cols = 3;
 $counter = 0;
 
 echo "<table border = 1>";
 for($i=0; $i < $total; $i++){
     if($counter == 0)
         echo "<tr>";
     if($counter == $num_cols){
         echo "</tr>";
         $counter = 0;
     }
     echo "<td>".$file_name[$i]."</td>";
     $counter++;
 }
 echo "</table><br>";
 
 //вычисляем количество строк
 $num_rows = (int)($total/$num_cols);
 if((float)($total/$num_cols) - $num_rows != 0)
     $num_rows++;
 //формируем промежуточный двумерный массив
 for($i = 0; $i < $num_rows; $i++){
     for($j = 0;$j<$num_cols;$j++){
         $arr[$i][$j] = $file_name[$j*$num_rows + $i];
     }
 }
 
 //Выводим таблицу
 echo "<table border = 1>";
 for($i = 0; $i < $num_rows; $i++){
     for($j = 0; $j < $num_cols; $j++){
         echo "<td>".$arr[$i][$j]."</td>";
     }
     echo "</tr>";
 }
 echo "</table>";
 ?>

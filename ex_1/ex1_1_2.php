<?php

include_once './file_name.php';
        $max_length = 0;
        foreach ($file_name as $name) {
            $length = strlen($name);
            if($length > $max_length){
                $max_length = $length;
            }
        }
        echo "<pre>";
        foreach ($file_name as $name){ 
            printf("%{$max_length}s\n", $name);
        }
//       for($i=0;$i<count($file_name)-1;$i++){
//         echo $file_name[$i],"\n";  
//       }
//       echo count($file_name);
       echo "</pre>";
        ?>

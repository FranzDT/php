<?php
    for($column = 0 ; $column <=10; $column++){
        for ($row = 0; $row <= 10; $row++){
            if($row==0){
                echo $column."\t";
            }else{
                if($column==0)
                    echo $row."\t";
                else
                    echo ($row*$column)."\t";
            }
        }
        echo "\n";
    }
?>
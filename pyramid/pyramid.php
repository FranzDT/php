<?php
    $y = readline("Input: ");
    $ctr = 1;
    for($i = 5 ; $i > 0 ; $i--){
        for($h=$i;$h>0;$h--){
            echo " ";
        }
        for($j = 0 ; $j < $ctr ; $j++ ){
            echo "* ";
        }
        echo "\n";
        $j = 0;
        $ctr++;
    }
?>
<?php
    $y =readline("input number:");
    $total;
    $lastVal= 1;
    $prevVal= 1;
    for($x=0;$x<$y;$x++){
        if($x<2)
            echo "1 ";
        else{
            $total = $lastVal + $prevVal;
            echo $total." ";
            $lastVal = $prevVal;
            $prevVal = $total;
        }
    }
    echo "\n";
?>
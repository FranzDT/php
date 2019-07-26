<?php
    function fibonacci(){
        $input = readline("Input number: \n");
        $total=1;
        $lastVal= 0;
        $prevVal= 0;
        for($x = 1 ; $x <= $input ; $x++){
            $total += $prevVal + $lastVal;
            echo $total." ";
            $lastVal = $prevVal;
            $prevVal = $total;
            $total = 0;
        }
        echo "\n";
    }
?>
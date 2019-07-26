<?php
    function palindrome(){
        $input=readline("Input string:");
        $revinput = strrev($input);
        $checker = true;
        
            for($i = strlen($input)/2 ; $i > 0 ; $i--){
                if($input[$i] != $revinput[$i]) {
                    echo "Not a Palindrome!\n";
                    $checker = false;
                    break;
                }
            }
            if($checker) echo "Palindrome!\n";
    }
?>
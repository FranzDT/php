<?php
    $input = readline("Enter String: ");
    $revinput = strrev($input);
    $checker = true;
    if($input>=00 || $input<0)
        echo "Not a Palindrome!\n";
    else{
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
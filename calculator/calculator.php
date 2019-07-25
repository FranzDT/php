<?php
    $checker = 0;
    do{ //loop to do multiple math operations
        
        do{ //checks if operator is valid
            $operator = readline("Select Operator (ADD,SUB,DIVIDE,MULTIPLY,EXIT): ");
            $opt = strtoupper($operator);
            if($opt == "ADD" || $opt == "SUB" || $opt == "DIVIDE" || $opt == "MULTIPLY" || $opt == "EXIT")
                $checker = 1;
            else{
                echo "INVALID OPERATOR!!!\n";
                unset($opt);
            }
        }while($checker == 0);
        
        //escape condition for the program
        if($opt == "EXIT"){
            echo "BYE!! \n";
            break;
        }

        //gets the 2 values
        $val1 = readline("Input First Value: ");
        $val2 = readline("Input Second Value: ");
        

        //All of the math ops
        if($opt == "ADD")
            echo "$val1 + $val2 = ".($val1+$val2."\n");
        elseif($opt == "SUB")
            echo "$val1 - $val2 =".($val1-$val2."\n");
        elseif($opt == "DIVIDE")
            echo "$val1 / $val2 =".($val1/$val2."\n");
        elseif($opt == "MULTIPLY")
            echo "$val1 * $val2 =".($val1*$val2."\n");
        
    }while($checker = 1);
?>
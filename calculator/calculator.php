<?php
    $checker = 0;
    do{
        do{
            $operator = readline("Select Operator (ADD,SUB,DIVIDE,MULTIPLY,EXIT): ");
            $opt = strtoupper($operator);
            if($opt == "ADD" || $opt == "SUB")
                $checker = 1;
            else    
                echo "INVALID OPERATOR!!!\n";
        }while($checker == 0);
        
        if($opt == "EXIT"){
            echo "BYE!! \n";
            break;
        }

        $val1 = readline("Input First Value: ");
        $val2 = readline("Input Second Value: ");
        
        if($opt == "ADD")
            echo "The Sum of the 2 numbers is ".($val1+$val2."\n");
        elseif($opt == "SUB")
            echo "The Difference of the 2 numbers is ".($val1-$val2."\n");
        elseif($opt == "DIVIDE")
            echo "The Quotient of the 2 numbers is ".($val1/$val2."\n");
        elseif($opt == "MULTIPLY")
            echo "The Product of the 2 numbers is ".($val1*$val2."\n");
        else echo "INVALID OPERATOR! \n";
    }while($checker = 1);
?>
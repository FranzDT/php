<?php
    require "./multiplication/multiplication.php";
    require "./fibonacci/fibonacci.php";
    require "./palindrome/palindrome.php";
    require "./pyramid/pyramid.php";
?>

<?php
    $checker =1;
    do{ 
     echo "Select a function to use: \n";
        $choice = readline("fibonacci, mult, palindrome, pyramid, exit \n");
        $chose = strtoupper($choice);
        if($chose == "MULT")
            multiplication();
        elseif($chose=="FIBONACCI")
            fibonacci();
        elseif($chose=="PYRAMID")
            pyramid();
        elseif($chose=="PALINDROME")
            palindrome();
        elseif($chose=="EXIT"){
            echo "\n BYERS! \n";
            break;
        }
        else  
            echo "\n Invalid Input! \n";
    }while($checker == 1);
?>
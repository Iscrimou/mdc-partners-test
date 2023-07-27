<?php
function multiplicationTable($num) { // function that calculates the table of number
    echo "Multiplication table of $num:\n";
    for ($i = 1; $i <= 10; $i++) {
        $result = $num * $i;
        echo "$num x $i = $result\n";
    }
}

echo "This is a program that returns the table from 1 to 10 of a number.\n"; // apresentation of the program
$userInput = (int)readline("Enter a number: "); // input

multiplicationTable($userInput); // call the function

?>
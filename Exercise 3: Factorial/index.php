<?php
function factorial($num) { // recursive function that returns factorial of a number 
    if ($num === 0 || $num === 1) {
        return 1;
    } else {
        return $num * factorial($num - 1);
    }
}

echo "This is a program that returns the factorial of a number.\n"; // apresentation of the program
$num = (int)readline("Digit a number: "); // input for number

if ($num < 0) {
    echo "Factorial is not defined for negative numbers.\n";
} else {
    $result = factorial($num); // call the function
    echo "Result: $result\n\n"; // result
}

?>
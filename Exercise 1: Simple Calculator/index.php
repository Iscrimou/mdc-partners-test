<?php
function calculate($num1, $num2, $operator) { // function to calculate
    switch ($operator) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            if ($num2 != 0) {
                return $num1 / $num2;
            } else {
                return "Cannot divide by zero";
            }
        default:
            return "Invalid operator, please use '+', '-', '*', or '/'.";
    }
}

echo "This is a simple calculator that calculates two numbers.\n"; // apresentation of the program
$num1 = readline("Digit the first number: "); // input for first number
$operator = readline("Digit the operator: "); // input for operator
$num2 = readline("Digit the second number: "); // input for second number

$result = calculate($num1, $num2, $operator); // call calculate function
echo "Result: $result\n"; // result
?>
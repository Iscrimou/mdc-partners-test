<?php
function calculateFinalValue($initialCapital, $interestRate, $investmentTime) { // function to calculate the final value of an investment
    return number_format((1 + ($interestRate / 100) * ($investmentTime / 12)) * $initialCapital, 2, '.'); // calculate the final value and format it to two decimal places
}

echo "This is a program that calculates the final value of an investment based on initial capital, interest rate, and investment time.\n"; // apresentation of the program

$initialCapital = (float)readline("Digit the initial capital: "); // input for initial capital
$interestRate = (int)readline("Now, digit the interest rate (just the number): "); // input for interest rate
$investmentTime = (int)readline("And now, digit the investment time (in months): "); // input for investment time

$result = calculateFinalValue($initialCapital, $interestRate, $investmentTime); // call the function
echo "Result: $result\n"; // result

?>
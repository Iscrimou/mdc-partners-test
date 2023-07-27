<?php
function isPrime($num) { // function that checks if number is prime
    if ($num <= 1) { // check if number is less than one
        return "false";
    }

    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i === 0) {
            return "false";
        }
    }

    return "true";
}

echo "This is a program that checks if a number is prime, then print the first 10 prime numbers.\n"; // apresentation of the program
$num = readline("Digit a number to check if is prime: "); // input for number
$result = isPrime($num); // call the function
echo "Result: $result\n\n"; // result

$primeNumbersCount = 0; // initial value
$currentNumber = 2; // first number greater than one to verify if is prime

echo "First 10 prime numbers are:\n";

while ($primeNumbersCount < 10) { // loop to iterate and checks if the numbers are prime
    if (isPrime($currentNumber)) {
        echo $currentNumber . " ";
        $primeNumbersCount++;
    }
    $currentNumber++;
}

echo "\n";
?>
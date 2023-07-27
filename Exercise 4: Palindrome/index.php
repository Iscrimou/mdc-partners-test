<?php
function isPalindrome($input) {
    $input = str_replace(' ', '', strtolower($input)); // Remove spaces for setences and convert the input to lowercase

    if ($input === strrev($input)) { // Check if the input is the same when read in reverse
        return "true";
    } else {
        return "false";
    }
}

echo "This is a program that checks if word, sentence or number is a palindrome.\n"; // apresentation of the program
$input = trim(readline("Digit a word, sentence or number: "));// input
$result = isPalindrome($input); // call the function
echo "Result: $result\n"; //result

?>

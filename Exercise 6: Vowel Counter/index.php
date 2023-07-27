<?php
function countVowels($input) { // function to count vowels in a world or sentence
    $vowels = ['a', 'e', 'i', 'o', 'u']; // define vowels
    $input = strtolower($input); // convert the input to lowercase
    $count = 0; // initial value

    for ($i = 0; $i < strlen($input); $i++) { // loop to count vowels
        if (in_array($input[$i], $vowels)) {
            $count++;
        }
    }

    return $count;
}

echo "This is a program that counts how many vowels a word or sentence has.\n"; // apresentation of the program
$input = trim(readline("Digit a word or sentence: ")); // input
$result = countVowels($input); // call the function
echo "Result: $result\n"; //result

?>
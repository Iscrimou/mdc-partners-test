<?php
function calculateGradeAverage(array $grades) { //function to calculate grade avarage
    $count = count($grades); // count subjects
    $grades = array_values($grades); // take only the grades of subjects
    $sum = array_sum($grades); // sum the grades

    return number_format($sum / $count, 1, "."); // calculate the avarage and format it to one decimal place
}

// subjects and grades
$grades = [
    'English' => 8,
    'Math' => 9.5,
    'History' => 7.2
];

// apresentation of the program
echo "This is a program that calculates a student's grade avarage in three subjects.\n";
echo "In that case, we have: \n";

foreach ($grades as $key => $grade) {
    echo "$key: $grade\n";
}

$result = calculateGradeAverage($grades); // call the function
echo "Average: $result\n"; // result

?>
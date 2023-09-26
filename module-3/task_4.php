<?php
/*
Task 4: Multidimensional Array

Create a multidimensional array called $studentGrades to store the grades of three students.
Each student has grades for three subjects: Math, English, and Science.
Write a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student.
*/

$studentGrades = array(
    array("Math" => 95, "English" => 90, "Science" => 92),
    array("Math" => 70, "English" => 72, "Science" => 65),
    array("Math" => 88, "English" => 82, "Science" => 87)
);

function calculateAverage($studentGrades) {
    $average = 0;
    foreach ($studentGrades as $subject => $grade) {
        $average += $grade;
    }
    return $average / count($studentGrades);
}

// Print the average grade for each student
foreach ($studentGrades as $student => $grades) {
    echo "Student " . ($student + 1) . " average grade: " . calculateAverage($grades) . "<br>";
}

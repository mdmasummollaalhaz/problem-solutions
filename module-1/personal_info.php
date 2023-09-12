<?php
/*
 * Task 1: Personal Information Page
 *
Create a PHP file named personal_info.php that displays your personal information using
variables and the echo statement. Include your name, age, country,
and a brief introduction.
*/

// Solution
$name = "Masum";
$age = 21;
$country = "Bangladesh";
$introduction = "Hi, My name is " . $name . ". I'm " . $age . " years old. and I'm comes from " . $country . ".";


echo "<p><strong>Name:</strong> " . $name . "</p>";
echo "<p><strong>Age:</strong> " . $age . "</p>";
echo "<p><strong>Country:</strong> " . $country . "</p>";
echo "<p><strong>Introduction:</strong> " . $introduction . "</p>";

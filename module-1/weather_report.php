<?php
/*
 * Task 5: Weather Report
 *
Create a PHP script named weather_report.php that provides weather information
based on temperature. Use a variable to store the temperature. Depending on
the temperature range, display messages like "It's freezing!", "It's cool.", or "It's warm."
 */


// Solution
 $temperature = 23;
 if ($temperature < 0) {
     echo "It's freezing!\n";
 }
 else if ($temperature >= 0 && $temperature <= 20) {
     echo "It's cool.\n";
 }
 else {
     echo "It's warm.\n";
 }

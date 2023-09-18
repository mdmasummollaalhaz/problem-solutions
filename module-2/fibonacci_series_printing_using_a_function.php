<?php
/*
Task 4: Fibonacci Series printing using a Function

Write a PHP function to print the first 15 numbers in the Fibonacci series.

You should take this 15 as an argument of a function and use a for loop
to generate these numbers and print them by calling the function.
*/

function fibonacci($n) {
    $first = 0;
    $second = 1;
    $result = 0;

    for ($i = 0; $i < $n; $i++) {
        if ($i <= 1) {
            $result = $i;
        } else {
            $result = $first + $second;
            $first = $second;
            $second = $result;
        }
        echo $result . " ";
    }
}

fibonacci(15);

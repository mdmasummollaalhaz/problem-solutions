<?php
/*
Task 1: String Manipulation

Create a string variable called $text with the value "The quick brown fox jumps over the lazy dog.".
Write a PHP function which takes "$text" as an argument to:

Convert the string to all lowercase.

Replace "brown" with "red" in the string.
*/

$text = "The quick brown fox jumps over the lazy dog.";

function stringManipulation($text) {
    $text = strtolower($text);
    $text = str_replace("brown", "red", $text);
    echo $text;
}
stringManipulation($text);



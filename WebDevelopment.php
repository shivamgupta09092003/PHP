<?php

$string = "php Programe the complete SOLUTION for WEB development";

$uppercase = strtoupper($string);
echo "Uppercase: " . $uppercase . "<br>";

$lowercase = strtolower($uppercase);
echo "Lowercase: " . $lowercase . "<br>";

$ucFirst = ucfirst($lowercase);
echo "First character uppercase: " . $ucFirst . "<br>";

$ucWords = ucwords($lowercase);
echo "First character of all words uppercase: " . $ucWords . "<br>";

$lastEleven = substr($string, -11);
echo "Last 11 characters: " . $lastEleven . "<br>";

$replaceFirst = str_replace('the', 'best', $string);
echo "Replace first 'the' with 'best': " . $replaceFirst . "<br>";

$words = explode(' ', $string);
$secondWord = $words[1];
echo "Second word: " . $secondWord . "<br>";

$insertString = substr_replace($string, "awesome ", 15, 0);
echo "String with insertion: " . $insertString;

?>
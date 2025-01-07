<?php
// Displaying "Hello, World!"
echo "Hello, World!<br>";

// Variables
$name = "John Doe";
$age = 25;
$height = 5.9; // in feet
$isStudent = true;

// Displaying variables
echo "Name: " . $name . "<br>";
echo "Age: " . $age . "<br>";
echo "Height: " . $height . " feet<br>";
echo "Is Student: " . ($isStudent ? "Yes" : "No") . "<br>";

// Constants
define("PI", 3.14159);
define("GREETING", "Welcome to PHP!");

// Displaying constants
echo "Value of PI: " . PI . "<br>";
echo GREETING . "<br>";

// Data Types
$integerVar = 42;
$floatVar = 3.14;
$stringVar = "This is a string";
$boolVar = false;
$arrayVar = array(1, 2, 3, 4, 5);

// Displaying data types
echo "Integer: " . $integerVar . "<br>";
echo "Float: " . $floatVar . "<br>";
echo "String: " . $stringVar . "<br>";
echo "Boolean: " . ($boolVar ? "true" : "false") . "<br>";
echo "Array: ";
print_r($arrayVar);
echo "<br>";

// Basic Arithmetic Operations
$num1 = 10;
$num2 = 5;

$sum = $num1 + $num2;
$difference = $num1 - $num2;
$product = $num1 * $num2;
$quotient = $num1 / $num2;
$remainder = $num1 % $num2;

// Displaying arithmetic operations
echo "Sum: " . $sum . "<br>";
echo "Difference: " . $difference . "<br>";
echo "Product: " . $product . "<br>";
echo "Quotient: " . $quotient . "<br>";
echo "Remainder: " . $remainder . "<br>";

// Increment and Decrement Operators
$counter = 0;
$counter++;
echo "Counter after increment: " . $counter . "<br>";
$counter--;
echo "Counter after decrement: " . $counter . "<br>";

// Concatenation
$firstName = "John";
$lastName = "Doe";
$fullName = $firstName . " " . $lastName;
echo "Full Name: " . $fullName . "<br>";
?>
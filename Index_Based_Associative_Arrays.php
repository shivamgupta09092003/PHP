<?php
// Creating an index-based array
$indexArray = array("Apple", "Banana", "Cherry", "Date");

// Creating an associative array
$assocArray = array(
    "fruit1" => "Apple",
    "fruit2" => "Banana",
    "fruit3" => "Cherry",
    "fruit4" => "Date"
);

// Accessing elements from the index-based array
echo "Accessing elements from the index-based array:\n";
echo "First element: " . $indexArray[0] . "\n"; // Output: Apple
echo "Second element: " . $indexArray[1] . "\n"; // Output: Banana
echo "Third element: " . $indexArray[2] . "\n"; // Output: Cherry
echo "Fourth element: " . $indexArray[3] . "\n"; // Output: Date

// Accessing elements from the associative array
echo "\nAccessing elements from the associative array:\n";
echo "fruit1: " . $assocArray["fruit1"] . "\n"; // Output: Apple
echo "fruit2: " . $assocArray["fruit2"] . "\n"; // Output: Banana
echo "fruit3: " . $assocArray["fruit3"] . "\n"; // Output: Cherry
echo "fruit4: " . $assocArray["fruit4"] . "\n"; // Output: Date

// Looping through the index-based array
echo "\nLooping through the index-based array:\n";
foreach ($indexArray as $index => $value) {
    echo "Index: $index, Value: $value\n";
}

// Looping through the associative array
echo "\nLooping through the associative array:\n";
foreach ($assocArray as $key => $value) {
    echo "Key: $key, Value: $value\n";
}
?>
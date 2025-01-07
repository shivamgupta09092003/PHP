<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Custom exception class
class CustomException extends Exception {
    public function errorMessage() {
        // Custom error message
        return "Custom Exception: " . $this->getMessage();
    }
}

// Function that may throw an exception
function divide($numerator, $denominator) {
    if ($denominator == 0) {
        throw new CustomException("Division by zero is not allowed.");
    }
    return $numerator / $denominator;
}

// Function that may trigger an error
function triggerError() {
    // Triggering a user-level error
    trigger_error("A custom error has been triggered", E_USER_ERROR);
}

// Handling errors using set_error_handler
set_error_handler(function($errno, $errstr, $errfile, $errline) {
    echo "Error handler triggered: [$errno] $errstr in $errfile on line $errline\n";
    return true; // Return true to indicate that the error has been handled
});

// Example of try-catch block for exception handling
try {
    echo "Attempting to divide 10 by 0...\n";
    $result = divide(10, 0);
    echo "Result: $result\n";
} catch (CustomException $e) {
    echo "Caught exception: " . $e->errorMessage() . "\n";
} catch (Exception $e) {
    echo "Caught generic exception: " . $e->getMessage() . "\n";
}

// Example of error handling
try {
    echo "Triggering a custom error...\n";
    triggerError();
} catch (Exception $e) {
    echo "Caught exception: " . $e->getMessage() . "\n";
} finally {
    echo "This block will always execute, regardless of errors or exceptions.\n";
}

// Debugging example
function debugExample() {
    $array = [1, 2, 3];
    // Intentionally accessing an undefined index for debugging
    if (isset($array[3])) {
        echo "Debugging example: " . $array[3] . "\n";
    } else {
        echo "Debugging example: Index 3 is not defined.\n";
    }
}

// Triggering the debug example
debugExample();

// Restore the default error handler
restore_error_handler();

// Final message
echo "End of script.\n";
?>
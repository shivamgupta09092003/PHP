<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JavaScript Functions Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .output {
            margin-top: 20px;
            padding: 10px;
            background-color: #f4f4f4;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>

<h1>JavaScript Functions Example</h1>

<div class="output" id="output"></div>

<script>
    // Function to display content in the output div
    function display(content) {
        document.getElementById('output').innerHTML += content + '<br>';
    }

    // Function to create a data object
    function createDataObject(name, age) {
        return {
            name: name,
            age: age,
            displayInfo: function() {
                display(`Name: ${this.name}, Age: ${this.age}`);
            }
        };
    }

    // Recursive function to calculate factorial
    function factorial(n) {
        if (n === 0 || n === 1) {
            return 1;
        } else {
            return n * factorial(n - 1);
        }
    }

    // Function to display current date and time
    function displayCurrentDateTime() {
        const now = new Date();
        display(`Current Date and Time: ${now.toLocaleString()}`);
    }

    // Function to demonstrate passing parameters
    function greetUser (name) {
        display(`Hello, ${name}!`);
    }

    // Main function to demonstrate all functionalities
    function main() {
        displayCurrentDateTime();

        const person = createDataObject('John Doe', 30);
        person.displayInfo();

        greetUser ('Alice');

        const number = 5;
        display(`Factorial of ${number} is: ${factorial(number)}`);
    }

    // Run the main function
    main();
</script>

</body>
</html>
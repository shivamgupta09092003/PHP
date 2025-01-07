<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Condition and Loop Example</title>
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

<h1>PHP Condition and Loop Example</h1>

<div class="output">
    <?php
    // Conditional Statements
    echo "<h2>Conditional Statements</h2>";

    $age = 20;

    // if-else statement
    if ($age >= 18) {
        echo "You are an adult.<br>";
    } else {
        echo "You are a minor.<br>";
    }

    // elseif statement
    $score = 85;

    if ($score >= 90) {
        echo "Grade: A<br>";
    } elseif ($score >= 80) {
        echo "Grade: B<br>";
    } elseif ($score >= 70) {
        echo "Grade: C<br>";
    } else {
        echo "Grade: F<br>";
    }

    // switch statement
    $day = "Monday";

    switch ($day) {
        case "Monday":
            echo "Today is Monday. Start of the workweek!<br>";
            break;
        case "Friday":
            echo "Today is Friday. Weekend is near!<br>";
            break;
        default:
            echo "Today is $day. Keep going!<br>";
            break;
    }

    // Loop Statements
    echo "<h2>Loop Statements</h2>";

    // for loop
    echo "For Loop: ";
    for ($i = 1; $i <= 5; $i++) {
        echo "$i ";
    }
    echo "<br>";

    // while loop
    echo "While Loop: ";
    $j = 1;
    while ($j <= 5) {
        echo "$j ";
        $j++;
    }
    echo "<br>";

    // foreach loop
    $fruits = ["Apple", "Banana", "Cherry", "Date"];
    echo "Foreach Loop: ";
    foreach ($fruits as $fruit) {
        echo "$fruit ";
    }
    echo "<br>";

    // Nested loop example
    echo "Nested Loop (Multiplication Table):<br>";
    for ($row = 1; $row <= 5; $row++) {
        for ($col = 1; $col <= 5; $col++) {
            echo ($row * $col) . "\t";
        }
        echo "<br>";
    }
    ?>
</div>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swap Two Numbers</title>
</head>
<body>
    <center>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            Enter the first number: <input type="number" name="num1"><br>
            Enter the second number: <input type="number" name="num2"><br>
            <input type="submit" name="submit">
        </form>
        <?php 
        if(isset($_POST["submit"])){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            
            if(!empty($num1) && is_numeric($num1) && !empty($num2) && is_numeric($num2)){
                echo "<h2>Swapping Two Numbers</h2>";
                echo "Before swapping: <br>";
                echo "Number 1: $num1 <br>";
                echo "Number 2: $num2 <br>";
                
                // Swap the numbers
                list($num1, $num2) = array($num2, $num1);
                
                echo "After swapping: <br>";
                echo "Number 1: $num1 <br>";
                echo "Number 2: $num2 <br>";
            }else{
                echo "<h5 style='color:red;'>Please enter valid numbers!</h5></br>";
            }
        }
        ?>
    </center>
</body>
</html>
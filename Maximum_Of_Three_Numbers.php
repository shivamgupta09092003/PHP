<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Maximum of Three Numbers</title>
</head>
<body>
    <center>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            Enter the first number: <input type="number" name="num1"><br>
            Enter the second number: <input type="number" name="num2"><br>
            Enter the third number: <input type="number" name="num3"><br>
            <input type="submit" name="submit">
        </form>
        <?php 
        if(isset($_POST["submit"])){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $num3 = $_POST['num3'];
            
            if(!empty($num1) && is_numeric($num1) && !empty($num2) && is_numeric($num2) && !empty($num3) && is_numeric($num3)){
                echo "<h2>Find Maximum of Three Numbers</h2>";
                echo "Number 1: $num1 <br>";
                echo "Number 2: $num2 <br>";
                echo "Number 3: $num3 <br>";
                
                // Find the maximum of three numbers
                if($num1 >= $num2 && $num1 >= $num3){
                    echo "The maximum number is: $num1";
                }elseif($num2 >= $num1 && $num2 >= $num3){
                    echo "The maximum number is: $num2";
                }else{
                    echo "The maximum number is: $num3";
                }
            }else{
                echo "<h5 style='color:red;'>Please enter valid numbers!</h5></br>";
            }
        }
        ?>
    </center>
</body>
</html>
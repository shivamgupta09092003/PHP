<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <center>
        <form action="Calculator.php" method="post">
            Enter the first numbert <input type="number" name="number1"><br>
            Enter the second number <input type="number" name="number2"><br>
            Choose your operator <select name="op" id="op">
                <option value="---">Select your operator</option>
                <option value="+">Addition (+)</option>
                <option value="-">Substraction (-)</option>
                <option value="">Multiplication ()</option>
                <option value="/">Division (/)</option>
                <option value="%">Modulas (%)</option>
            </select>
            <input type="submit" name="submit">
        </form>
        <?php 
        if(isset($_POST["submit"])){
            $number1=$_POST['number1'];
            $number2 = $_POST['number2'];
            $op = $_POST['op'];

            if(!empty($number1) && !empty($number2)){
                switch ($op) {
                    case '+':
                        $add = $number1+$number2;
                        echo $add;
                        break;
                        case '-':
                            $sub = $number1-$number2;
                            echo $sub;
                            break;
                            case '*':
                                $mul = $number1*$number2;
                                echo $mul;
                                break;
                                case '/':
                                    $div = $number1/$number2;
                                    echo $div;
                                    break;
                                    case '%':
                                        $mod = $number1%$number2;
                                        echo $mod;
                                        break;
                    
                    default:
                        echo "<h5 style='color:red;'>Please fill all the inputs!</h5>";
                        break;
                }

            }else{
                echo "<h5 style='color:red;'>Please fill this all inputs!</h5></br>";
            }
        }
        
        ?>
    </center>
    
</body>
</html>
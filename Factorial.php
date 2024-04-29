<!DOCTYPE html>
<html>
<head>
	<title>Factorial of a Number</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Enter a number: <input type="number" name="number" min="0" max="20" required><br><br>
    <input type="submit" name="submit" value="Calculate Factorial"><br><br>
</form>

<?php
if(isset($_POST['submit'])){
    $number = $_POST['number'];
    $factorial = factorial($number);
    echo "The factorial of {$number} is: {$factorial}";
}

function factorial($number){
    if($number == 0){
        return 1;
    }else{
        return $number * factorial($number - 1);
    }
}
?>

</body>
</html>
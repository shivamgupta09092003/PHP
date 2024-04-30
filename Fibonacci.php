<!DOCTYPE html>
<html>
<head>
	<title>Fibonacci Series</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Enter a number: <input type="number" name="number" min="0" max="20" required><br><br>
    <input type="submit" name="submit" value="Result"><br><br>
</form>
<br>
<br>

<?php  
if(isset($_POST['submit'])){  
    $num = $_POST['number'];  
    $n1 = 0;  
    $n2 = 1;  
    echo "<h3>Fibonacci series for first $num numbers: </h3>";  
    echo "\n";  
    echo $n1.' '.$n2.' ';  
    $count = 2;  
    while ($count < $num )  
    {  
        $n3 = $n2 + $n1;  
        echo $n3.' ';  
        $n1 = $n2;  
        $n2 = $n3;  
        $count = $count + 1;
    }
}
?>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Get Array Key</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Enter a value: <input type="number" name="value" min="1" max="5" required><br><br>
    <input type="submit" name="submit" value="Get Key">
</form><br><br>

<?php
$array = array("one" => 1, "two" => 2, "three" => 3, "four" => 4, "five" => 5);

if(isset($_POST['submit'])){
    $value = $_POST['value'];
    $key = array_search($value, $array);
    if($key!== false){
        echo "The key for the value {$value} is: {$key}";
    }else{
        echo "The value {$value} was not found in the array.";
    }
}
?>



</body>
</html>

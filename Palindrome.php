<!DOCTYPE html>
<html>
<head>
    <title>Palindrome Checker</title>
</head>
<body>
    <form>
        <label for="var">Enter a number:</label>
        <input type="number" id="var" name="var"><br><br>
        <input type="submit" value="Check if Palindrome">
    </form>

    <?php
    if(isset($_GET['var'])){
        $var = $_GET['var'];
        $a = strval($var);
        $b = strrev($a);
        if($a === $b){
            echo "<h1>$var is a palindrome number</h1>";
        }else{
            echo "<h1>$var is not a palindrome number</h1>";
        }
    }
    ?>
</body>
</html>
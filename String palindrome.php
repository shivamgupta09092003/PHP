<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find all the palindrome in string</title>
</head>
<body>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF'])?>" method="post">
    <input type="text" name="name" placeholder="Enter the name">
    <input type="submit" name="submit" value="submit">
    <div class="center">
        <?php
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $name_lower = strtolower($name);
            $name_reverse = strrev($name_lower);
            if(!empty($name)){
                if($name_lower == $name_reverse){
                    echo "The name is palindrome";
                }else{
                    echo "The name is not palindrome";
                }
            }
        }
        ?>
</body>
</html>

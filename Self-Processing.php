<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="  Self-processing.php" method="post">
            <input type="text" name="name" placeholder="name">
            <input type="email" name="email" placeholder="email"> <!-- added placeholder -->
            <input type="submit" name="submit" value="submit"> <!-- added name="submit" -->
        </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === "GET"){

        echo"<p>get method!!</p>";
    }else{
        if(isset($_POST['submit'])){
            $name = isset($_POST['name']) ? $_POST['name'] : ''; // handling if name is not set
            $email = isset($_POST['email']) ? $_POST['email'] : ''; // handling if email is not set
            echo $name." ".$email;
        }
        // else{
          
        // }
    }
    ?>
    
</body>
</html>

#index.php

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="data4(EvenorOdd).php" method="POST">
        Enter the number <br>
        <input type="number" name="number" placeholder="Enter the number"> <br>
        <input type="submit" name="submit" value="Enter">
</form>
</body>
</html>

#data.php

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Even or Odd</title>
</head>
<body>
    <h1> Even or Odd </h1>
    <?php
    if(isset($_POST["submit"]))
        $number =$POST["number"];
        if ($number %2==0){
            echo $number . "is an Even Number";
        }else{
            echo $number . "is an Odd Number";
        } ?>
</body>
</html>

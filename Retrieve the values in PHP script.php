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
    <form action = "data3.php" method="POST">
        <h1> Registration form </h1>
        Enter your name: <br>
        <input source ="text" name="name" placeholder="Enter the name"> <br>
        Enter your number: <br>
        <input source ="number" name="number" placeholder="Enter the number"> <br>
        <input type = "submit" value = "submit">
</body>
</html>

#data.php

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Submit</title>
</head>
<body>
    <h1> Welcome </h1>
    <h2> <?php echo $_POST["name"]; ?> </h2>
    <h1> Number </h1>
    <h2> <?php echo $_POST["number"];?>
</h2>
</body>
</html>

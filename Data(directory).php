<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form</title>
</head>
<body>
    <form action="?" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <label for="address">Address:</label>
        <textarea id="address" name="address" rows="4" cols="50" required></textarea><br><br>

        <label for="terms">
            <input type="checkbox" id="terms" name="terms" required>
            I agree to the terms and conditions
        </label><br><br>

        <input type="submit" value="Submit">
    </form>
    <?PHP
    if ($_POST) {
        $name = $_POST["name"]; 
        $age = $_POST["age"]; 
        $password = $_POST["password"];
        $address = $_POST["address"];
    
        if(is_file('Shivam'.$name.'.txt')){
            echo "File already exists";
        }else{
            $fp=fopen('Shivam'.$name.'.txt','w');
            fwrite($fp,$name."\n".$age."\n".$password."\n".$address."\n");
            fclose($fp);
            echo "File created successfully";
        }



    }

?>
</body>
</html>
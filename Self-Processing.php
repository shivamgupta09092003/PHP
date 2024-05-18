<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    
   ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>
        <input type="submit" value="Submit">
    </form>
    <?php
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['name'];
    $email = $_POST['email'];
    
    if (empty($name) || empty($email)) {
        echo "Please fill in all fields.";
    } else {
        
        echo "Thank you, $name, for submitting your email address: $email.";
    }
}
?>
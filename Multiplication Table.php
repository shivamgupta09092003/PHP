<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
</head>
<body>
    <center>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            Enter the size of the multiplication table: <input type="number" name="size"><br>
            <input type="submit" name="submit">
        </form>
        <?php 
        if(isset($_POST["submit"])){
            $size = $_POST['size'];
            
            if(!empty($size) && is_numeric($size) && $size > 0){
                echo "<h2>Multiplication Table of $size</h2>";
                echo "<table border='1'>";
                echo "<tr><th></th>";
                for ($i = 1; $i <= $size; $i++) {
                    echo "<th>$i</th>";
                }
                echo "</tr>";
                
                for ($i = 1; $i <= $size; $i++) {
                    echo "<tr><th>$i</th>";
                    for ($j = 1; $j <= $size; $j++) {
                        echo "<td>" . ($i * $j) . "</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
            }else{
                echo "<h5 style='color:red;'>Please enter a valid size!</h5></br>";
            }
        }
        ?>
    </center>
</body>
</html>
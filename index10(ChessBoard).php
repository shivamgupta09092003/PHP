<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess Board</title>
</head>
<style>
    table{
        border: 1px solid black;
        collspan
    } 
    td{
        padding: 10px;  
    }
    #black{
        background-color: black;
    }
    #white{
        background-color: white;
    }
</style>
<body>
    <table>
    <?php 
    $size = 10;
    for ($i = 0; $i<$size; $i++){
        echo "<tr>";
        for ($j = 0; $j < $size; $j++) {
            if (($i+$j)%2 == 0) {
                echo "<td id='white'></td>";
            } else {
                echo "<td id='black'></td>";
            }
        }
        echo "</tr>";
    }
    ?>
</table>    
</body>
</html>
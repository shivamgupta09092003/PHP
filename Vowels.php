<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Count Vowels</title>
    <style>
        body {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif
        }

        .center {
            padding: 10px;
        }
    </style>
</head>

<body>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" method="post"> <input type="text" name="name"
            placeholder="Enter the name"> <input type="submit" name="submit" value="submit"> </form>

            <?php 
            function find_vowel($word){
                $vowels = array("a", "e", "i", "o", "u");
                $vowels_in = array();
                $word = strtolower($word);
                for ($i=0; $i<strlen($word); $i++){
                    if(in_array($word[$i], $vowels)){
                        array_push($vowels_in, $i);
                    }

                }
                return $vowels_in;
            }
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $name = $_POST['name'];
                $vowels_in = find_vowel($name);
                if($vowels_in > 0){
                    foreach ($vowels_in as $index){
                        echo "<div> String:".$name[$index]." "."Index:".$index."</div>";
                    }
                }
                echo "Count:".$index."<br>";
                echo "My name is ".$name;
            }
            ?>
    
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum of digits</title>
</head>
<body>
<form action="?" method="post">
         <label for="ENTER NUMBER">Enter the number:</label>
        <input type="NUMBER" placeholder="Enter a NO" id="num" name="num">
        <br>
        <button type="submit">Submit</button>
    </form>
    
    <H2>
    <?php
     echo"<br><br><br><br><br><br>";
     if ($_POST) 
     {
        $num = $_POST["num"];
       
      }
      
   function sum_of_digits($num){
      $sum = 0;
      for ($i = 0; $i < strlen($num); $i++){
         $sum += $num[$i];
      }
      return $sum;
   }
   print_r("The sum of digits is:  ");
   echo sum_of_digits($num);
?>   
    </h2>
</body>
</html>
<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
  <!--Swap two numeber -->
    <?php 
    if(isset($_POST['submit'])){
      if(!empty($_POST['num1']) && !empty($_POST['num2'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $temp = $num1;
        $num1 = $num2;
        $num2 = $temp;
        echo "After swapping the numbers are: <br>";
        echo "First Number: $num1 <br>";
        echo  "Second Number: $num2 <br>";
      }
    }
   
    ?>
    <form method="post" action="index.php">
    <input type="number" name="num1" placeholder="Enter the first number">
    <input type="number" name="num2" placeholder="Enter the second number">
    <button type="submit" name="submit">Submit</button>
    </form>

      <a href="tables.php">Tables</a>
  </body>
</html> ---Swap of two numbers.
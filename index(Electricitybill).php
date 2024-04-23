<!DOCTYPE html>
<html>
<head>
	<title>PHP - Calculate Electricity Bill</title>
</head>
<body>

<?php
if(isset($_POST['calculate'])){
    $units = $_POST['units'];
    $bill = calculate_bill($units);
    echo "Total amount for {$units} units is: {$bill}";
}

function calculate_bill($units){
    $unit_cost_first = 3.50;
    $unit_cost_second = 4.00;
    $unit_cost_third = 5.20;
    $unit_cost_fourth = 6.50;

    if($units <= 50){
        $bill = $units * $unit_cost_first;
    }else if($units > 50 && $units <= 100){
        $temp = 50 * $unit_cost_first;
        $remaining_units = $units - 50;
        $bill = $temp + ($remaining_units * $unit_cost_second);
    }else if($units > 100 && $units <= 200){
        $temp = (50 * 3.5) + (100 * $unit_cost_second);
        $remaining_units = $units - 150;
        $bill = $temp + ($remaining_units * $unit_cost_third);
    }else{
        $temp = (50 * 3.5) + (100 * $unit_cost_second) + (100 * $unit_cost_third);
        $remaining_units = $units - 250;
        $bill = $temp + ($remaining_units * $unit_cost_fourth);
    }
    return number_format((float)$bill, 2, '.', '');
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Enter number of units: <input type="number" name="units" min="1" max="999" required><br><br>
    <input type="submit" name="calculate" value="Calculate Bill">
</form>

</body>
</html>
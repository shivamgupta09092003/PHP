<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time Clock</title>
</head>
<body>
    <?php
    $current_time = date_default_timezone_set("Asia/Kolkata");
    echo "This is our current time" .date("h:i:sa"). "<br>";  
    if(date("h:i:sa") < '09:30:am'){
        echo "Good Morning!";
    }else if (date('h:i:sa') >= '09:30:AM' && date('h:i:sa') < '12:00:PM') {
        echo "Have a good day"; 
    }else{
        echo "Good Afternoon";
    }
    ?>
</body>
</html>

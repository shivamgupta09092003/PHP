<?php
echo "<pre>";
print_r($_SERVER);
echo "</pre>";
echo "Current directory:".__DIR__."</br>";
echo "Current filename:".__FILE__."</br>";
echo "Current line number".__LINE__."</br>";
$dir = opendir(__DIR__);
while($a=readdir($dir)){
    echo $a."</br>";
}
?>
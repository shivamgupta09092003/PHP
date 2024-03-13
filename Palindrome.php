<?php
$var = 151;
$a = strval($var);
$b = strrev($a);
if($a === $b){
    echo $var."is a palindrome number";
}else{
    echo $var."is not a palindrome number";
}
?>
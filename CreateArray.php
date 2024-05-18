<?php
$color = array("red","blue","green","black","yellow");
$color[5]="sky";
echo "<pre>";
print_r($color);
echo "<br>Sort<br>";
sort($color);
foreach($color as $value){
    echo $value."<br>";
}
echo "<br>Reverse Sort<br>";
rsort($color);
foreach($color as $value){
    echo $value."<br>";
}
echo "<br>Pop<br>";
array_pop($color);
foreach($color as $value){
    echo $value."<br>";
}
echo "<br>Push<br>";
array_push($color,"pink");
foreach($color as $value){
    echo $value."<br>";
}
echo "<br>Shift<br>";
array_shift($color);
foreach($color as $value){
    echo $value."<br>";
}
echo "<br>Un_Shift<br>";
array_unshift($color,"white");
foreach($color as $value){
    echo $value."<br>";
}
echo "<br>Array to String Convert";
$res=implode("+",$color);
echo "<br>My fav color is $res".".";

echo"<br>";
echo "</br>"."String to Array Convert" ."<br>";
$senapati="I AM THE OWNER OF HELPING HANDS";
$res=explode(" ",$senapati);
echo "<pre>";
print_r($res); 
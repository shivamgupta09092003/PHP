<?php

$arrayList = array(
    'fruit' => 'apple',
    'animal' => 'dog',
    'city' => 'new york',
    'car' => 'toyota'
);


function getArrayKey(array $array, $searchValue) {
    return array_search($searchValue, $array);
}


$searchValue = 'dog';


$key = getArrayKey($arrayList, $searchValue);


if ($key!== false) {
    echo "The key of '$searchValue' is '$key'.";
} else {
    echo "The value '$searchValue' is not found in the array.";
}
?>
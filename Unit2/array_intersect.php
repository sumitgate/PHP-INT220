<?php

$array1 = array('a', 'b', 'c', 'd', 'e');
$array2 = array('c', 'd', 'e', 'f', 'g');


$intersection = array_intersect($array1, $array2);

print_r($intersection);

?>
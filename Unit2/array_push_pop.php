<?php
$myArray = array();

array_push($myArray, 'Apple');
array_push($myArray, 'Banana');
array_push($myArray, 'Cherry');


echo "Array after pushing elements: ";
print_r($myArray);


$poppedElement = array_pop($myArray);


echo "\nPopped element: $poppedElement";

echo "\nArray after popping an element: ";
print_r($myArray);

?>
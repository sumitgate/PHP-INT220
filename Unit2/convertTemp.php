<?php

function convertTemp($celsius) {
    $fahrenheit = ($celsius * 9/5) + 32;
    return $fahrenheit;
}

$cels = (int) readline("Enter temperature in Celsius: ");
$far = convertTemp($cels);
echo "Fahrenheit $far\n";

?>
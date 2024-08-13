<?php

define("TAX_RATE", 0.5); 


$productPrice = 100.00; 


$finalPrice = $productPrice * (1 + TAX_RATE);

echo "Original Price: $" . $productPrice . "<br>";
echo "Final Price after Tax: $" . $finalPrice . "<br>";


echo "Attempting to change the tax rate...<br>";
define("TAX_RATE", 0.20);


echo "Tax Rate: " . TAX_RATE . "<br>";
?>

<?php
   $name = "Sumit";
   $age = 21;
   $height = 5.6;
   $passed = "true";
   $marks = array(78,89,98,80);  
   $nullVar = null;


   echo "The type of integerVar is: " . gettype($age) . "<br>";
   echo "The type of floatVar is: " . gettype($height) . "<br>";
   echo "The type of stringVar is: " . gettype($name) . "<br>";
   echo "The type of booleanVar is: " . gettype($passed) . "<br>";
   echo "The type of arrayVar is: " . gettype($marks) . "<br>";
   echo "The type of nullVar is: " . gettype($nullVar) . "<br>";
   ?>

?>
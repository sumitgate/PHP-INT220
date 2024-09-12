<?php

// Original Array
$array = array("Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40");

// a) Ascending order sort by value
echo "Ascending order sort by value:<br>";
asort($array);
print_r($array);
echo "<br><br>";

// b) Ascending order sort by key
echo "Ascending order sort by key:<br>";
$array = array("Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40");
ksort($array);
print_r($array);
echo "<br><br>";

// c) Descending order sort by value
echo "Descending order sort by value:<br>";
$array = array("Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40");
arsort($array);
print_r($array);
echo "<br><br>";

// d) Descending order by key
echo "Descending order by key:<br>";
$array = array("Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40");
krsort($array);
print_r($array);
echo "<br><br>";

?>
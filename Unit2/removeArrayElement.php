<?php
function removeElement(&$arr, $index) {
  
    if (isset($arr[$index])) {
       
        $removedElement = $arr[$index];
        
        
        unset($arr[$index]);

        
        $arr = array_values($arr);

    
        return $removedElement;
    } else {
        return null; 
    }
}

$x = array(1, 2,3, 4, 5, 6);
$i = 2;

$removedElement = removeElement($x, $i);

echo "Removed Element: $removedElement\n";
print_r($x); 
?>
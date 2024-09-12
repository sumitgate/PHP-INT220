<?php
function addPrefixSuffix($prefix_var, $suffix_var) {
    $word = $prefix_var . " ".$suffix_var;

    return "$word";
}

echo "Enter a prefix: ";
$prefix = readline();

echo "Enter a suffix: ";
$suffix = readline();

echo addPrefixSuffix($prefix, $suffix);
?>
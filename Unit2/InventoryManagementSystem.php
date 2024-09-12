<?php

$inventory = [
    ["item_id"=>1,"item_name"=>"Laptop"],
    ["item_id"=>2,"item_name"=>"Monitor"],
    ["item_id"=>3,"item_name"=>"Keyboard"]
];

$search_item = "Monitor";

// Check if the item exists in the inventory
$item_names = array_column($inventory, 'item_name');
if (in_array($search_item, $item_names)) {
    echo "Item found!<br>";
    
    // Find the item_id using array_search
    $item_key = array_search($search_item, $item_names);
    $item_id = $inventory[$item_key]['item_id'];
    echo "Item ID: $item_id<br>";
    
    // Remove the item from the inventory
    unset($inventory[$item_key]);
    echo "Item removed from inventory!<br>";
    
    // Print the updated inventory
    echo "Updated Inventory:<br>";
    print_r($inventory);
} else {
    echo "Item not found in inventory!";
}

?>
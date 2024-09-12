<?php


$orders = array(
    'ORD123' => 'delivered',
    'ORD456' => 'pending',
    'ORD789' => 'canceled',
    'ORD901' => 'delivered'
);


function getOrderStatus($orderId, $orders) {
    // Check if the order ID exists in the array
    if (array_key_exists($orderId, $orders)) {
        return $orders[$orderId];
    } else {
        return "Order ID not found";
    }
}


$orderId = 'ORD456';
echo getOrderStatus($orderId, $orders);

$orderId = 'ORD999'; 
echo getOrderStatus($orderId, $orders); 

?>
<!-- Uodating Prefernce using array_replace_recursive
 Problem Statement: you have to basic set of user preferences, and you want
 to allow the user to change them. Write a PHP script that uses 
 array_replace_recursive to update the default user preferences
 with the nwe preferences provided by the user.
 Instructions:
 Create two arrays:
 $default_preferences: Contains the default user preferences for a user.
 $user_preferences: Contains the preferences the user wants to update.
 use array_replace_recursive to uodate the default  preferences with the user preferences
 Print the final preferences after merging.
 $default_preferences =['theme'='light','notifications'=>['email'=>true,'push'=>true]];
    -->

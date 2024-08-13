<?php
$username = "Sumit"; 

$message = (strlen($username) >= 5) ? "Username is valid" : "Username is too short (must be at least 5 characters)";

echo $message;
?>

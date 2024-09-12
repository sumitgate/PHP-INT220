<?php

// Default user preferences
$default_preferences = [
    'theme' => 'light',
    'notifications' => [
        'email' => true,
        'push' => true
    ]
];

// User preferences to update
$user_preferences = [
    'theme' => 'dark',
    'notifications' => [
        'push' => false
    ]
];

// Update default preferences with user preferences using array_replace_recursive
$updated_preferences = array_replace_recursive($default_preferences, $user_preferences);

// Print the final preferences after merging
echo "Updated Preferences:<br>";
print_r($updated_preferences);

?>
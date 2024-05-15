<?php

// Include the configuration file
require_once 'config.php';

// Define the available actions and their corresponding templates
$actions = [
  'testForm' => 'templates/testForm.php',
  'otherForm' => 'templates/otherForm.php', // New action added for another form
];

// Way to handle dynamic routing in PHP
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

if (array_key_exists($action, $actions)) {
  // Include the corresponding template file
  require_once $actions[$action];
} else {
  die("Error: Action '{$action}' not found.");
}



<?php

$actions = [
  'testForm' => 'templates/testForm.php',
  'messages' => 'templates/messages.php',
];

$action = isset($_GET['action']) ? $_GET['action'] : 'index';

if (array_key_exists($action, $actions)) {
  require_once $actions[$action];
} else {
  die("Error: Action '{$action}' not found.");
}



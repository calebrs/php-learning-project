<?php
require_once 'config.php';

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Validate/sanitize the data here

try {
  $dsn = 'mysql:host=' . $db_config['host'] . ';dbname=' . $db_config['dbname'];
  $pdo = new PDO($dsn, $db_config['username'], $db_config['password']);

  if ($pdo) {
    echo "Connected to the database successfully!";
  }

  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Prepare SQL statement
  $stmt = $pdo->prepare("INSERT INTO messages (name, email, message) VALUES (:name, :email, :message)");

  // Bind parameters
  $stmt->bindParam(':name', $name);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':message', $message);

  // Execute the statement
  $stmt->execute();

  echo 'Form data saved successfully!';
} catch (PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}

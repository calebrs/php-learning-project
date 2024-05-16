<?php

function getMessages()
{
  try {
    $dsn = 'mysql:host=localhost; dbname=php_tutorial';
    $pdo = new PDO($dsn, 'user1', 'ChangeMe');

    if ($pdo) {
      echo '<script>console.log("Connected to the database successfully!"); </script>';
    }

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->query("SELECT * FROM messages");

    $messages = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $messages;
  } catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
  }
}

<?php
require_once '/home/caleb/Development/php-learning-project/getMessages.php'
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Messages</title>
  <link rel="stylesheet" href="assets/css/messages.css">
</head>

<body>
  <h1>Messages</h1>
  <ul>
    <?php
    $messages = getMessages();

    foreach ($messages as $message) {
      echo "<li>{$message['name']} - {$message['email']} - {$message['message']}</li>";
    }
    ?>
  </ul>
</body>


</html>
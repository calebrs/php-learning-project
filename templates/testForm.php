<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test Form</title>
  <link rel="stylesheet" href="assets/css/testFormStyles.css">
</head>

<body>
  <h1>Test Form</h1>
  <form action="processForm.php" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <br><br>
    <label for="message">Message:</label>
    <textarea id="message" name="message" rows="4" required></textarea>
    <br><br>
    <input type="submit" value="Submit">
  </form>
</body>

</html>
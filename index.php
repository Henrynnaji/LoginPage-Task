<?php
session_start();

if(!is_array($_SESSION['user'])) {
  header("Location: login.php");
  die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>You are logged in!</h1>
  <input type="button" value="logout" onclick="logout();">

  <script src="login.js"></script>
</body>
</html>
<?php
session_start();
if(is_array($_SESSION["user"])){
  header("Location: index.php");
  die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>User authentication</title>
</head>
<body>
  <form id="login-form" onsubmit="return login();">
    <input type="email" id="login_email" name="login_email" value="opara@prosper.com">
    <input type="password" id="login_password" name="login_password" value="hicopara">
    <input type="submit" value="submit" name="register_user">
  </form>

  <script src="login.js"></script>
</body>
</html>
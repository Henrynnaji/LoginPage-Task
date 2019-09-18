<?php
session_start();

switch( $_POST['req']) {
  case "login":
    if(is_array($_SESSION["user"])) {
      die("OK");
    }

    $authenticated_user_detail = [
      'opara@prosper.com' => 'hicopara',
      'john@doe.com' => 'whoyouhelp?'
    ];

    if($_POST['password'] == $authenticated_user_detail[$_POST['email']]) {
      $_SESSION['user'] = [
        'email' => $_POST['email']
      ];
      echo("OK");
    }else {
      echo "ERROR AUTHENTICATING USER";
    }
    break;
  
  case "logout":
    unset($_SESSION['user']);
    // header("Location: login.php");
    echo("OK");
    break;

  default:
    echo("ERROR");
    break;
}
?>
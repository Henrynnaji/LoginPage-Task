<?php
require 'jovial_Db_config/dataBase.php';

class Registration extends Database{

  function __construct($fname, $lname, $email, $password){
    $this->fname    = $fname;
    $this->lname    = $lname;
    $this->email    = $email;
    $this->password = $password;
  }

  // public function validate(){
    // if(strlen($this->fname) < 2 && strlen($this->lname) < 2){
      // $name_error = "<div>Short names are not allowed</div>";
    // }elseif($email == ""){
      // $email_error = "<div>email should not be empty</div>";
    // }
  // }

  public function store_details(){
    $sql = "INSERT INTO
    client (`client_First_Name`, `client_Last_Name`, `client_Email`, `password`)
    VALUES
    ('$this->fname', '$this->lname', '$this->email', '$this->password')";

    $db = $this->Dbconnect();
    $speak_to_db = $db->prepare($sql);

    if($speak_to_db->execute()){
      header("Location: dashboard.html");
    }
  }
}
?>
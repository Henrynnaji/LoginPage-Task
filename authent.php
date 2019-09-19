<?php
// here we handle all data before it goes to the database
class userAuthent extends database {


    
    public function userVal($mail, $passw) {
        //global variables form the index.php was collected here and we have to loop the array
// ?
    //     $formAuth = [$mail, $passw];|
    // //we loop through it now
    // foreach ($formAuth as $loopedFormAuth) {

    //     //validation should go here, but i'm not validating; @Nado and @anger should do that

    //     }
    // }
    // require 'db_config/db_config.php';
     // '''''''''validation'''''
     $this-> msg = "Incorrect password or username";

    //Lets point to the database 
    $loginDbClass  =  $this->Dbconnect(); 

    $sql = 'SELECT client_Email AND password FROM client WHERE client_Email = ? && password = ? ';

    $ourStmt = $loginDbClass->prepare($sql);
    $ourStmt->execute([$mail, $passw]);
    //check if data base was affected

    if($ourStmt->rowCount()) {
        //if our databse was affected, we say
            header('location: dashboard.php');
    }
    
    }
}
?>
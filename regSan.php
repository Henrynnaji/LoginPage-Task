<?php
    class reg extends database {

        public function signup($fname, $lname, $email, $password) {
  
           try {
            $regDbConn = $this->Dbconnect();

            $emailExistSql = 'SELECT client_Email FROM client WHERE client_Email = ?';
            $emailExist = $regDbConn->prepare($emailExistSql);
            $emailExist->execute([$email]);

            if ($emailExist->rowCount()){
                $this-> msg = "Email Already exist!";
            } else {
                $sql = 'INSERT INTO client(client_First_Name, client_Last_Name, client_Email,password) values(?,?,?,?)';
                $Ourstm = $regDbConn->prepare($sql);
                $Ourstm->execute([$fname, $lname, $email, $password]);
                
                if ($Ourstm->rowCount()) {
                    header('location:login.php');
                }
            }
            }catch (PDOException $e) {
               echo "error in inserting data" .$e->getMessage();
            }
        }
    }
?>
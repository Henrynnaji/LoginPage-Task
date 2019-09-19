<?php
    include ('db_config/database.php');
    include ('authent.php');

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- required meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>The A-Team Login Page</title>
        <!-- fontawesome! -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- bootstrap CSS !-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- style.css -->     
        <link rel="stylesheet" href="css/style.css">
    </head>
    
    <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <a class="navbar-brand order-1"  href="#">The A-Team</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="index.php" ><i class="fa fa-home"></i> Home <span class="sr-only"></span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"> <i class="fa fa-address-book"></i> Contact Us</a>
              </li>
              <li class="nav-item">
                 <a class="nav-link" href="#"> <i class="fa fa-database"></i> About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" tabindex="-1" ><i class="fa fa-desktop"></i> Our Team</a>
              </li>
            </ul>
         </div>
      </nav>   
        
        <div class="container">
            
            <div class="d-flex justify-content-center align-items-center parent">
                <div class="row insideParent">
                    <div class=" h-100 d-none d-md-block col-md-6 px-0 form-img">
                    </div>
                    <div class="h-100 col-md-6 right-side">
                        <h4>Welcome Back, Please Login
                            <br> To Your Account
                        </h4>


                        <?php
            $onSubmit = isset($_POST['submit']);

            if($onSubmit) {
                $indexAuth = new userAuthent;
                $indexAuth->userVal($_POST['email'], $_POST['pass']);
            }
                ?>

                        
                        <form action="#" Method="POST">
                            <div class="form-group mt-5">

                            <?php
                                if (isset($indexAuth->msg)){?>
                            <p style="color:red"><?php echo "*".$indexAuth->msg;  ?> </p>    
                           <?php  }?>


                                <input type="email" class="form-control input-field" id="email" name="email" placeholder="Enter Email Address" required>
                            </div>
                            <div class="form-group mt-4">
                                <input type="password" class="form-control input-field" id="pwd" name="pass"  placeholder="Enter Password" required>
                            </div>
                            <div class="container mt-4">
                                <div class="row d-flex justify-content-between">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                          <input class="form-check-input" type="checkbox"> Remember me
                                        </label>
                                    </div>
                                    <div class="reset-pwd">
                                        <a href="#">Forgot Password ?</a>
                                    </div>
                                </div>
                            </div>
                            
                            <button type="submit" name="submit" class="mt-4 col-12 btn btn-default btn-lg submit-button">Login</button>
                        </form>
                        <div class="d-flex justify-content-center sign-up mt-4">
                            <p>Don't have an account? <a href="register.php">Sign Up</a></p>

                        </div>

                    </div>
                </div>
            </div>

        </div>       
            


        <footer       
            class="navbar navbar-expand-lg navbar-dark bg-info text-right">

                     The A-Team &copy; 2019
                

        </footer>
        
        
        
        
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        
        <!-- bootstrap Javascript -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
        <!-- Javascript file -->
        <script src="js/script.js"></script>
    </body>
    
</html>
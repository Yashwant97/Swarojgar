<!DOCTYPE html>
<?php
require 'common.php';

?>
<html>
    <head>
        <title>Fund Raiser Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="index.css">
        <script src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js" ></script>
        
    <body>
       
        <div class="container ">
            <br>
        <div class="row row-style">
        <div class="col-md-5 col-md-offset-3">
        <div class="panel panel-default ">
            
            <center><p class="text-warning">Login to Proceed</p></center>
            <form method="POST" action="frlogin_script.php">
                
                <input type="text" name="email" class="form-group form-control" placeholder="Email"> 
                <input type="password" name="password" class="form-group form-control" placeholder="Password"> 
                <center><button class="btn btn-primary">OK</button></center>
                <br>
                <div class="warn"><?php
                           
                        $a = $_GET['flag'];
                        if($a==2)
                        {
                            echo"Password Doesn't Match";
                        }
                        elseif ($a==1) {
                            echo"No Such User Exist";
                        }
                        else
                        {
                            $ch=" ";
                        }
                    ?>
                    </div>
                <center> <p>Don't have a account?<a href="fr_reg.php">Register Here</a>|<a href="forget.php">Forget Password</a></p></center>
                
                
            </form>
            
        </div>
        </div>
        </div>
        </div>
        
        <div class="navbar navbar-inverse navbar-fixed-bottom">
            <center>Copyright © Lifestyle Store. All Rights
Reserved Contact Us: +91 90000 00000 Devloper:Darkcoderz</center>
        </div>
       
    </body>
</html>
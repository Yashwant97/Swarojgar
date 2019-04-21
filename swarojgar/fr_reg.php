
<?php
require 'common.php';

?>
<html>
    <head>
        <title>Sign Up</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="index.css">
        <script src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js" ></script>
        <style>.warn{
                color: #f00;
            }</style>
    </head>
    <body>
        <?php
        
        ?>
            
        <br>
        <br>
        <div class="container ">
            <div class="row row-style">
                <div class="col-md-5 col-md-offset-3">
                    <div class="panel panel-default ">
                        <center><h1 class="from-group">SIGN UP </h1></center>
                        <form method="POST" action="fr_reg_script.php">
                            Name:-<br>
                            <input type="text" name="Name" class="form-group form-control" placeholder="First Name" required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$" >
                            Email:-<span class="warn"><?php echo $_GET['m1']?><br></span>
                            <input type="email" name="email" class="form-group form-control" placeholder="Email" required="true" >
                            Password:-<br>
                            <input type="password" name="password" class="form-group form-control" placeholder="Password" required="true"> 
                            Phone:-<span class="warn"><?php echo $_GET['m2']?></span><br>
                            <input type="text" name="Phone" class="form-group form-control" placeholder="Phone" required="true" >
                            Address:-<br>
                            <input type="text" name="Address" class="form-group form-control" placeholder="Address" required="true"> 
                            
                            <center><button class="btn btn-primary">Submit</button></center>
             
                            <br>
                            
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

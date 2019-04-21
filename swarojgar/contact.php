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
            <form action="contactus_script.php" method="POST">

            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name..">

            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Your last name..">

            <label for="country">City</label>
            <select id="country" name="country">
                <option value="australia">Udaipur</option>
                <option value="canada">Jaipur</option>
                <option value="usa">Bhilwara</option>
                <option value="usa">Kota</option>
                <option value="usa">Boondi</option>
                <option value="usa">Chittorgarh</option>
            </select>

            <label for="subject">Subject</label>
            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

            <input type="submit" value="Submit">
            <?php echo $_GET['m1'];?>
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
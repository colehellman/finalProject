<?php
include("loginserv.php");//check for uername and password
?>

<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
      <script src="bootstrap/js/bootstrap.min.js"></script>
        <title>Login</title>
    </head>
    <body>
      <div class="span4"><img class="center-block" src="logo.jpg" /></div>
      <div class="col-md-3 text-center">
      <div class="container">
        <br />
        <form method="post" action="">
            <input type="text" name="user" id="user" placeholder="Username" /><br /><br />
            <input type="password" name="pass" id="pass" placeholder="Password" /><br /><br />
            <input type="submit" name="submit" value="Login" />
          </div>
        </div>

        </form>
        <span><?php echo $error;//error message?></span>
    </body>

</html>

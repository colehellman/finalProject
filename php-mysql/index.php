<?php
    session_start();

    if (isset($_POST['submit'])) {
        include("connection.php"); //connection.php
        $username = strip_tags($_POST['username']);
        $password = strip_tags($_POST['password']);

        $sql = "SELECT id, username, password FROM users WHERE username = '$username' AND activated = '1' LIMIT 1";

        $query = mysqli_query($dbCon, $sql);
         if ($query) {
            $row = mysqli_fetch_row($query);
            $userId = $row[0];
            $dbUsername = $row[1];
            $dbPassword = $row[2];

         }
        if ($username == $dbUsername && $password == $dbPassword) {
            $_SESSION['username'] = $username;
            $_SESSION['id'] = $userId;
            header('Location: user.php');
        } else {
            echo "Incorrect password or username.";
        }
    }
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
        <form method="post" action="index.php">
            <input type="text" name="username" placeholder="Username" /><br /><br />
            <input type="password" name="password" placeholder="Password" /><br /><br />
            <input type="submit" name="submit" value="Login" />
          </div>
        </div>

        </form>

    </body>

</html>

<?php
$error = '';//variable to store error message
if(isset($_POST['submit'])){
  if(empty($_POST['user']) || empty($_POST['pass'])){
    $error="Username or password is invalid";
  }
  else {
    //define $user and $pass
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    //establish connection with server
    $conn=mysqli_connect("localhost", "root", "");
    //select db
    $db=mysqli_select_db($conn, "test");
    //sql query to fetch info of registered user
    $query=mysqli_query($conn, "SELECT * FROM userpass WHERE pass='$pass' AND user='$user'");

    $rows=mysqli_num_rows($query);
    if ($rows==1){
      header("Location: supervisorHome.htm");//redirect to new page
    }
    else {
      $error="Invalid username or password.";
    }
    mysqli_close($conn);
  }
}
 ?>

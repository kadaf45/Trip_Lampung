<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_trilam";

$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn)
  echo "Connection Failed"."<br>";

// REGISTER USER
  $fullname = $_POST['fname'];
  $email = $_POST['emailSignUp'];
  $username = $_POST['unameSignUp'];
  $pass = $_POST['passSignUp'];
  $cpass = $_POST['cpassSignUp'];

  $_SESSION["email"] = $email;

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $result = $conn->query("SELECT * FROM signup WHERE UserName='".$username."' OR Email='".$email."' LIMIT 1");
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['UserName'] === $username || $user['Email'] === $email) {
      echo "USERNAME/EMAIL ALREADY EXISTS!!";
    }
  }
  else {
    $conn->query("INSERT INTO signup (FullName, Email, UserName, Password) VALUES('".$fullname."', '".$email."', '".$username."', '".$pass."')");
    header('location: login.html');
  }
?>
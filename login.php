<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_trilam";

$uname = $_POST['unameLogin'];
$pass = $_POST['passLogin'];

$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn)
  echo "Connection Failed"."<br>";

$result = $conn->query("SELECT * FROM signup WHERE UserName = '".$uname."' AND Password = '".$pass."' LIMIT 1");
$_SESSION["usrname"] = $uname;
$_SESSION["passwrd"] = $pass;
//$user = mysqli_fetch_assoc($result);
$row = mysqli_num_rows($result);

if ($row == 0) {
	echo "INCORRECT USERNAME/PASSWORD";
	header('location: login.html');
}
else {
	header('location: home.php');
}
?>
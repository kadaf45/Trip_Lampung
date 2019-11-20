<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<!-- Header -->
	<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
	
	<button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
		<span class="navbar-toggler-icon"></span>
	</button>
	
	<div class="collapse navbar-collapse" id="collapse_target">
    <a class="navbar-brand" href="#"><img src="logo.png" width="50" height="70"/>    TRIP LAMPUNG</a>
    <ul class="navbar-nav ml-auto">
    	<li class="nav-item">
  			<a class="nav-link" href="home.html" target="_self"><i class="fa fa-home"></i>Home</a>
  		</li>
  		<li class="nav-item">
  			<a class="nav-link" href="booktrip.html" target="_self"><i class="fa fa-globe"></i>Book Trip</a>
  		</li>
  		<li class="nav-item">
  			<a class="nav-link" href="about.html" target="_self"><i class="fa fa-info-circle"></i>About</a>
  		</li>
  		<li class="nav-item">
        	<a class="nav-link active" href="login.html" target="_self"><i class="fa fa-lock"></i>Login</a>
      	</li>
  		<li class="nav-item">
  			<a class="nav-link" href="signup.html" target="_self"><i class="fa fa-sign-in"></i>Sign Up</a>
  		</li>
    </ul>
	</div>
	</nav>

<?php 
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "db_trilam";

  $conn = new mysqli($servername, $username, $password, $dbname);
  if (!$conn)
    echo "Connection Failed"."<br>";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $opass = $_POST['oldPass'];
    $npass = $_POST['newPass'];
    $cpass = $_POST['conPass'];

    $ins = "SELECT * FROM signup WHERE Password = '".$opass."'";
    $result = $conn->query($ins);
    $row = mysqli_fetch_array($result);
    if ($opass == $row["Password"]) {
      $sql = $conn->query("UPDATE signup SET Password = '".$npass."' WHERE Password = '".$opass."'");
      header('location: login.html');
    }
  }
?>

  <div class="container-fluid bg">
  <div class="row">
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-4"></div>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
      <form class="form-container" onsubmit="return validateForm();" action="changepass.php" method="POST" name="userLoginForm" <?php echo $_SERVER['PHP_SELF']; ?>>
        <h1 style="text-align: center;">CHANGE PASSWORD</h1>
        <div class="form-group">
          <label for="InputOldPassword">Old Password</label>
          <input type="password" class="form-control" name="oldPass" id="InputOldPassword" placeholder="Enter Old Password">
        </div>
        <div class="form-group">
          <label for="InputNewPassword">New Password</label>
          <input type="password" class="form-control" name="newPass" id="InputNewPassword" placeholder="Enter New Password">
        </div>
        <div class="form-group">
          <label for="InputConfirmPassword">Confirm Password</label>
          <input type="password" class="form-control" name="conPass" id="InputConfirmPassword" placeholder="Confirm Password">
        </div>
        <button type="submit" class="btn btn-dark btn-block">Submit</button>
        <label><a class="link" href="login.html"><h5>Login</h5></a></label>
      </form>
      </div>
      <div class="col-xs-12 col-sm-3 col-md-3 col-lg-4"></div>
    </div>
  </div>
  </div>

  <script type="text/javascript">
    function validateForm() {
      var password = document.getElementById("InputNewPassword").value;
      var confirmPassword = document.getElementById("InputConfirmPassword").value;
      if (password != confirmPassword) {
        alert("PASSWORD DO NOT MATCH!! TRY AGAIN!!");
        return false;
      }
      return true;
    }
  </script>
</body>
</html>
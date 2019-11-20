<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Payment</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="payment.css">
</head>
<body background="img/bg1.jpg">
<!-- Header -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
	
	<button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
		<span class="navbar-toggler-icon"></span>
	</button>
	
	<div class="collapse navbar-collapse" id="collapse_target">
    <a class="navbar-brand" href="#"><img src="logo.png" width="60" height="60"/>   TRIP LAMPUNG&nbsp;Welcome, 
    <?php
    echo $_SESSION["usrname"];
    ?>
	</a>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
  			<a class="nav-link" href="home.php"><i class="fa fa-home"></i>Home</a>
  		</li>
  		<li class="nav-item">
  			<a class="nav-link" href="booktrip.php" target="_self"><i class="fa fa-globe"></i>Book Trip</a>
  		</li>
  		<li class="nav-item">
  			<a class="nav-link active" href="about.php" target="_self"><i class="fa fa-info-circle"></i>About</a>
  		</li>
      <li class="nav-item">
        <a class="nav-link" href="home.php" target="_self"><i class="fa fa-sign-out"></i>Logout</a>
      </li>
    </ul>
	</div>
</nav>
<!-- Main Content -->
<div class="container">
	  <div id="heading">
			<h1>
			YOUR BOOKING IS SUCCESS !!!
			<h1>
    </div>
</div>
<div class="container">
	  <div id="paycon">
      <h3> Please send the fee to one of our bank account</h3><br>
       <p > BNI     : 31xxxxxxxxxxx</p>
       <p > BRI     : 21xxxxxxxxxxx </p>
       <p > Mandiri : 13xxxxxxxxxxx </p><br>
       <h3>Please send photo/screenshot of your Proof of Payment to our email<h3>
       <a href="#" id="email"> triplampung99@gmail.com </a> <br> <br>
       <h3>Click the link below for other information through our whatsapp</h3>
       <a href="https://api.whatsapp.com/send?phone=6281278709906" id="wapi">Our Whatsapp</a>
       </div> 
</div>	

<!-- Footer -->
<nav class="navbar navbar-expand-md navbar-light bg-light">
<!-- Collapsing Button -->  
  <button class="navbar-toggler" data-toggle="collapse" data-target="#collapseTarget">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse footer" id="collapseTarget">
    <a href="https://web.facebook.com/TripLampung45" class="fa fa-facebook"></a>
    <a href="https://twitter.com/Lampung45Trip" class="fa fa-twitter"></a>
    <a href="https://www.instagram.com/kadafi.eka/" class="fa fa-instagram"></a>
  </div>
</nav>

</body>
</html>
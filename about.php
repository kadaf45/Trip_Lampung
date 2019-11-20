<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>About</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="about.css">
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
	<div id="heading" class="row">
		<div class="col-lg-3">
			<h2>ABOUT US<h2>
			<h5>This is what we are.<h5>
		</div>
		<div class="col-lg-9">
			<p>
			Trip Lampung adalah suatu yang didasari atas pikiran dua orang mahasiswa Teknik Informatika Universitas Lampung yaitu Kadafi Eka Sakti dan Kharisma Sukma Amin.
			Dengan Trip Lampung pengguna dapat menemukan destinasi wisata paling populer di provinsi lampung, kami segenap tim Trip Lampung berharap adanya aplikasi dapat meningkatkan Tourism Lampung.
			<p>
		</div>
	</div>
</div>	
<div class="container">
	<div id="maps" class="row">
		<div class="col-lg-4">
			<h2>CONTACT US<h2>
			<h5>This is where we are.<h5>
		</div>
		<div class="col-lg-8">
				<p>
				Gedung H, Teknik Informatika , Universitas Lampung, Rajabasa, Bandar Lampung
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.363068082599!2d105.24023951389786!3d-5.361454155153382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40c549ee3d3c67%3A0xe78a3d4ba84f8f4e!2sGedung%20H%20Teknik%20Mesin%20dan%20Teknik%20Elektro%2C%20Gedong%20Meneng%2C%20Kec.%20Rajabasa%2C%20Kota%20Bandar%20Lampung%2C%20Lampung%2035142!5e0!3m2!1sen!2sid!4v1574175104561!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
				<p>
		</div>
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
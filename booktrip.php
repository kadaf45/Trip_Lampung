<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>BOOK TRIP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="booktrip.css">
</head>
<body background="img/bg1.jpg">

<!-- Header -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
	
	<button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
		<span class="navbar-toggler-icon"></span>
	</button>
	
	<div class="collapse navbar-collapse" id="collapse_target">
    <a class="navbar-brand" href="#"><img src="logo.png" width="60" height="60"/>  TRIP LAMPUNG&nbsp;Welcome, 
    <?php
    echo $_SESSION["usrname"];
    ?>
    </a>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
  			<a class="nav-link" href="home.php" target="_self"><i class="fa fa-home"></i>Home</a>
  		</li>
  		<li class="nav-item">
  			<a class="nav-link active" href="booktrip.php" target="_self"><i class="fa fa-globe"></i>Book Trip</a>
  		</li>
  		<li class="nav-item">
  			<a class="nav-link" href="about.php" target="_self"><i class="fa fa-info-circle"></i>About</a>
  		</li>
      <li class="nav-item">
        <a class="nav-link" href="home.html" target="_self"><i class="fa fa-sign-out"></i>Logout</a>
      </li>
    </ul>
	</div>
</nav>

<!-- Image Gallery -->
<h3 id="text2">BOOK YOUR FIRST TRIP</h3>
<div class="container-fluid">
  <div class="d-flex flex-row flex-wrap justify-content-center">
    <div class="d-flex flex-column">
      <div data-aos="zoom-in-down">
      <div class="card">
        <div class="card-img">
          <a href="booking.php"><img src="img/slanik.jpg" class="img-fluid card-img-top"></a>
            <div class="card-body">
              <h4 class="card-title">SLANIK WATERPARK</h4>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <div class="card-footer">
              <a href="files/DUBAI.docx" target="_blank" class="card-link" download>Download Itinerary</a>
            </div>  
        </div>
        </div>
      </div>
      <div data-aos="zoom-in-down">
      <div class="card">
        <div class="card-img">
          <a href="booking.php"><img src="img/kiluan.jpg" class="img-fluid card-img-top"></a>
            <div class="card-body">
              <h4 class="card-title">TELUK KILUAN</h4>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <i class="fa fa-star-o"></i>                        
            </div>
            <div class="card-footer">
              <a href="files/THAILAND.docx" target="_blank" class="card-link" download>Download Itinerary</a>
            </div>  
        </div>
      </div>
      </div>
    </div>
              
    <div class="d-flex flex-column">
      <div data-aos="zoom-in-down">
      <div class="card">
        <div class="card-img">
          <a href="booking.php"><img src="img/curug.jpg" class="img-fluid card-img-top"></a>
            <div class="card-body">
              <h4 class="card-title">CURUP GANGSA WATERFALL</h4>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <div class="card-footer">
              <a href="files/ITALY.docx" target="_blank" class="card-link" download>Download Itinerary</a>
            </div>  
        </div>
        </div>
      </div>
      <div data-aos="zoom-in-down">
      <div class="card">
        <div class="card-img">
          <a href="booking.php"><img src="img/belerang.jpg" class="img-fluid card-img-top"></a>
            <div class="card-body">
              <h4 class="card-title">WISMA BELERANG</h4>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <div class="card-footer">
              <a href="files/SOUTH-AFRICA.docx" target="_blank" class="card-link" download>Download Itinerary</a>
            </div>  
        </div>
      </div>
      </div>
    </div>
              
    <div class="d-flex flex-column">
      <div data-aos="zoom-in-down">
      <div class="card">
        <div class="card-img">
          <a href="booking.php"><img src="img/elty.jpg" class="img-fluid card-img-top"></a>
            <div class="card-body">
              <h4 class="card-title">GRAND ELTY KRAKATOA</h4>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <div class="card-footer">
              <a href="files/LEH-LADAKH.docx" target="_blank" class="card-link" download>Download Itinerary
              </a>
            </div>  
        </div>
        </div>
      </div>
      <div data-aos="zoom-in-down">
      <div class="card">
        <div class="card-img">
          <a href="booking.php"><img src="img/kambas.jpg"  class="img-fluid card-img-top"></a>
            <div class="card-body">
              <h4 class="card-title">WAY KAMBAS</h4>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
            </div>
            <div class="card-footer">
              <a href="files/SPAIN.docx" target="_blank" class="card-link" download>Download Itinerary</a>
            </div>  
        </div>
      </div>
      </div>
    </div>
              
    <div class="d-flex flex-column">
      <div data-aos="zoom-in-down">
      <div class="card">
        <div class="card-img">
          <a href="booking.php"><img src="img/siger.jpg" class="img-fluid card-img-top"></a>
            <div class="card-body">
              <h4 class="card-title">SIGER TOWER</h4>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <div class="card-footer">
              <a href="files/KERALA.docx" target="_blank" class="card-link" download>Download Itinerary</a>
            </div>  
        </div>
      </div>
      </div>
      <div data-aos="zoom-in-down">
      <div class="card">
        <div class="card-img">
          <a href="booking.php"><img src="img/lamsel2.jpg" class="img-fluid card-img-top"></a>
            <div class="card-body">
              <h4 class="card-title">PAHAWANG ISLAND</h4>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <div class="card-footer">
              <a href="files/NEPAL.docx" target="_blank" class="card-link" download>Download Itinerary</a>
            </div>  
        </div>
      </div>
      </div>
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

<script type="text/javascript">
  AOS.init();
</script>
</body>
</html>
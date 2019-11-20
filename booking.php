<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>BOOKINGS</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  	<link rel="stylesheet" type="text/css" href="booking.css">
</head>
<body background="img/bg1.jpg">
	
<!-- Header -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
	
	<button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
		<span class="navbar-toggler-icon"></span>
	</button>
	
	<div class="collapse navbar-collapse" id="collapse_target">
    <a class="navbar-brand" href="#"><img src="logo.png" width="50" height="70"/>   TRIP LAMPUNG&nbsp;Welcome, 
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
  			<a class="nav-link" href="payment.php" target="_self"><i class="fa fa-money"></i>Payment</a>
  		</li>
      <li class="nav-item">
        <a class="nav-link" href="home.html" target="_self"><i class="fa fa-sign-out"></i>Logout</a>
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
      $destname = $_POST['dname'];
      $NumOfAdult = $_POST['totalAdult'];
      $NumOfChild = $_POST['totalChild'];
      $FullName2 = $_POST['fname2'];
      $ChkIn = $_POST['Cin'];
      $ChOut = $_POST['Cout'];
  
      $conn->query("INSERT INTO booking (FullName2, DestinationName, TotalAdults, TotalChildren, CheckIn, CheckOut) VALUES('".$FullName2."','".$destname."', '".$NumOfAdult."', '".$NumOfChild."','".$ChIn."','".$ChOut."')");
      header('location: payment.php');
      
      }
    
?>
<h3 id="text2">BOOKINGS OPEN</h3>
<form id="regForm" action="booking.php" method="POST" <?php echo $_SERVER['PHP_SELF']; ?>>
  <h1>ENTER DETAILS</h1>
  <!-- One "tab" for each step in the form: -->
  <div class="tab">
  <p><input placeholder="Full Name"  oninput="this.className = ''" name="fname2"></p>
    <p><input placeholder="Search Destination Name" oninput="this.className = ''" type="search" id="searchBox" ></p>
    <select id="places" style="color: black;width: 50%;height: 5vh;font-style: 'Helvetica';" name="dname">
      <option value="WayKambas" style="color: black;">WAY KAMBAS</option>
      <option value="CurupGangsa" style="color: black;">CURUP GANGSA WATERFALL</option>
      <option value="Slanik" style="color: black;">SLANIK WATERPARK</option>
      <option value="Telukkiluan" style="color: black;">TELUK KILUAN</option>
      <option value="WismaBelerang" style="color: black;">WISMA BELERANG</option>
      <option value="Pahawang" style="color: black;">PAHAWANG ISLANG </option>
      <option value="Siger" style="color: black;">SIGER TOWER</option>
      <option value="GrandElty" style="color: black;">GRAND ELTY KRAKATOA</option>
    </select>
  </div>
  <div class="tab">
    <p><input placeholder="Enter Total Number Of Adults" oninput="this.className = ''" name="totalAdult"></p>
    <p><input placeholder="Enter Total Number Of Children" oninput="this.className = ''" name="totalChild"></p>
  </div>
  <div class="tab">
     <p><input placeholder="Date of Check in : dd/mm/yy "  oninput="this.className = ''" name="Cin"></p>
     <p><input placeholder="Date of Check Out : dd/mm/yy " oninput="this.className = ''" name="Cout"><p>
  </div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center; margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>

<!-- Footer -->
<nav class="navbar navbar-expand-md navbar-light bg-light">
<!-- Collapsing Button -->  
  <button class="navbar-toggler" data-toggle="collapse" data-target="#collapseTarget">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse footer" id="collapseTarget">
    <a href="#" class="fa fa-facebook"></a>
    <a href="#" class="fa fa-twitter"></a>
    <a href="#" class="fa fa-instagram"></a>
  </div>
</nav>

<script type="text/javascript">
  var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the crurrent tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}

searchBox = document.querySelector("#searchBox");
places = document.querySelector("#places");
var when = "keyup"; //You can change this to keydown, keypress or change

searchBox.addEventListener("keyup", function (e) {
    var text = e.target.value; 
    var options = places.options; 
    for (var i = 0; i < options.length; i++) {
        var option = options[i]; 
        var optionText = option.text; 
        var lowerOptionText = optionText.toLowerCase();
        var lowerText = text.toLowerCase(); 
        var regex = new RegExp("^" + text, "i");
        var match = optionText.match(regex); 
        var contains = lowerOptionText.indexOf(lowerText) != -1;
        if (match || contains) {
            option.selected = true;
            return;
        }
        searchBox.selectedIndex = 0;
    }
});
</script>
</body>
</html>
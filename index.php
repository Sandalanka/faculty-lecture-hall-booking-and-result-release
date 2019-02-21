<?php require_once('connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<header><div class="img">
    <img src="79.png" alt="">
</div>
    
    <h1>Faculty Of Applied Science</h1><br>
<div class="date">
            <p><?php echo date('l') .' '.date('d').', '.date('Y'); ?></p>
            
		 </div>
</header>
<div class="topnav">
  <a href="index.php">Home</a>
  <a href="department.php">Deparment</a>
  <a href="slogin.php">Student</a>
  <a href="stafflogin.php">Staff</a>
  <a href="alogin.php">Admin</a>
</div>
<div class="mySlides w3-display-container w3-center">
    <img src="147.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
     
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="78.png" style="width:100%">
   
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="77.png" style="width:100%">
    
  </div>
  <div class="para">
      <center><h2>Welcome to the Faculty of Applied Sciences</h2></center>
      <p>
      The Faculty of Applied Sciences of the Sabaragamuwa University of Sri Lanka was initially started as the Buttala Affiliated University College (BAUC) on 21st June 1993. The BAUC offered two diploma courses, one in Food Science and Technology and the other in English Language. With the elevation of the Affiliated University Colleges to fully fledged national Universities in early 1996, three Affiliated University Colleges; Sabaragamuwa Affiliated University College, Uva Affiliated University College and Buttala Affiliated University College were amalgamated to form the Sabaragamuwa University of Sri Lanka and the BAUC became the Faculty of Applied Sciences of the Sabaragamuwa University of Sri Lanka. With effect from March 2008, the faculty has been relocated in the main campus premises at Belihuloya
      </p>
  </div>





  <script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</body>
</html>
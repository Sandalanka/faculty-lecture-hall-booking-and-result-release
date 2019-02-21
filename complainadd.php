<?php require_once('connection.php'); ?>
<?php session_start(); ?>
<?php
if(isset($_POST['submit'])){
    $complain=mysqli_real_escape_string($connection,$_POST['complain']);
    $date=mysqli_real_escape_string($connection,$_POST['date']);
    $query="INSERT INTO complain(complain,date)VALUES('{$complain}','{$date}')";
    $result=mysqli_query($connection,$query);

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Complain</title>
    <link rel="stylesheet" href="main.css" >
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

  <a href="student.php">Student </a>
  <a href="bookingadd.php">Lecture Hall Booking</a>
  <a href="complainadd.php">complain</a>
 
  <a href="logout.php">Logout</a>
 
</div>
<main>
<form action="complainadd.php" method="POST" class="userform">

<label for="">Complain</label>
<input type="textArea"  name="complain">


<label for="">Date</label>
<input type="date"  name="date">

<button type="submit" name="submit">Complain</button>

</main>
</body>
</html>
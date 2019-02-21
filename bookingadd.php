<?php require_once('connection.php'); ?>
<?php session_start(); ?>
<?php
if(isset($_POST['submit'])){
    $error=array();
    if(empty($error)){
        $name=mysqli_real_escape_string($connection,$_POST['name']);
        $date=mysqli_real_escape_string($connection,$_POST['date']);
        $reg=mysqli_real_escape_string($connection,$_POST['reg']);
        $hall=mysqli_real_escape_string($connection,$_POST['hall']);
        $contact=mysqli_real_escape_string($connection,$_POST['contact']);
        $reason=mysqli_real_escape_string($connection,$_POST['reason']);

     $query="INSERT INTO booking(name,reg_num,contact,reason,hall_name,date)VALUES('{$name}','{$reg}','{$contact}','{$reason}','{$hall_name}','{$date}')";
     $result=mysqli_query($connection,$query);

    }
    if($result){
        header('Location:student.php?add_user=true');
    }
    else{
        echo 'Error';
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"  initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lecture Hall Booking</title>
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
<form action="bookingadd.php"method="POST" class="userform">
<p>
    <label for="">Name</label>
    <input type="text"name="name" require>
</p>

<p>
    <label for="">Registation Number</label>
    <input type="text" name="reg" id="" require>
</p>

<p>
    <label for="">Contact</label>
    <input type="number" name="contact" require>
</p>
<p>
    <label for="">Reason</label>
    <input type="text" name="reason" require>
</p>
<p>
    <label for="">Lecture Hall Name</label>
    <input type="text" name="hall" require>
</p>
<p>
    <label for="">Date</label>
    <input type="date" name="date" require>
</p>
<p>
    <button type="submit" name="submit">Booking Apply</button>
</p>

</form>
</main>
    
</body>
</html>
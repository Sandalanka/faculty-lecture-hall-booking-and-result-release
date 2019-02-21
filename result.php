<?php require_once('connection.php'); ?>
<? session_start(); ?>
<?php
if(isset($_POST['submit'])){
    $error=array();
    if(empty($error)){
        $name=mysqli_real_escape_string($connection,$_POST['name']);
       
        $reg=mysqli_real_escape_string($connection,$_POST['reg']);
        $subject=mysqli_real_escape_string($connection,$_POST['subject']);
        $result=mysqli_real_escape_string($connection,$_POST['result']);
        $index=mysqli_real_escape_string($connection,$_POST['index']);
        
        $query="INSERT INTO result(name,reg_num,subject,result,index_number)VALUES('{$name}','{$reg}','{$subject}','{$result}','{$index}')";
     $result=mysqli_query($connection,$query);

    }
    if($result){
        header('Location:result.php?add_user=true');
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Staff Add</title>
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
<a href="staff.php">Staff</a>
  <a href="studentshow.php">Student Add</a>
  <a href="resultadd.php">Result Add</a>
  <a href="complain.php">complain</a>
  <a href="booking.php">Booking details</a>
  <a href="logout.php">Logout</a>
 
</div>
    <main>
<form action="result.php"method="POST" class="userform">
<p>
    <label for="">Name</label>
    <input type="text"name="name" require>
</p>

<p>
    <label for="">Registation Number</label>
    <input type="text" name="reg" id="" require>
</p>
<p>
    <label for="">Subject</label>
    <input type="text" name="subject" require>
</p>
<p>
    <label for="">Result</label>
    <input type="text" name="result" require>
</p>
<p>
    <label for="">Index Number</label>
    <input type="number" name="index" require>
</p>

<p>
    <button type="submit" name="submit">Add Result</button>
</p>

</form>
</main>
</body>
</html>
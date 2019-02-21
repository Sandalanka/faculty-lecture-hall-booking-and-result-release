<?php session_start(); ?>
<?php require_once('connection.php');?>
 
<?php
if(isset($_POST['submit'])){
if(!isset($_SESSION['user_id'])){
    header('Location:backend.php');
  // echo '444';
}
$error=array();
if(isset($_GET['user_id'])){
    $user_id=mysqli_real_escape_string($connection,$_GET['user_id']);
    $name=mysqli_real_escape_string($connection,$_POST['name']);
    $id=mysqli_real_escape_string($connection,$_POST['id']);
    $department=mysqli_real_escape_string($connection,$_POST['department']);
    $contact=mysqli_real_escape_string($connection,$_POST['contact']);
    $email=mysqli_real_escape_string($connection,$_POST['email']);
    $password=mysqli_real_escape_string($connection,$_POST['password']);
   

$query="UPDATE staff SET name={$name} AND idcard={$id} AND department={$department} AND contact={$contact} AND email={$email} WHERE id ={$user_id} LIMIT 1" ;
$result=mysqli_query($connection,$query);
if($result){
    header('Location:backend.php');
}
}

else{
    //echo 'Error';
    //header('Location:backend.php');
}


}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Staff Member</title>
    <link rel="stylesheet" href="main.css" >
</head>
<body>
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
<a href="backend.php">Admin</a>
  <a href="staffadd.php">Staff Add</a>
  <a href="logout.php">Logout</a>
 
</div>
<main>
<form action="staffadd.php"method="POST" class="userform">
<p>
    <label for="">Name</label>
    
    <input type="text"name="name" require>
</p>
<p>
    <label for="">ID Number</label>
    <input type="text" name="id" id="" require>
</p>
<p>
    <label for="">Department</label>
    
    <input type="text"; name="department" require>
</p>
<p>
    <label for="">Contact</label>
    <input type="number" name="contact" require>
</p>
<p>
    <label for="">Email Address</label>
    <input type="email" name="email" require>
</p>
<p>
    <label for="">Password</label>
    <input type="password" name="password" require>
</p>
<p>
    <button type="submit" name="submit">Add Staff Member</button>
</p>

</form>
</main>
    
</body>
</html>
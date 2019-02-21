<?php require_once('connection.php'); ?>
<?php session_start(); ?>

<?php
if(isset($_POST['submit'])){
    $error=array();

if(!isset($_POST['email'])||strlen(trim($_POST['email']))<1){
$error[]='user name missing';
}
if(!isset($_POST['password'])||strlen(trim($_POST['password']))<1){
    $error[]='password missing';
    }
if(empty($error)){
$email=mysqli_real_escape_string($connection,$_POST['email']);
$password=mysqli_real_escape_string($connection,$_POST['password']);

$query="SELECT*FROM admin WHERE email='{$email}' AND password='{$password}'LIMIT 1";

$result_set=mysqli_query($connection,$query);
if($result_set){
//query succesful
if(mysqli_num_rows($result_set)==1){
$user=mysqli_fetch_assoc($result_set);
$_SESSION['user_id']=$user['id'];
$_SESSION['name']=$user['name'];

//$query="UPDATE user SET date=NOW()";
$query.="WHERE id={$_SESSION['user_id']} LIMIT 1";
$result_set=mysqli_query($connection,$query);
    header('Location:backend.php');

}
else{
    $error[]='Invalied user name/password';
}
}
else{
    $error[]='Database query failed';
}

}

}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Login</title>
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
  <a href="index.php">Home</a>
  <a href="department.php">Deparment</a>
  <a href="slogin.php">Student</a>
  <a href="stafflogin.php">Staff</a>
  <a href="alogin.php">Admin</a>
</div>
    
<div class="login">

<form action="alogin.php" method="post">
<fieldset>
<legend><H1> Admin login In</H1></legend>
 <?php
if(isset($error)&& !empty($error)){
echo' <p class="error">Invailed User name/Password</p>';
}
?>
<p>
<label for="">User name</label>
<input type="text"name="email" placeholder="Email address" require>

</p>

<p>
<label for="">password</label>
<input type="password" name="password" placeholder="password" require>
</p>

<p>
<button type="submit" name="submit">Login In</button></p>
</fieldset>
</form>
</div>
</body>
</html>
<?php require_once('connection.php'); ?>
<? session_start(); ?>
<?php
if(isset($_POST['submit'])){
    $error=array();
    if(empty($error)){
        $name=mysqli_real_escape_string($connection,$_POST['name']);
        $id=mysqli_real_escape_string($connection,$_POST['id']);
        $department=mysqli_real_escape_string($connection,$_POST['department']);
        $contact=mysqli_real_escape_string($connection,$_POST['contact']);
        $email=mysqli_real_escape_string($connection,$_POST['email']);
        $password=mysqli_real_escape_string($connection,$_POST['password']);
        $query="INSERT INTO staff(name,idcard,department,contact,email,password)VALUES('{$name}','{$id}','{$department}','{$contact}','{$email}','{$password}')";
     $result=mysqli_query($connection,$query);

    }
    if($result){
        header('Location:backend.php?add_user=true');
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
    <input type="text" name="department" require>
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
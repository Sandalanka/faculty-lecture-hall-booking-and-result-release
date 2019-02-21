<?php require_once('connection.php'); ?>
<?php session_start();
?>
<?php
if(isset($_POST['submit'])){
    $index=mysqli_real_escape_string($connection,$_POST['index']);
    $userlist='';
$quary="SELECT*FROM result WHERE index_number='{$index}' AND is_deleted=0 ORDER BY name";
$query=mysqli_query($connection,$quary);
if(isset($query)){
    $user=mysqli_fetch_assoc($query);
$userlist.="<tr>";
$userlist.="<td>Name</td>";
$userlist.="<td>{$user['name']}</td>";
$userlist.="</tr>";
$userlist.="<tr>";
$userlist.="<td>Registation Number</td>";
$userlist.="<td>{$user['reg_num']}</td>";
$userlist.="</tr>";
$userlist.="<tr>";
$userlist.="<td>Subject</td>";
$userlist.="<td>{$user['subject']}</td>";
$userlist.="</tr>";
$userlist.="<tr>";
$userlist.="<td>Result</td>";
$userlist.="<td>{$user['result']}</td>";
$userlist.="</tr>";
$userlist.="<tr>";
$userlist.="<td>Registation Number</td>";
$userlist.="<td>{$user['index_number']}</td>";
$userlist.="</tr>";
    }


    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student</title>
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
<form action="student.php" method="POST" class="userform">
<label for="">Index Number</label>
<input type="number" name="index">
<button type="submit" name="submit">Search</button>
<button type="reset">Clear</button>
</form>
<center>
<table>
<caption>Result</caption>
<?php
if(!empty($userlist)){
echo $userlist;
}
?>
</table>
</center>
</main>
    
</body>
</html>
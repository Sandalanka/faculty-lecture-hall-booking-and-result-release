<?php require_once('connection.php');  ?>
<?php session_start(); ?>
<?php  
$userlist='';
$quary="SELECT*FROM staff WHERE is_deleted=0 ORDER BY name";
$query=mysqli_query($connection,$quary);
if(isset($query)){
    while($user=mysqli_fetch_assoc($query)){
$userlist.="<tr>";
$userlist.="<td>{$user['name']}</td>";
$userlist.="<td>{$user['idcard']}</td>";
$userlist.="<td>{$user['department']}</td>";
$userlist.="<td>{$user['contact']}</td>";
$userlist.="<td>{$user['email']}</td>";
$userlist.="<td>{$user['last_login']}</td>";
$userlist.="<td><a href=\"sdelete.php?user_id={$user['id']}\">Remove</a></td>";
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
    <title>Backend</title>
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
<center><h1>Staff Details</h1></center>

<table class="masterlist">
    <tr>
        <th>Name</th>
        <th>ID Number</th>
        <th>Deparment</th>
        <th>Contact</th>
        <th>Email</th>
        <th>Last Login</th>
        
        <th>Remove</th>
    </tr>
    <?php echo $userlist ?>
</table>
</main>
</body>
</html>
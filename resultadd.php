<?php require_once('connection.php');  ?>
<?php session_start(); ?>
<?php  
$userlist='';
$quary="SELECT*FROM result WHERE is_deleted=0 ORDER BY name";
$query=mysqli_query($connection,$quary);
if(isset($query)){
    while($user=mysqli_fetch_assoc($query)){
$userlist.="<tr>";
$userlist.="<td>{$user['name']}</td>";
$userlist.="<td>{$user['reg_num']}</td>";
$userlist.="<td>{$user['subject']}</td>";
$userlist.="<td>{$user['result']}</td>";
$userlist.="<td>{$user['index_number']}</td>";

$userlist.="<td><a href=\"deleteresult.php?user_id={$user['id']}\">Remove</a></td>";
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
    <title>Result</title>
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
  <a href="studentshow.php">Student </a>
  <a href="resultadd.php">Result Add</a>
  <a href="complain.php">complain</a>
  <a href="booking.php">Booking details</a>
  <a href="logout.php">Logout</a>
 
</div>
<main>
<center><h1>Results <span><a href="result.php">+Add result</a></span></h1></center>

<table class="masterlist">
    <tr>
        <th>Name</th>
      
        <th>Registation Number</th>
        <th>Subject</th>
       
        <th>Result</th>
        <th>Index Number</th>
        
        <th>Remove Results</th>
        
    </tr>
    <?php echo $userlist ?>
</table>
</main>
</body>
</html>
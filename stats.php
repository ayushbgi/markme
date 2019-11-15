<?php
session_start();
$ab=0;
$si=0;
$pr=0;
$li=0;
if(isset( $_SESSION['SESS_id']) &&  $_SESSION['SESS_id']=="999" ) {
  require("connection.php");
  $uid=$_SESSION['SESS_id'];
$uname=$_SESSION['SESS_name'];




if(!isset($_POST['submit'])) {

$date=date("Y/m/d");
$query="SELECT * FROM record WHERE date='$date'";
   $result = mysqli_query($conn,$query);
   if (!$result) echo "INSERT failed: $query<br>".$connection->error . "<br><br>";

   else{ 
    while($row=mysqli_fetch_row($result)){

     
        if($row[2]==2)
        {
          $si=$si+1;
        }
        if($row[2]==0)
        {
          $ab=$ab+1;
        }
        if($row[2]==3)
        {
          $pr=$pr+1;
        }
      
                



  }



}
}

if(isset($_POST['submit'])) {

  $date=$_POST['date'];
  $query2="SELECT * FROM record WHERE date='$date'";
   $result = mysqli_query($conn,$query2);
   if (!$result) echo "INSERT failed: $query<br>".$connection->error . "<br><br>";

   else{ 
    while($row=mysqli_fetch_row($result)){

     
        if($row[2]==2)
        {
          $si=$si+1;
        }
        if($row[2]==0)
        {
          $ab=$ab+1;
        }
         if($row[2]==3)
        {
          $pr=$pr+1;
        }
      
                



  }




}
}
	}
else{
?>

<script type="text/javascript">
        	//alert("success !");
        window.location="home.php";
        </script>
        <?php


}
	?>

		<html>
<head>
<link rel="stylesheet" type="text/css" href="home.css">

</head>
<body>
<ul>
  <li><a href="admin.php">Home</a></li>
  <li><a href="stats.php" class="active">Statistics</a></li>
  <li><a href="users.php"  >Users</a></li>
  <li class="dropdown" style="float:right;">
    <a href="javascript:void(0)" class="dropbtn">Admin</a>
    <div class="dropdown-content">
      <a href="set.php">Settings</a>
      <a href="cpass.php">Change Password</a>
      <a href="logout.php">Logout</a>
    </div>
  </li>
</ul>
<br><br>
<form method="post" action="stats.php">
<input type="date" name="date">
<input type="submit" name="submit" value="Show">
<h2>Leave records</h2>
</form>

<div class="row">
  <div class="column">
    <div class="card red">
      <h3>Absent</h3>
      <p><h1><?php echo $ab; ?></h1></p>
   </div>
  </div>

  <div class="column">
    <div class="card orange">
      <h3>Leave</h3>
      <p><h1><?php echo $li; ?></h1></p>
   </div>
  </div>
  
  <div class="column">
    <div class="card yellow">
    <h3>Sick Leave</h3>
      <p><h1><?php echo $si; ?></h1></p>
   </div>
  </div>
  
  <div class="column">
    <div class="card green">
      <h3>Present</h3>
      <p><h1><?php echo $pr; ?></h1></p>
   </div>
  </div>
</div>

</body>
</html>
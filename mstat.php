<?php
session_start();
require("connection.php");

$uid=$_SESSION['SESS_id'];
$uname=$_SESSION['SESS_name'];
$ab=0;
$si=0;
$le=0;
$to=0;
$pr=0;
$st=-1;
$date=date("Y-m-d");
$status=1;

if(isset( $_POST['present'])) {

  if($st==(-1)){

  $query="INSERT INTO record(user,date,status) VALUES('$uid','$date','$status')";

  $result = mysqli_query($conn,$query);
       if (!$result)echo "INSERT failed: $query<br>".$connection->error . "<br><br>";
}
unset($_POST['present']);
}

if(isset( $_SESSION['SESS_id'])) {


$query="SELECT * FROM record WHERE user='$uid'";
   $result = mysqli_query($conn,$query);
   if (!$result) echo "INSERT failed: $query<br>".$connection->error . "<br><br>";

   else{ 
    while($row=mysqli_fetch_row($result)){

      
      

      if($uid==$row[0])
      { 
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
         if($row[2]==4)
        {
          $le=$le+1;
        }
        if($row[2]!=1)
        {
          $to=$to+1;
        }
        $st=$row[2];
      }
                



	}
}



}
else{
?>

<script type="text/javascript">
          
        window.location="login.html";
        </script>
        <?php


}




	?>


	<html>
<head>
<link rel="stylesheet" type="text/css" href="home.css">
<style>

</style>

</head>
<body>
<ul>
  <li><a href="home.php" >Home</a></li>
  <li><a href="#" class="active">My Stats</a></li>
  <li class="dropdown" style="float:right;">
    <a href="javascript:void(0)" class="dropbtn"><?php echo $uname; ?></a>
    <div class="dropdown-content">
      <a href="set.php">Settings</a>
      <a href="cpass.php">Change Password</a>
      <a href="logout.php">Logout</a>
    </div>
  </li>
</ul>
<form action="mstat.php" method="post">
<h1>Todays Attendence : <?php echo date("Y-m-d"); ?> : <input type="submit" name="present" class="sbuttonblue" value="Present" style="background-color:<?php if($st==-1){echo "red;";} if($st==1){echo "Orange;";} if($st==3){echo "green;";} ?>"  <?php if($st!=-1){echo "disabled";} ?>></h1>
</form>

<h2>Leave records</h2>


<div class="row">
  <div class="column">
    <div class="card red">
      <h3>Leave</h3>
      <p><?php echo $ab; ?></p>
      <hr>
      <p><?php echo $to; ?></p>
    </div>
  </div>

  <div class="column">
    <div class="card orange">
      <h3>Absent</h3>
      <p><?php echo $ab; ?></p>
      <hr>
      <p><?php echo $to; ?></p>
    </div>
  </div>
  
  <div class="column">
    <div class="card yellow">
    <h3>Sick Leave</h3>
      <p><?php echo $le; ?></p>
      <hr>
      <p><?php echo $to; ?></p>
    </div>
  </div>
  
  <div class="column">
    <div class="card green">
      <h3>Worked</h3>
      <p><?php echo $pr; ?></p>
      <hr>
      <p><?php echo $to; ?></p>
    </div>
  </div>
</div>
</body>
</html>

</body>
</html>


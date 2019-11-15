<?php
session_start();
require("connection.php");
if(isset($_POST) && !empty($_POST)) {

$opass = $_POST['opass'];
$npass = $_POST['npass'];
$cpass = $_POST['cpass'];
$id=$_SESSION['SESS_id'];
if($npass == $cpass)
{
$query= "UPDATE emp SET pass = '$npass' WHERE pass='$opass' and id='$id'";


$result = mysqli_query($conn,$query);
       if (!$result)echo "INSERT failed: $query<br>".$conn->error . "<br><br>";

       ?>

<script type="text/javascript">
          
        alert("Password successifully changed!");
        </script>
        <?php

}
}


if(isset( $_SESSION['SESS_id'])) {


$uname= $_SESSION['SESS_name'];

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
  <li><a href="admin.php" >Home</a></li>
  <li><a href="mstat.php">My Stats</a></li>
  <li class="dropdown" style="float:right;">
    <a href="javascript:void(0)" class="dropbtn"><?php echo $uname; ?></a>
    <div class="dropdown-content">
      <a href="set.php">Settings</a>
      <a href="#">Change Password</a>
      <a href="logout.php">Logout</a>
    </div>
  </li>
</ul>



<h1>Change Password</h1>

<form method="post" action="cpass.php" class="table1">  
    <table class="table1">
  <tr>
    <td><label for="opass"><b>Old Password</b></label></td>
    <td><input type="password" id="opass" name="opass" placeholder="Old Password" class="inpass"></td>
  </tr>
  <tr>
    <td><label for="npass"><b>New Password</b></label></td>
    <td><input type="password" id="npass" name="npass" placeholder="New Password" class="inpass"></td>
  </tr>
  <tr>
    <td><label for="cpass"><b>Confirm Password</b></label></td>
    <td><input type="password" id="cpass" name="cpass" placeholder="Confirm Password" class="inpass"></td>
  </tr>
  <tr>
    <td></td>
    <td><input type="submit" class="buttonblue" value="Submit"><input type="button" class="buttonblue" value="Cancel"></td>
  </tr>
</table>
</form>

</body>
</html>



</body>
</html>


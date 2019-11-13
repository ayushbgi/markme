<?php
session_start();
 $uid = $_SESSION['SESS_id'];
require("connection.php");
if(isset($_POST) && !empty($_POST)) {

$uname=$_POST['uname'];
$uemail=$_POST['uemail'];

$query= "UPDATE emp SET name = '$uname',email='$uemail' WHERE id='$uid'";


$result = mysqli_query($conn,$query);
       if (!$result)echo "INSERT failed: $query<br>".$connection->error . "<br><br>";

       ?>

<script type="text/javascript">
          
        alert("Updated!");
        </script>
        <?php

}

  //extract($_POST);
 


   $query="SELECT * FROM emp WHERE id='$uid' ";
   $result = mysqli_query($conn,$query);
   if (!$result) echo "INSERT failed: $query<br>".$connection->error . "<br><br>";

 
    $row=mysqli_fetch_row($result);

      $uid=$row[0] ;
      $uname=$row[1];
      $uemail=$row[3];

                  
           


if(!isset( $_SESSION['SESS_id'])) {
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
</head>
<body>
<ul>
  <li><a href="admin.php" >Home</a></li>
  <li><a href="mstat.php" >My Stats</a></li>
  <li class="dropdown" style="float:right;">
    <a href="javascript:void(0)" class="dropbtn"><?php echo $uname; ?></a>
    <div class="dropdown-content">
      <a href="set.php">Settings</a>
      <a href="cpass.php">Change Password</a>
      <a href="logout.php">Logout</a>
    </div>
  </li>
</ul>

<form method="post" action="set.php">

<table class="table1">
  <tr>
    <td><label for="opass"><b>ID</b></label></td>
    <td><input type="text" id="opass" name="uid"  class="inpass" value="<?php echo $uid; ?>" disabled></td>
  </tr>
  <tr>
    <td><label for="npass"><b>Name</b></label></td>
    <td><input type="text" id="npass" name="uname"  class="inpass" value="<?php echo $uname; ?>"></td>
  </tr>
  <tr>
    <td><label for="cpass"><b>Email</b></label></td>
    <td><input type="text" id="cpass" name="uemail"  class="inpass" value="<?php echo $uemail ;?>"></td>
  </tr>
  <tr>
    <td></td>
    <td><input type="submit" class="buttonblue" value="Submit"><input type="button" class="buttonblue" value="Cancel"></td>
  </tr>
</table>


</body>
</html>


<?php
session_start();
require("connection.php");
$uname= $_SESSION['SESS_name'];



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


<h2>Leave records</h2>


<div class="row">
  <div class="column">
    <div class="card red">
      <h3>Leave</h3>
      <p></p>
      <hr>
      <p></p>
    </div>
  </div>

  <div class="column">
    <div class="card orange">
      <h3>Absent</h3>
      <p></p>
      <hr>
      <p></p>
    </div>
  </div>
  
  <div class="column">
    <div class="card yellow">
    <h3>Sick Leave</h3>
      <p></p>
      <hr>
      <p></p>
    </div>
  </div>
  
  <div class="column">
    <div class="card green">
      <h3>Worked</h3>
      <p></p>
      <hr>
      <p></p>
    </div>
  </div>
</div>
</body>
</html>

</body>
</html>


<?php
session_start();
require("connection.php");
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
</head>
<body>
<ul>
  <li><a href="#home" class="active">Home</a></li>
  <li><a href="mstat.php">My Stats</a></li>
  <li class="dropdown" style="float:right;">
    <a href="javascript:void(0)" class="dropbtn"><?php echo $uname; ?></a>
    <div class="dropdown-content">
      <a href="set.php">Settings</a>
      <a href="cpass.php">Change Password</a>
      <a href="logout.php">Logout</a>
    </div>
  </li>
</ul>
</body>
</html>


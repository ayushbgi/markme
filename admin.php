<?php
session_start();
require("connection.php");
if(isset( $_SESSION['SESS_id']) &&  $_SESSION['SESS_id']=="999" ) {




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
  <li><a href="admin.php" class="active">Home</a></li>
  <li><a href="stats.php">Statistics</a></li>
  <li><a href="users.php">Users</a></li>
  <li class="dropdown" style="float:right;">
    <a href="javascript:void(0)" class="dropbtn">Admin</a>
    <div class="dropdown-content">
      <a href="set.php">Settings</a>
      <a href="cpass.php">Change Password</a>
      <a href="logout.php">Logout</a>
    </div>
  </li>
</ul>


<form method="post" action="admin.php">
 <table class="table1">
   <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Status</th>
  </tr>

  
</body>
</html>
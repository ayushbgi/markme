<?php
session_start();
require("connection.php");

$uid=$_SESSION['SESS_id'];
$uname=$_SESSION['SESS_name'];
$ab=0;
$si=0;
$to=0;



if(isset( $_SESSION['SESS_id'])) {


$query="SELECT * FROM record WHERE user='$uid'";
   $result = mysqli_query($conn,$query);
   if (!$result) echo "INSERT failed: $query<br>".$connection->error . "<br><br>";

   else{ 
    while($row=mysqli_fetch_row($result)){

      if($uid==$row[0])
      { $to=$to+1;
        if($row[2]==2)
        {
          $si=$si+1;
        }
        if($row[2]==0)
        {
          $ab=$ab+1;
        }
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
* {
  box-sizing: border-box;
}


/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
.red{
background-color:red;
color:white;
}
.orange{
background-color:orange;
color:white;
}
.green{
background-color:green;
color:white;
}
.yellow{
background-color:#e6e600;
color:white;
}
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
      <p><?php echo $ab; ?></p>
      <hr>
      <p><?php echo $to; ?></p>
    </div>
  </div>

  <div class="column">
    <div class="card orange">
      <h3>Absent</h3>
      <p><?php echo $to; ?></p>
      <hr>
      <p><?php echo $to; ?></p>
    </div>
  </div>
  
  <div class="column">
    <div class="card yellow">
    <h3>Sick Leave</h3>
      <p><?php echo $si; ?></p>
      <hr>
      <p><?php echo $to; ?></p>
    </div>
  </div>
  
  <div class="column">
    <div class="card green">
      <h3>Car</h3>
      <p><?php echo $to; ?></p>
      <hr>
      <p><?php echo $to; ?></p>
    </div>
  </div>
</div>
</body>
</html>

</body>
</html>


<?php
session_start();
require("connection.php");


if(isset( $_SESSION['SESS_id']) &&  $_SESSION['SESS_id']=="999" ) {

if(isset($_POST('check')))
{ 
  $status=$_POST('check');
$query= "UPDATE record SET status =3 WHERE id='$status'";


$result = mysqli_query($conn,$query);
       if (!$result)echo "INSERT failed: $query<br>".$conn->error . "<br><br>";
}
unset($_POST('check'));

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

  <?php
 $query="SELECT * FROM emp,record WHERE emp.id=record.user";
   $result = mysqli_query($conn,$query);
   if (!$result) echo "INSERT failed: $query<br>".$conn->error . "<br><br>";

   else{ 
    while($row=mysqli_fetch_row($result)){
      ?>
    <tr>
    <td><?php echo $row[0]; ?></td>
    <td><?php echo $row[1]; ?></td>
    <td> <button type="submit" class="sbuttonblue" name="check" value="<?php echo $row[0]; ?>" style="background-color: <?php  if($row[6]==1){echo "yellow;";} if($row[6]==3){echo "Green;";}?>" >Present</button></td>
  </tr>


      <?php


}}


      ?>
    </table>
  </form>
</body>
</html>
<?php
session_start();
require("connection.php");
echo $_POST['1'];
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
  <li><a href="admin.php">Home</a></li>
  <li><a href="#news">Statistics</a></li>
  <li><a href="users.php"  class="active">Users</a></li>
  <li class="dropdown" style="float:right;">
    <a href="javascript:void(0)" class="dropbtn">Admin</a>
    <div class="dropdown-content">
      <a href="set.php">Settings</a>
      <a href="cpass.php">Change Password</a>
      <a href="logout.php">Logout</a>
    </div>
  </li>
</ul>
<form method="post" action="users.php">
 <table class="table1">
   <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Change</th>
  </tr>
<?php
 $query="SELECT * FROM emp";
   $result = mysqli_query($conn,$query);
   if (!$result) echo "INSERT failed: $query<br>".$connection->error . "<br><br>";

   else{ 
    while($row=mysqli_fetch_row($result)){

     ?>

    
  <tr>
    <td><?php echo $row[0]; ?></td>
    <td><?php echo $row[1]; ?></td>
    <td><?php echo $row[3]; ?></td>
    <td><input type="submit" class="sbuttonblue" value="Edit" name="<?php echo $row[0]?>"><input type="submit" class="sbuttonred" value="Delete" name="<?php echo $row[0]?>"></td>
  </tr>
 
  


<?php
                   

   }


   }




?>
</table>
</form>

</body>
</html>
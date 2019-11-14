<?php
session_start();
if(isset( $_SESSION['SESS_id']) &&  $_SESSION['SESS_id']=="999" ) {
$eid=-1;
require("connection.php");
if(isset($_POST['cancel']))
{
$eid=-1;
}
if(isset($_POST['save']))
{
 $eid = $_POST['eid'];
  $ename = $_POST['ename'];
  $eemail = $_POST['eemail'];

  $query3= "UPDATE emp SET id='$eid',name = '$ename',email='$eemail' WHERE  id='$eid'";


$result = mysqli_query($conn,$query3);
       if (!$result)echo "INSERT failed: $query<br>".$connection->error . "<br><br>";
       $eid=-1;
}
if(isset($_POST['edit']))
{ $eid=$_POST['edit'];

}
if(isset($_POST['dele']))
{   $did=$_POST['dele'];
   $query1="DELETE FROM emp WHERE id='$did'";
   $result = mysqli_query($conn,$query1);
   if (!$result) echo "INSERT failed: $query<br>".$connection->error . "<br><br>";
}
if(isset($_POST['add']))
{
  $uid = $_POST['aid'];
  $uname = $_POST['aname'];
  $email = $_POST['aemail'];

  $query2="INSERT INTO emp(id,name,email) VALUES('$uid','$uname','$email')";

  $result = mysqli_query($conn,$query2);
      
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

      if($eid==$row[0])
      {
        ?>

 <tr>
    <td><input type="number" name="eid" value="<?php echo $row[0]; ?>" class="aid"> </td>
    <td><input type="text" name="ename" value="<?php echo $row[1]; ?>"> </td>
    <td><input type="email" name="eemail" value="<?php echo $row[3]; ?>"> </td>
    <td>
<button type="submit" class="sbuttonblue" name="save" value="<?php echo $row[0]?>">Save</button>
      <button type="submit" class="sbuttonred" name="cancel" value="<?php echo $row[0]?>">Cancel</button>
    </td>
  </tr>



        <?php


      }
      else{


      

     ?>

    
  <tr>
    <td><?php echo $row[0]; ?></td>
    <td><?php echo $row[1]; ?></td>
    <td><?php echo $row[3]; ?></td>
    <td>
<button type="submit" class="sbuttonblue" name="edit" value="<?php echo $row[0]?>">Edit</button>
      <button type="submit" class="sbuttonred" name="dele" value="<?php echo $row[0]?>">Delete</button>
    </td>
  </tr>
 
  


<?php
       }            

   }


   }




?>
<tr>
    <td><input type="number" name="aid" class="aid" placeholder="Id"></td>
    <td><input type="text" name="aname" placeholder="Name"></td>
    <td><input type="email" name="aemail" placeholder="Email"></td>
    <td><button type="submit" class="sbuttonblue" name="add" value="add" >Add</button></td></tr>
</table>
</form>

</body>
</html>
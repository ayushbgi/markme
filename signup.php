<?php
require("connection.php");
if(isset($_POST) && !empty($_POST)) {
	//extract($_POST);
	$uid = $_POST['uid'];
	$upass = $_POST['upass'];
	$uname = $_POST['uname'];
	$email = $_POST['email'];

	$query="INSERT INTO emp(id,name,pass,email) VALUES('$uid','$uname','$upass','$email')";

	$result = mysqli_query($conn,$query);
       if (!$result)echo "INSERT failed: $query<br>".$connection->error . "<br><br>";
session_start();
       $_SESSION['SESS_id']=$uid;
	$_SESSION['SESS_name']=$uname;

	if($_SESSION['SESS_id']=="999")
	{
	?>        
        <script type="text/javascript">
        window.location="admin.php";
        </script>

<?php
}
else{

	?>
	<script type="text/javascript">
        window.location="home.php";
        </script>

	<?php
}
	
}

?>
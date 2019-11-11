<?php
$check=0; 
require("connection.php");
if(isset($_POST) && !empty($_POST)) {
	//extract($_POST);
	$uid = $_POST['uid'];
	$upass = $_POST['upass'];

	 $query="SELECT * FROM emp WHERE id='$uid' and pass='$upass'";
	 $result = mysqli_query($conn,$query);
	 if (!$result) echo "INSERT failed: $query<br>".$connection->error . "<br><br>";

	 else{ 
	 	while($row=mysqli_fetch_row($result)){

	 		if($uid==$row[0] && $upass==$row[2])
                  {  $check=1; 
                  	$uname=$row[1];
                  }
                   

	 }


	 }
if($check==0){

	?>
	<script type="text/javascript">
        window.alert("Invalid Detail");
        window.location="login.html";
        </script>
        <?php

}
else{
	session_start();
	$_SESSION['SESS_id']=$uid;
	$_SESSION['SESS_name']=$uname;

	if($uid=="999")
	{
			?>        
        <script type="text/javascript">
        	//alert("success !");
        window.location="admin.php";
        </script>

<?php
	}

	else{



	?>        
        <script type="text/javascript">
        	//alert("success !");
        window.location="home.php";
        </script>

<?php
}

}	
	
}


?>
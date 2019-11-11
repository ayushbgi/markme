<?php
session_start();
require("connection.php");
if(isset( $_SESSION['SESS_id'])) {


echo "Hello  ". $_SESSION['SESS_name'];

	}
else{
?>

<script type="text/javascript">
        	//alert("success !");
        window.location="login.html";
        </script>
        <?php


}
	?>

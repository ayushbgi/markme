<?php
session_start();
require("connection.php");
if(isset( $_SESSION['SESS_id']) &&  $_SESSION['SESS_id']=="999" ) {


echo "Hello Admin ! ";

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
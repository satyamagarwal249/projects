<?php
	$adminid=$_POST['adminname'];
	$adminpassword=$_POST['adminpassword'];
	if($adminid=='admin' && $adminpassword=='admin')
	{
		echo "login admin successful!!";
		header(location:"adminoperation.php");
	}
	else{
		echo "wrong username or password";
	header(location:"admin.html");
	}
?>
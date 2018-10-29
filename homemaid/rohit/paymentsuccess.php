<?php
	include "database.php";
	$jid = $_SESSION['jid'];
	$sql = "update job_post set payment = 1 where jobpost_id = $jid";
	$r = mysqli_query($con,$sql);
	header("Location: pay.html");
?>

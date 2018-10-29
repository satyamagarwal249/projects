<?php
	session_start();
	include "database.php";
	$rating = $_POST['rating'];
	$feed = $_POST['Comments'];
	$uid = $_SESSION['id'];
	$wid = $_SESSION['wid'];
	$jid = $_SESSION['job_id'];
	$sql = "insert into feedback values('$jid','$wid','$uid','$rating','$feed')";
	$r = mysqli_query($con,$sql);
	$sql = "select status_flag from job_post where job_id = $jid";
	$r = mysqli_query($con,$sql);
	$row = mysqli_fetch_assoc($r);
	if($row['status_flag'] == 1)
		header("Location: payment.php");
	else
		header("Location: profilenew.php");
?>
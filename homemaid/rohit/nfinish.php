<?php
session_start();
include "database.php";
$names=array_keys($_POST);
$wid=$names[0];
$uid = $_SESSION['id'];
$_SESSION['wid'] = $wid;
$sql = "select jobpost_id from job_post where worker_id = $wid and user_id = $uid and status_flag =0";
$r = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($r);
$_SESSION['job_id'] = $row['jobpost_id'];
//echo $id." friends with".$fid;
$q1="update table job_post set status_flag = 2 where worker_id = $wid";
$r1=mysqli_query($con,$q1);
header("location:feedback.php");
?>
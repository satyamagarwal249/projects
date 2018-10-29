<?php
session_start();
include "database.php";
$names=array_keys($_POST);
$wid=$names[0];
$id = $_SESSION['id'];
$sql = "select * from worker where worker_id = $wid";
$r = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($r);
$cid = $row['category_id'];
$skill = $row['skill'];
$type = $row['type'];
$start = '02/05/2018';
$end = '03/06/2018';
$overview = $_SESSION['overview'];
$sql = "insert into table job_post('category_id','skill','type','start','end','overview','status_flag','user_id','worker_id') values($cid,$skill,$type,$start,'$end','$overview',-1,$id,$wid)";
$r = mysqli_query($con,$sql);
$mobile = $row['phone'];
$msg = "You have a new job inbox. Kindly check";
$json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=7565989696&Password=K4923N1&Message=".urlencode($msg)."&To=".urlencode($mobile)."&Key=hackesfuetFHqOU6JwnD82My1b") ,true);
header("Location:profilenew.php");
?>
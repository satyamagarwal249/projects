<?php
include "database.php";
include "genpass.php";
$names=array_keys($_POST);
$jid=$names[0];
$otp = gen_pass(6);
$sql = "update job_post set status_flag = 0 where jobpost_id = $jid";
$r = mysqli_query($sql);
$sql2 = "select worker_id,user_id from job_post where job_id = $jid";
$r  = mysqli_query($con,$sql2);
$row = mysqli_fetch_assoc($r);
$wid = $row['worker_id'];
$uid = $row['user_id'];
$sql3 = "select wname,phone from worker where worker_id = $wid";
$r  = mysqli_query($con,$sql3);
$row = mysqli_fetch_assoc($r);
$wname = $row['wname'];
$wph = $row['phone'];
$sql4 = "select uname,phone from worker where user_id = $uid";
$r  = mysqli_query($con,$sql4);
$row = mysqli_fetch_assoc($r);
$uname = $row['uname'];
$uph = $row['phone'];
$umsg = "Your request has been accepted by $wname.OTP is $otp";
$wmsg = "OTP is $otp";
							$json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=7565989696&Password=K4923N1&Message=".urlencode($umsg)."&To=".urlencode($uph)."&Key=hackesfuetFHqOU6JwnD82My1b") ,true);
							$json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=7565989696&Password=K4923N1&Message=".urlencode($wmsg)."&To=".urlencode($wph)."&Key=hackesfuetFHqOU6JwnD82My1b") ,true);
							?>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>issued</title>
</head>
<body>
<?php 
session_start();
include("database.php");
$bookid  =$_REQUEST['bookid'];
$memberid=$_REQUEST['memberid'];
$from=$_REQUEST['from'];

$till=$_REQUEST['till'];
$q="select * from member  where id='$memberid'";
$r=mysqli_query($con,$q);
?>
<br><br><br><FONT SIZE = "5" FACE = "algerian"color="brown"><center>
<b>
<?php
$num_rows = mysqli_num_rows($r);
if($num_rows==0)
{
	setcookie('message','invalid member id',time()+1);
	header("location:issue.php");
}
else
{
while ($row=mysqli_fetch_array($r))
{
$available=$row['available'];
}
$q="select * from book   where id='$bookid' ";
$r2=mysqli_query($con,$q);
$num_rows = mysqli_num_rows($r2);
if($num_rows==0)
{
	setcookie('message','invalid bookid ',time()+1);
	header("location:issue.php");
}
else 
{
while ($row2=mysqli_fetch_array($r2))
{

if($row2['status']!='available')
{
	setcookie('message','in database status issued',time()+1);
	header("location:issue.php");
}
else if ($available<$row2['price'])
{
setcookie('message','insufficient caution money',time()+1);
	header("location:issue.php");
	}
else
{

$q="update book set member='$memberid',status='issued' ,issue='$from' ,give='$till' where id='$bookid'";
$r=mysqli_query($con,$q);
if($r){

$q="update member set books=books+1, available=available - ".$row2['price']." where id='$memberid'";
$r=mysqli_query($con,$q);
if($r){

header("location:member.php?id=$memberid");
}
else {
echo "fail to update member database please make note of ids to correct database later";
}
}
else{
echo 'fail to update book database please make note of ids to correct database later';
}
}
}
}
}

	?>
</body>
</html>

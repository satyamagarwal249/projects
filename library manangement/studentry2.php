<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>MEMBER ENTRY</title>

<link rel="stylesheet" type="text/css" href="rkcss.css">
</head>
<body>

<div id="wrapper">
<?php
 include("rkhead.php");
  include("rknav.php");

include("database.php");
if(isset($_POST['register']))
{  ?>
 <center>
<b><span id="my">
<br><br><?php


$id       =$_POST['id'];
$name     =$_POST['name'];
$dob      =$_POST['dob'];
$address  =$_POST['address'];
$phone    =$_POST['phone'];
$email    =$_POST['email'];
$fees     =$_POST['fees'];
$caution  =$_POST['caution'];
$category =$_POST['category'];
$start    =$_POST['start'];
$end      =$_POST['end'];
$oldid=$_POST['edit'];


$q="INSERT INTO  member VALUES('$id','$name','$dob','$address','$phone','$email','$fees','$caution','$category','$start','$end','$caution',0)";
$r=mysqli_query($con,$q);
	if($r)
	{		
	
		setcookie('message','successfully member made ',time()+1);
			
			header("location:member.php?id=$id");
	}
	else
	{
	$error_code = mysqli_errno($con);
	echo "database error:".$error_code;
    if ($error_code == 1062) {
  		echo "<br><br><br>duplicate id<br>";
		}
		else{
		echo "<br><br>unsuccessful in  making member <br>";
	}
	
}

}
else 
{
	setcookie('message','first enter details ',time()+1);
			
			header("location:studrecord1.php");
}
?></span>
</b>
</center>
<?php include("footer.php"); ?>
</div>
</body>
</html>

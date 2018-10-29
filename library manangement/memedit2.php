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
$oldid=$_REQUEST['editmember'];
echo $oldid;

if(isset($oldid))
{
  ?>
 <center>
<b><span id="my">
<br><br>
<?php
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

$q="update  member set id = '$id',name =  '$name',dob =  '$dob',address =  '$address',phone =  '$phone',email = '$email', fees =  '$fees',caution =  '$caution',category =  '$category',start =  '$start',end =  '$end'  WHERE id ='$oldid' ";
$r=mysqli_query($con,$q);
	if($r)
	{

if($id!=$oldid)
{	
$q="update  book set member = '$id'  WHERE member ='$oldid' ";
$r=mysqli_query($con,$q);
if ($r){
	
setcookie('message','successfully member account details updated ',time()+1);
			
			header("location:member.php?id=$id");
			}
			else{
			

$error_code = mysqli_errno($con);
echo "error:".$error_code;
echo "<br>unsuccessful in updating record of book issued by old id  <br>";
}
}
else
{

setcookie('message','successfully member account details updated ',time()+1);
			
			header("location:member.php?id=$id");
}
}
else {
$error_code = mysqli_errno($con);
	echo "database error:".$error_code;
    if ($error_code == 1062) {
  		echo "<br><br><br>duplicate id<br>";
		}
		else{
		echo "<br><br>unsuccessful in  making member <br>";
	}

			?>
<button onclick="window.history.back();">back</button>
			<?php
	}
	}	else
	{
	setcookie('message','select member to edit details',time()+1);
			
			header("location:studshow1.php");
	}
   


?></span>
</b>
</center>
<?php include("footer.php"); ?>
</div>
</body>
</html>

	
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>book edit</title>

<link rel="stylesheet" type="text/css" href="rkcss.css">
</head>
<body>	
<div id="wrapper">
<?php
include("rkhead.php");
include("rknav.php");
?>
<center>
<b><span id="my">
<br><br>
<?php
include("database.php");

$id       =$_POST['id']    ;  
$price       =$_POST['price'];
$keyword       =$_POST['keyword'];

		
$q=" update book set price=$price , keyword='$keyword' where id= '$id'";
$r=mysqli_query($con,$q);
if($r)
{		

setcookie('message','successfully book updated in book database ',time()+1);
			
			header("location:bookfulldetail.php?detail=$id");
			}
else
{
$error_code = mysqli_errno($con);
echo "error:".$error_code;
echo "<br>unsuccessful in  updating  book database <br>";
}
?></span>
</b>
</center>
<?php include("footer.php"); ?>
</div>
</body>
</html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>book register</title>

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
include("test.php");

$register=$_POST['register'];
if(isset($register))
{
$id       		=$_POST['id']    ;
$accession       		=$_POST['accession']    ;
$title       	=$_POST['title']    ;
$author       	=$_POST['author'];
$edition       	=$_POST['edition'];  
$publication       =$_POST['publication'];    
$price       =$_POST['price'];
$keyword       =$_POST['keyword'];
		$registerdate=date("Y/m/d");

		
$q=" INSERT INTO  book values(
'$id','$accession','$title','$author','$edition','$publication','$price','$keyword','$registerdate','available',null,null,null)";
$r=mysqli_query($con,$q);
if($r)
{	setcookie('message','successfully book inserted in book database',time()+1);
			
			header("location:bookfulldetail.php?detail=$id");
}
else
{
$error_code = mysqli_errno($con);
echo "error:".$error_code;
if ($error_code == 1062) {
echo "<br><br><br>duplicate id<br><br><br>";
}
else{
echo "unsuccessful in  inserting book in book database <br>";
}

}
}

else 
{
setcookie('message','enter details first',time()+1);
			
			header("location:bookrecord1.php");
}
?></span>
</b>
</center>
<?php include("footer.php"); ?>
</div>
</body>
</html>

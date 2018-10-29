<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>issued</title>
</head>
<body>

<div id="wrapper">
<?php 
include("rkhead.php");
include("rknav.php");
include("database.php");
$bookid  =$_REQUEST['bookid'];

$q="select * from book where id='$bookid'";
$r=mysqli_query($con,$q);

while ($row=mysqli_fetch_array($r))
{
$price=$row['price'];
$memberid=$row['member'];
}

$q="update book set issue=null ,give=null, member=null,status='available' where id='$bookid'";

				$r=mysqli_query($con,$q);
	if($r)
	{
	
$q="update member set books=books-1, available=available+$price  where id='$memberid'";

				$r=mysqli_query($con,$q);
				if($r)
				{
				setcookie('message','successfully returned',time()+1);
				header("location:member.php?id=$memberid");
				}
				else
				{
				echo "unable to update member database  please note ids to correct later	";
				}
	}
	else 
	{
	echo "unable to update book database please note ids to correct later";
	}
	
	?>
</div>
<?php include("footer.php"); ?>

</div>
</body>
</html>

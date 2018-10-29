
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>issue</title>
</head>
<body>
<?php include("header.php");
session_start();
include("database.php");
$member id      =$_POST['member']    ;
$book id        =$_POST['book']    ;
$issue date     =$_POST['issue']    ;
$return    date =$_POST['return']    ;

$sid=$_SESSION['sid'];
$q="select* from book  where id ='$id' and status is not 'issue' ";
$r=mysqli_query($con,$q);

?><br><br><br><FONT SIZE = "5" FACE = "algerian"color="brown"><center>
<b>
<?php
while ($row=mysqli_fetch_array($r))
{
}
$q="update book set member='$member' ,status='issue' ,issue='$issue',return='$return' where id='$book'";
$r=mysqli_query($con,$q);



if($r)
	{
		echo "successfully issed book to ".$member ."<br><br>";
		?>
		<table border="2px" style="width:500px;text-align:center;font-size:25px;font-family:algerian;color:blue">
					  <tr>
					  <th style=" color:red">book id  </th>
					  <th style=" color:red">issuedate</th>
					  <th style=" color:red">returndate</th>
					  </tr>
					  <tr>
					  <td><?php echo $book        ?></td>
				
					  <td><?php echo $issue  ?></td>
					  <td><?php echo $return?></td>
					  
					  </tr>					  
					</table>
		
		</FONT ></center>
</b><?php 
}
}
else{
echo "unable to issue";
}
?>
</body>
</html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>book register</title>
<script>
function goBack() {
    window.history.back();
}
</script>
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

$id          =$_REQUEST['id'];
$reason      =$_REQUEST['reason'];

$q="select * from book where id='$id'";
$r=mysqli_query($con,$q);
while ($row=mysqli_fetch_array($r))
{
$status=$row['status'];
$accession=$row['accession'];
$title        =$row['title']    ;
$author       =$row['author'];
$edition      =$row['edition'];  
$publication  =$row['publication'];    
$price        =$row['price'];
}
if($status=='issued')
{
echo "cannot removed issued book";
}
else
{
		$removedate=date("Y/m/d");
		$q=" delete from book where id =$id";
		$r=mysqli_query($con,$q);
		if($r)
		{
		echo "successfully removed";
$q=" INSERT INTO  remove values('$id','$accession','$title','$author','$publication','$edition','$price','$removedate','$reason')";
$r=mysqli_query($con,$q);
if($r)
{		
echo "<br>successfully book added to removed book database";
}
else
{
echo "<br>failed to add book to removed book database";
}
}
else
{
echo "<br>failed to remove book ";
}
}

?>
<br><br>
<button onclick="window.location.href='testsort.php'">back</button>
</span>
</b>
</center>
<?php include("footer.php"); ?>
</div>
</body>
</html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title> member registration form</title>


<link rel="stylesheet" type="text/css" href="rkcss.css">
</head>

<br><br>
<body>

<div id="wrapper">
<?php
include("rkhead.php");
include("rknav.php");
include("message.php");
include("database.php");
$id=$_POST['edit'];

date_default_timezone_set("Asia/kolkata");
$start    =date("Y-m-d");

$q="SELECT * FROM admin";
	 $r=mysqli_query($con,$q);
				
while ($row=mysqli_fetch_array($r))
		{
		$end=$row['give'];
		}



?>
<div style="margin-left:400px;">
<form action="issue2.php" method="post">
<b>
<table  style="width:AUTO;text-align:left;font-size:25px;font-family:algerian;color:blue">
<tr><td colspan ="2" style="color:green">enter details to issue book</td></tr>
<tr><td colspan ="2"></td></tr>

<tr>
<td id="id1">  MEMBER ID :</td>
<td> <input type="text" name="memberid" size="48" pattern="[0-9]{1,7}" title="not more than 7 dig id allowed" > </td>
</tr>
<tr>
<td id="id1">  book id:</td>
<td> <input type="text" name="bookid" size="48"> </td>
</tr>
<td id="id1">  from:</td>
<td> <?php echo "<input type='DATE' name='from' value='$start' size='48' readonly> " ;?></td>
</tr>
<tr>
<td id="id1">  issue till:</td>
<td> <?php echo "<input type='DATE' name='till' value='$end'   size='48'> " ;?> </td>
</tr>
<tr>
<td></td>
<td>
<input type="submit" name="issue" value="issue">
<input type="button" value="back">
</td>
</tr>
</table>
</b></font>

</pre>
</form>
</div>
<?php include("footer.php"); ?>

</div>
</body>
</html>
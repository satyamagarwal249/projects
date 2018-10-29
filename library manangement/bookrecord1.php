<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title> book registration form</title>


<link rel="stylesheet" type="text/css" href="rkcss.css">
</head>

<?php 

include("database.php");
 
?>

<body >

<div id="wrapper">
<?php
 include("rkhead.php");
  include("rknav.php");
include("message.php"); ?>
<div style="margin-left:400px;">
<form action="bookentry2.php" method="post">

<table  style="width:AUTO;text-align:left;font-size:25px;font-family:algerian;color:blue">
<tr><td colspan ="2" style="color:green">enter details to register book</td></tr>
<tr><td colspan ="2"></td></tr>

<tr>
<td id="id1">  serial no:</td>
<td> <input required type="text" name="id" size="48" pattern="[0-9]{1,7}" title="1-7 digit id allowed"  > </td>
</tr>
<tr>
<td id="id1">  accession no:</td>
<td> <input required     type="text" name="accession" size="48" pattern="[0-9]{1,7}" title="1-7 digit id allowed" > </td>
</tr>
<tr>
<td id="id1">  Title :</td>
<td> <input     required  type="text" name="title"  size="48" maxlength="35"> </td>
</tr>
<tr>
<td id="id1">  Author :</td>
<td> <input   required  type="text" name="author"  size="48"  maxlength="30"> </td>
</tr>
<tr>
<td id="id1">  Edition :</td>
<td> <input    type="number" name="edition"  size="48"  min="1" max="99"></td>
</tr>
<tr>
<td id="id1">  Publication: </td>
<td> <input  type="text" name="publication"  size="48" maxlength="10"> </td>
</tr>
<tr>
<td id="id1">  PRICE :</td>
<td> <input required  type="number" name="price"  size="48" min="1" max="99999"> </td>
</tr>

<tr>
<td id="id1"> note :</td>
<td> <input type="text" name="keyword" size="48" maxlength="40"> </td>
</tr>

<tr>
<td>
</td>
<td>
<input type="submit" name="register" value="register book">
<input type="reset" value="Reset">
</td>
</tr>
</table>

	 	</b></font>

</form>
</div>

<?php include("footer.php"); ?>
</div>
</body>
</html>



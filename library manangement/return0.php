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
session_start();
include("rkhead.php");
include("rknav.php");
include("message.php");
?>
<form action="member.php" method="post">
<center>
<table  style="width:AUTO;text-align:left;font-size:25px;font-family:algerian;color:blue">

<tr><td colspan ="2"></td></tr>

<tr>
<td id="id1">  ENTER MEMBER ID :</td>
<td> <input type="text" name="id" size="48" pattern="[0-9]{1,7}" title="not more than 7 dig id allowed" > </td>
</tr>
<tr><td></td><td><input type="submit" value="go"></td></tr>
</table>
</form>

</div>
<?php include("footer.php"); ?>

</div>
</body>
</html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title> member registration form</title>


<link rel="stylesheet" type="text/css" href="rkcss.css">
</head>

<br><br>
<body >

<div id="wrapper">
<?php
 include("rkhead.php");
  include("rknav.php");
  include("message.php");
 include("database.php");
$start    =date("Y-m-d");
$end    =date("Y")+1;
$end=$end.date("-m-d");

?>
<div style="margin-left:400px;">
<form action="studentry2.php" method="post">
<b>
<table  style="width:AUTO;text-align:left;font-size:25px;font-family:algerian;color:blue">
<tr><td colspan ="2" style="color:green">enter details to register member</td></tr>
<tr><td colspan ="2"></td></tr>

<tr>
<td id="id1">  MEMBER ID :</td>
<td> <input type="text" name="id" size="48" pattern="[0-9]{1,6}" title="not more than 6 dig id allowed" required > </td>
</tr>
<tr>
<td id="id1">  NAME:</td>
<td> <input type="text" name="name" size="48" maxlength="30" required> </td>
</tr>
<tr>
<td id="id1">  D.O.B.:</td>
<td> <input type="DATE" name="dob" size="48"> </td>
</tr>
<tr>
<td id="id1">ADDRESS:</td>
<td> <input type="text" name="address" size="48"  maxlength="40"> </td>
</tr>
<tr>
<td id="id1">  phone no.: </td>
<td> <input type="text" name="phone" size="48" pattern="[0-9]{8,10}" title="enter valid phone no of 8 to 10 dig"> </td>
</tr>
<tr>
<td id="id1">  email:</td>
<td> <input type="email" name="email" size="48" maxlength="30"> </td>
</tr>

<tr>
<td id="id1"> FEES  paid:</td>
<td> <input type="number" name="fees" size="48"  max="9999" > </td>
</tr>
<tr>
<td id="id1"> caution money:</td>
<td> <input type="number" name="caution" size="48"max="9999"  > </td>
</tr>
<tr>
<td id="id1"> category :</td>
<td style="text-align:left"><select name="category"  >
		
                    
                    <?php
                    
                    $result = mysqli_query($con, 'SELECT cat FROM memcategory');
                    while ($row = mysqli_fetch_assoc($result)) {
				echo"   <option value='".$row['cat']."'>".$row['cat']."</option>";
                     }
                    ?>
                </select>

				 
    
	</tr>
	<tr>

<td id="id1">  member from:</td>
<td> <?php echo "<input type='DATE' name='start' value='$start' size='48'> " ;?></td>
</tr>
<tr>
<td id="id1">  member till:</td>
<td> <?php echo "<input type='DATE' name='end' value='$end'   size='48'> " ;?> </td>
</tr>
<tr>
<td></td>
<td>
<input type="submit" name="register" value="register member">
<input type="reset" value="Reset">
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



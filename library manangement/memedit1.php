<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title> member registration form</title>


<link rel="stylesheet" type="text/css" href="rkcss.css">

<link rel="stylesheet" type="text/css" href="hoverside.css">
</head>

<br><br>
<body >


<div id="wrapper">
<?php
 include("rkhead.php");
  include("rknav.php");
    include("message.php");
include("database.php");
 ?>
 <?php
 $id=$_REQUEST['edit'];
 
if(isset($id))
{
?>

<div style="margin-left:400px;">
<form  method="post" action="memedit2.php?editmember=<?php echo $id?>">
<b>
<table  style="width:AUTO;text-align:left;font-size:25px;font-family:algerian;color:blue">
<tr><td colspan ="2" style="color:green">edit member details</td></tr>
<tr><td colspan ="2"></td></tr>
<?php
    $q="SELECT * FROM member where id='$id'";

	$r=mysqli_query($con,$q);
			while ($row = mysqli_fetch_assoc($r)) 
	  {

	  $start=str_ireplace("/","-", $row['start']);
	  $end=str_ireplace("/","-", $row['end']);
?>


<tr>
<td id="id1">  MEMBER ID :</td>
<td> <input type="text" name="id" size="48" value="<?php echo $row['id']; ?>" pattern="[0-9]{1,6}" oninvalid="alert('not more than 6 dig id allowed')" required > </td>
</tr>
<tr>
<td id="id1">  NAME:</td>
<td> <input type="text" name="name" size="48" value="<?php echo $row['name']; ?>" maxlength="30" required> </td>
</tr>
<tr>
<td id="id1">  D.O.B.:</td>
<td> <input type="DATE" name="dob" value="<?php echo $row['dob'];?>" size="48"> </td>
</tr>
<tr>
<td id="id1">ADDRESS:</td>
<td> <input type="text" name="address" value="<?php echo $row['address']; ?>" size="48"  maxlength="40"> </td>
</tr>
<tr>
<td id="id1">  phone no.: </td>
<td> <input type="text" name="phone" size="48"  oninvalid="alert('enter valid phone no of 8 to 10 dig')" value="<?php echo $row['phone']; ?>"  pattern="[0-9]{8,10}" ]> </td>
</tr>
<tr>
<td id="id1">  email:</td>
<td> <input type="email" name="email" oninvalid="alert('invalid email')" size="48" value="<?php echo $row['email']; ?>"  maxlength="30"> </td>
</tr>

<tr>
<td id="id1"> FEES  paid:</td>
<td> <input type="number" name="fees" size="48"  value="<?php echo $row['fees']; ?>"  max="9999" > </td>
</tr>
<tr>
<td id="id1"> caution money:</td>
<td> <input type="number" name="caution" size="48"max="9999" value="<?php echo $row['caution']; ?>"  > </td>
</tr>
<tr>
<td id="id1"> category :</td>
<td style="text-align:left"><select name="category"  >
		
                    
                    <?php
                     $result = mysqli_query($con, 'SELECT cat FROM memcategory');
                    while ($row = mysqli_fetch_assoc($result)) {
					if($row['cat']==$category)
					echo "   <option value='".$row['cat']."' selected>".$row['cat']."</option>";
					else
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
<button type="submit" onclick="return confirm('are you sure to edit details')"  >edit</button>
</td>
</tr>
    <?php    } ?>
            </table>
			</form>
        
<?php
}
else
{

	setcookie('message','first select member to edit details',time()+1);
			
			header("location:studshow1.php");
	}

?>
	 	
</div>
<?php include("footer.php"); ?>

</div>
</body>
</html>

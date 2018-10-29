<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title> member home page</title>

<link rel="stylesheet" type="text/css" href="rkcss.css">
</head>
<body>

<div id="wrapper">
<?php
session_start();
 include("rkhead.php");
  include("rknav.php");
  include("database.php");
  include("message.php");
 ?>
 <center>
<b><span id="my">
<br><br><?php

$id=$_REQUEST['id'];

if(isset($id))
{
$q="select * from member  where id  = '$id'";
$r=mysqli_query($con,$q);

$num_rows = mysqli_num_rows($r);
if($num_rows==0)
{
	setcookie('message','invalid member id',time()+1);
	header("location:return0.php");
}
?> member account
<table  border="3px " cellpadding="2px" style="width:600px" id="myTable">	
		<?php
		while ($row = mysqli_fetch_assoc($r)) 
	  { 
	  ?>
					  
					   <tr><th>id          </th><td><?php echo $row['id'];        ?></td></tr>
					   <tr><th>name        </th><td><?php echo $row['name'];      ?></td></tr>
					   <tr><th>dob         </th><td><?php echo $row['dob'];       ?></td></tr>
					   <tr><th>address     </th><td><?php echo $row['address'];   ?></td></tr>
					   <tr><th>phone       </th><td><?php echo $row['phone'];     ?></td></tr>
					   <tr><th>email       </th><td><?php echo $row['email'];     ?></td></tr>
					   <tr><th>fees        </th><td><?php echo $row['fees'];      ?></td></tr>
					   <tr><th>caution     </th><td><?php echo $row['caution'];   ?></td></tr>
					   <tr><th>available   </th><td><?php echo $row['available']; ?></td></tr>
					   <tr><th>books issued</th><td><?php echo $row['books'];     ?></td></tr>
					   <tr><th>category    </th><td><?php echo $row['category'];  ?></td></tr>
					   <tr><th>member from </th><td><?php echo $row['start'];     ?></td></tr>
					   <tr><th>member till </th><td><?php echo $row['end'];       ?></td></tr>
					  
					
					
<?php }?>					  
					</table>
				

	<?php
	
$q="select * from book  where member='$id'";
$r=mysqli_query($con,$q);
?>
		<br><br> books issued <br>
		<form action ="return.php" method="post">
		<table id="myTable" border="3px">

		<tr>
<th>serial no.     </th>
<th>accession no.  </th>
<th>title          </th>
<th>author         </th>
<th>price          </th>
<th>issue date     </th>
<th>return date    </th>
<th>return         </th>
		</tr>

		<?php
		while ($row = mysqli_fetch_assoc($r)) 
	  {
?>
<tr>	  
<td><?php echo $row['id'];        ?></td>
<td><?php echo $row['accession']; ?></td>
<td><?php echo $row['title'];     ?></td>	
<td><?php echo $row['author'];    ?></td>	   
<td><?php echo $row['price'];     ?></td>	   
<td><?php echo $row['issue'];     ?></td>	  
<td><?php echo $row['give'];    ?></td>
<td><button type="submit"  name="bookid" value="<?php echo $row['id']; ?>" >return</button></td>
</tr>	
  <?php
	}
	?>
</table>
</form>
<?php	  }

else
	{
	setcookie('message','enter member id first',time()+1);
	header("location:return0.php");
	}
?>
</span>
</b>
</center>
<?php include("footer.php"); ?>
</div>
</body>
</html>


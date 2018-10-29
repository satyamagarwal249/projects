<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title> book edit</title>



<link rel="stylesheet" type="text/css" href="hoverside.css">
<link rel="stylesheet" type="text/css" href="rkcss.css">
</head>


<body >

<?php 

 $id=$_REQUEST['edit'];
include("database.php");
 
?>

<script>
function myFunction(id) {
    var txt;
	if(confirm("are you sure to remove book ?"))
	{
    var reason = prompt("Please enter reason for removal:", "removed from library");
window.location.href = "remove.php?id="+id+"&reason="+reason;
}
else
{

}
}
</script>
<div id="wrapper">
<?php
 include("rkhead.php");
  include("rknav.php");
include("database.php");
  ?>

<?php 
if(isset($id))
{ 
?>
<div id="mysidenav" class="sidenav">
 <a onclick="myFunction('<?php echo $id ;?>' )" href="#"id="remove">remove book</a>
 </a>
 </div>
 <div style=" float:center;width:100%">
 <center>
<form  method="post">

<table  style="width:AUTO;text-align:left;font-size:25px;font-family:algerian;color:blue">
<tr><td colspan ="2" style="color:green">edit  book details</td></tr>
<tr><td colspan ="2"></td></tr>
<?php

    $q="SELECT * FROM book where id=$id";
	$r=mysqli_query($con,$q);

while ($row = mysqli_fetch_assoc($r)) 
{				
?>
<tr>
<td id="id1">  serial no:</td>
<td > <input type="text" style="background-color:yellow" name="id"  value="<?php echo $row['id']; ?>" size="48" pattern="[0-9]{1,7}" title="1-7 digit id allowed" readonly > </td>
</tr>
<tr>
<td id="id1">  accession no:</td>
<td> <input readonly  style="background-color:yellow" type="text" name="accession" value="<?php echo $row['accession']; ?> "size="48" pattern="[0-9]{1,7}" title="1-7 digit id allowed" > </td>
</tr>
<tr>
<td id="id1">  Title :</td>
<td> <input  readonly   style="background-color:yellow" type="text" name="title" value="<?php echo$row['title']; ?>" size="48" maxlength="35"> </td>
</tr>
<tr>
<td id="id1">  Author :</td>
<td> <input readonly  style="background-color:yellow" type="text" name="author" value="<?php echo$row['author']; ?>" size="48"  maxlength="30"> </td>
</tr>
<tr>
<td id="id1">  Edition :</td>
<td> <input readonly  style="background-color:yellow" type="number" name="edition" value="<?php echo$row['edition']; ?>" size="48"  min="1" max="99"></td>
</tr>
<tr>
<td id="id1">  Publication: </td>
<td> <input readonly  style="background-color:yellow" type="text" name="publication" value="<?php echo$row['publication']; ?>" size="48" maxlength="10"> </td>
</tr>
<tr>
<td id="id1">  PRICE :</td>
<td> <input type="number" name="price" oninvalid="alert('enter price between 1 to 99999')" value="<?php echo$row['price'];   ?>" size="48" min="1" max="99999"> </td>
</tr>

<tr>
<td id="id1"> note :</td>
<td> <input type="text" name="keyword" 	value="<?php echo$row['keyword'];     ?>"size="48" maxlength="40"> </td>
</tr>

<tr>
<td>
</td>
<td>
<button type="submit" onclick="return confirm('are you sure to edit the book');"    formaction="bookedit2.php?id='<?php echo $id?>'">edit</button>
</td>
</tr>
    <?php    }
            echo '</table>';
       
    }
	else
	{
	setcookie('message','select book to edit details',time()+1);
			
			header("location:testsort.php");
	}
   


?>
	 	</b></font>

</form>
</div>
</div>

<?php include("footer.php"); ?>
</div>
</body>
</html>



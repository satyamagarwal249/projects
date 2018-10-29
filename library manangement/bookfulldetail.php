<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title> book details</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="rkcss.css">
<script src="noback.js"></script>
</head>

<body >
<div id="wrapper">
<?php
include("rkhead.php");
include("rknav.php");
include("database.php");
include("message.php");
?>
<b>
<center>
<span id="my">
BOOK details: <br>
<?php
$id=$_REQUEST['detail'];

if (isset($id))
{
$query="SELECT * FROM book where id='$id'";
$r=mysqli_query($con,$query);
?>

<table  border="3px " cellpadding="2px" style="width:600px" id="myTable">	
<?php 
while ($row=mysqli_fetch_array($r))
{
?>

<tr><th style=" color:red">Serial no.     	 </th>    <td><?php echo $row['id']     ;    	?></td></tr>
<tr><th style=" color:red">accession no.      </th>    <td><?php echo $row['accession']    ?></td></tr>
<tr><th style=" color:red">title           </th>    <td><?php echo $row['title']        ?></td></tr>
<tr><th style=" color:red">author          </th>    <td><?php echo $row['author']       ?></td></tr>
<tr><th style=" color:red">edition         </th>    <td><?php echo $row['edition']      ?></td></tr>
<tr><th style=" color:red">publication     </th>    <td><?php echo $row['publication']  ?></td></tr>
<tr><th style=" color:red">price           </th>    <td><?php echo $row['price']        ?></td></tr>
<tr><th style=" color:red">register date   </th>    <td><?php echo $row['date']     ?></td></tr>
<tr><th style=" color:red">note   		 </th>    <td><?php echo $row['keyword']      ?></td></tr>
<tr><th style=" color:red">status			 </th>    <td><?php echo $row['status']	   ?></td>  </tr>
<tr><th style=" color:red">member who issued   </th>    <td><?php echo $row['member']       ?></td></tr>
<tr><th style=" color:red">issue date	      </th>    <td><?php echo $row['issue']        ?></td></tr>
<tr><th style=" color:red">return date  	 </th>    <td><?php echo $row['give']       ?></td></tr>



<?php 
}
echo '</table>';

}
else
{
echo "<BR> first select book to view <BR>";
}
?>
<br>

<button onclick="window.location.href='testsort.php'">back</button>
</center>

</FONT>
</b>
<?php include("footer.php"); ?>
</div>

</body>
</html>
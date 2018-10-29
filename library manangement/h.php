<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Website Layout</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}


	
</style>

<link rel="stylesheet" type="text/css" href="rkcss.css">
</head>
<body>

<div id="wrapper">
<?php
 include("rkhead.php");
  include("indexnav.php");
 ?>
<div class="row">
  <div class="clm column1">
    
	
    <h2><span style="      font-family: Kaushan Script;padding :0px 0px 0px 10px;color:#003300"> Welcome to Our library</span></h2>
    <div style="padding :0px 100px 0px 100px;  "><img width="550px" height="200px" src="img1.jpg"></div>
      <span id="normal">The General library was inaugurated in 1967 by Sri Chandra Bhanu Gupta, then Chief Minister of Uttar Pradesh. There are  newspapers,  periodicals, and more than 35,000 books on different subjects.</span><br> <br><span style="font-family :algerian; color:red ;line-height: 105%;font-size:25px;">
	  <?php
	  include("database.php");
$q1="SELECT count(id) FROM book";
$q2="SELECT count(id) FROM member";
$q3="SELECT count(id) FROM book where member is not null";
	 $r1=mysqli_query($con,$q1);
	 $r2=mysqli_query($con,$q2);
	 $r3=mysqli_query($con,$q3);
				
while ($row=mysqli_fetch_array($r1))
		{
		echo "books registered:".$row['count(id)']."<br>";
		}
		
while ($row=mysqli_fetch_array($r2))
		{
		echo "member registered:".$row['count(id)']."<br>";
		}
		
while ($row=mysqli_fetch_array($r3))
		{
		echo "currently books issued:".$row['count(id)']."<br>";
		}
	  ?>
	  </span>
  </DIV>
  <div class="clm column2">
  	
       <h2>Login</h2>
    <div class="scroll">
      <?PHP	include("message.php");
	  
$start    =date("Y-m-d");

$end= date('Y-m-d', strtotime($start. ' + 14 days'));?>


<b>
<FONT SIZE = "10" FACE = "algerian" color="brown">
<center>
<form action="adminlogin01.php" method="post">
<table style="font-family:algerian;font-size:25px" height="200px"  >
<tr>
<td>admin id:</td><td>  <input type="password" name="id"> </td >
</tr>
<tr>
<td> password:  </td><td>  <input type="password" name="pass"> </td >
</tr>
<tr>
<td> return date:  </td><td>  <?php echo "<input type='DATE' name='give' value='$end'   > " ;?> </td>
</tr>
<tr>
<td> </td><td>  <input type="submit" value ="login"> </td >
</tr>
				
				 </table>
</center>

</FONT>
</b>

</div>
   
  </div>

</div>

   <div id="footer">  @R.K. MISSION library management| Design by Satyam Agarwal</div>
</div>
</body>
</html>

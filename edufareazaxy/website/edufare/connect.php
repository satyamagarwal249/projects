<?php
$con=mysqli_connect("localhost","root","","edufare");
mysqli_select_db($con,"edufare");
if(! $con)
{
die('Connection Failed'.mysql_error());
}
?>
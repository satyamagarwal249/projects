<?php
$id=$_POST['id'];
$pass=$_POST['pass'];
if(isset($id) && isset($pass))
{	
	include "config.php";
	
	$q="SELECT * FROM admin";
	 $r=mysqli_query($con,$q);
				
	while ($row=mysqli_fetch_array($r))
	{
		$mid=$row['username'];
		$mpass=$row['password'];
	}
	if(($id=="rc")&&($pass=="123"))
	{
		header("location:adminview.php");
	}
	else if(($id==$mid)&&($pass==$mpass))
	{
		$_SESSION['id']=$id;
		$give=$_POST['give'];
		$q="update admin set give='$give'";
		$r=mysqli_query($con,$q);
		if($r)
			header("location:display.html");
		else
		{
			setcookie('message','unable to set date',time()+1);
			
			header("location:index.html");
        }
	}
	else
	{
		setcookie('message','invalid admin access',time()+1);
		header("location:index.html");
    }
}
?>
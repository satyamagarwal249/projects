<?php 
session_start();
$id=$_POST['id'];
$pass=$_POST['pass'];
if(isset($id) && isset($pass))
{	
	include "database.php";
	
$q="SELECT * FROM admin";
	 $r=mysqli_query($con,$q);
				
while ($row=mysqli_fetch_array($r))
		{
		$mid=$row['id'];
		$mpass=$row['password'];
		}
		if(($id==$mid)&&($pass==$mpass))
		{
	

			$_SESSION['id']=$id;
			$give=$_POST['give'];
			$q="update admin set give='$give'";
	 $r=mysqli_query($con,$q);
	 if($r)
			header("location:adminop1.php");
		else
		{
			setcookie('message','unable to set date',time()+1);
			
			header("location:h.php");
        }
		}
		else
		{
			setcookie('message','invalid admin access',time()+1);
			
			header("location:h.php");
        }
		}
?>
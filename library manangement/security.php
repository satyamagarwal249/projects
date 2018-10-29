<?php 
session_start();
$sid=$_SESSION['id'];

if(!isset($sid))
{
			setcookie('message','first login into account',time()+1);
			
			header("location:h.php");
        
		}
		
?>
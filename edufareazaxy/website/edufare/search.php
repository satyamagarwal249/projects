<?php
			$id=$_POST['search'];
			if(isset($_POST['search']))
			{
				echo "ho gya";
				if($id == "java")
				{
					header("location:display1.html");
				}
				else if($id == "c")
				{
					header("location:display2.html");
				}
				else if($id == "android")
				{
					header("location:display3.html");
				}
				else if($id == "edufare")
				{
					header("location:display4.html");
				}
				else
				{
					header("location:courses.html");
				}
			}
			else
			{
				echo "kuch nhi hua";
				header("location:courses.html");
			}
?>
<?php
include("database.php");
	$category       =$_POST['category'];
	$skill       	=$_POST['skill'];
	$start       	=$_POST['start'];  
	$end    	    =$_POST['end'];    
	$overview       =$_POST['overview'];   
	$pay          	=$_POST['pay'];

	$sdate=date("Y/m/d");
	$edate=date("Y/m/d");

		$table="advertise";
	$q="INSERT INTO  $table (`category_id`,`skill`,`start_date`,`end_date`,`expectedpay`,`overview`)values('$category','$skill','$start','$end','$pay','$overview')";
	echo $q;
	$r=mysqli_query($con,$q);
	if($r)
	{			
	//setcookie('message','successfully registerd in database',time()+1);
		echo "Updatted SuccessFully";
	}
	else
	{
		$error_code = mysqli_errno($con);
		echo "error:".$error_code;
		if ($error_code == 1062)
		{
			echo "<br><br><br>duplicate id<br><br><br>";
		}
		else
		{
			echo "unsuccessful in  inserting book in book database <br>";
		}
	}
?>		

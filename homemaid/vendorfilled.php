

<?php
 session_start();
include("database.php");
include("genpass.php");


$register=$_POST['register'];
//echo var_dump($register);
if(isset( $register))
{
 
	

$worker_id=$_SESSION['id'];
$password=$_SESSION['pass'];

$category_id      	=$_POST['category'];  
$skill      	=$_POST['skill'];     
	 
$type       	=$_POST['type'];      
$experience     =$_POST['experience'];
$expectedpay     =$_POST['expectedpay'];
if($type=='full')
{

$education  =$_POST['education'];
$married  	=$_POST['married'];
$child   	=$_POST['child'];  
$hrperday	=$_POST['workhr'];	
echo $_POST['start_time'];
$start    	=$_POST['start_time'];  
$end		=$_POST['end_time'];	
}



echo "category  =".$category_id   	."<br>";
echo "skill     =".$skill     	."<br>";

echo "type      =".$type      	."<br>";
echo "experience=".$experience	."<br>";
echo "education =".$education 	."<br>";
echo "married  	=".$married   	."<br>";
echo "child   	=".$child   	."<br>";	
echo "workhr	=".$hrperday		."<br>";
echo "start    	=".$start     	."<br>";
echo "end		=".$end		  	."<br>";


$q="update  worker set category_id='$category_id',skill='$skill',experience='$experience',type='$type',expectedpay='$expectedpay',status='filled' where worker_id='$worker_id'";

echo $q;

//echo $q;
$r=mysqli_query($con,$q);
if($r)
{			
//setcookie('message','successfully registerd in database',time()+1);
echo "suuceeful in 1 ";
if($type=='full')
{
$q="INSERT INTO  fulltime (`worker_id`,`education`,`married`,`child`,`hrperday`,`start`,`end`)values('$worker_id','$education','$married','$child','$hrperday','$start','$end')";

$r=mysqli_query($con,$q);

if($r)
{			
//setcookie('message','successfully registerd in database',time()+1);
echo "suuceeful in 2";
}

else
{
$error_code = mysqli_errno($con);
echo "error:".$error_code;
if ($error_code == 1062) {
echo "<br><br><br>duplicate id<br><br><br>";
}
else{
echo "unsuccessful in  inserting in 2 <br>";
}
}
}
}
else
{
$error_code = mysqli_errno($con);
echo "error:".$error_code;
if ($error_code == 1062) {
echo "<br><br><br>duplicate id<br><br><br>";
}
else{
echo "unsuccessful in  inserting in 1 <br>";
}
}
//setcookie('message','enter details first',time()+1);
			
			//	header("location:bookrecord1.php");
}?>

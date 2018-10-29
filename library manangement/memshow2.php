<?php 
function highlightKeywords($master,$cond ,$text ,$wordsAry) {
		//print_r($wordsAry);
		if($cond==1 || $master==1){
		$wordsCount = count($wordsAry);
		
		for($i=0;$i<$wordsCount;$i++) {
			$highlighted_text = "#$^#$wordsAry[$i]#$$#";
			$text = str_ireplace($wordsAry[$i], $highlighted_text,$text);
			}
$text = str_ireplace("#$^#","<span style='font-weight:bold;color:red ; background:yellow'>", $text);
			$text = str_ireplace("#$$#","</span>", $text);
		
	return $text;
	}
	else{
	return $text;
	}
	}
	
	$checkarr=$_POST['arr'];
	$request=$checkarr[12];
 	
	//echo "req:   ".$request;
	//print_r($checkarr);
include("database.php");

$words = mysql_real_escape_string(preg_replace('!\s+!',' ',$request));   
$arraySearch = explode(" ", trim($words));       
$countSearch = count($arraySearch);
$a = 0;
$query = "SELECT * FROM member WHERE ";

while ($a < $countSearch)
{
    if($checkarr[11]==1){

    $query = $query." ( id LIKE '%".$arraySearch[$a]."%' or name LIKE '%".$arraySearch[$a]."%' or dob LIKE '%".$arraySearch[$a]."%' or address LIKE '%". $arraySearch[$a]."%' or phone LIKE '%".$arraySearch[$a]."%' or category LIKE '%".$arraySearch[$a]."%' or fees LIKE '%".$arraySearch[$a]."%'  or caution LIKE '%".$arraySearch[$a]. "%' or start  LIKE '%".$arraySearch[$a]."%' or end LIKE '%".$arraySearch[$a]."%' or email LIKE '%".$arraySearch[$a]."%' or books LIKE '%".$arraySearch[$a]."%'  ) ";
	}
	else
	{
	$c=0;
	$query=$query."(";
if($checkarr[0]==1) { if($c!=0) {$query = $query." or ";}else{$c++; } $query = $query."id          LIKE '%".$arraySearch[$a]."%' "; }
if($checkarr[1]==1) { if($c!=0) {$query = $query." or ";}else{$c++; } $query = $query."name       LIKE '%".$arraySearch[$a]."%' "; }
if($checkarr[2]==1) { if($c!=0) {$query = $query." or ";}else{$c++; } $query = $query."dob     LIKE '%".$arraySearch[$a]."%' "; }
if($checkarr[3]==1) { if($c!=0) {$query = $query." or ";}else{$c++; } $query = $query."address LIKE '%".$arraySearch[$a]."%' "; }
if($checkarr[4]==1) { if($c!=0) {$query = $query." or ";}else{$c++; } $query = $query."phone LIKE '%".$arraySearch[$a]."%' "; }
if($checkarr[5]==1) { if($c!=0) {$query = $query." or ";}else{$c++; } $query = $query."email  LIKE '%".$arraySearch[$a]."%' "; }
if($checkarr[6]==1) { if($c!=0) {$query = $query." or ";}else{$c++; } $query = $query."fees LIKE '%".$arraySearch[$a]."%' "; }
if($checkarr[7]==1) { if($c!=0) {$query = $query." or ";}else{$c++; } $query = $query."caution   LIKE '%".$arraySearch[$a]."%' "; }
if($checkarr[8]==1) { if($c!=0) {$query = $query." or ";}else{$c++; } $query = $query."category   LIKE '%".$arraySearch[$a]."%' "; }
if($checkarr[9]==1) { if($c!=0) {$query = $query." or ";}else{$c++; } $query = $query."start     LIKE '%".$arraySearch[$a]."%' "; }
if($checkarr[10]==1){ if($c!=0) {$query = $query." or ";}else{$c++; } $query = $query."end       LIKE '%".$arraySearch[$a]."%' "; }

if($checkarr[13]==1){ if($c!=0) {$query = $query." or ";}else{$c++; } $query = $query."books       LIKE '%".$arraySearch[$a]."%' "; }

	
		$query=$query.")";
	
		}

  $a++;
 // echo $a."---";
  //print_r($arraySearch);
  if ($a < $countSearch)
  { //echo $a."---";
  //print_r($arraySearch);
    $query = $query." and ";
	
    }   
  }
  

	 $r=mysqli_query($con,$query);
		?>
		
		<form method="post">
<table id="myTable" border="3px " >
	  <tr>		
	   <th>  <a href="#" style=" color:red"> no.</a></th>
					  <th  onclick="sortTable(0,1)"  >  <a href="#" style=" color:red"> id      </a></th>
					  <th  onclick="sortTable(1)  "  >  <a href="#" style=" color:red">   name    </a></th>
					  <th  onclick="sortTable(2)  "  >  <a href="#" style=" color:red">   dob     </a></th>
					  <th  onclick="sortTable(3,1)"  >  <a href="#" style=" color:red"> address </a></th>
					  <th  onclick="sortTable(4,1)">  <a href="#" style=" color:red">     phone   </a></th>
					  <th  onclick="sortTable(5)  ">  <a href="#" style=" color:red">   email   </a></th>
					  <th  onclick="sortTable(6,1)"  >  <a href="#" style=" color:red"> fees    </a></th>
					  <th  onclick="sortTable(7,1)"  >  <a href="#" style=" color:red">   caution </a></th>
					  <th  onclick="sortTable(5)  ">  <a href="#" style=" color:red">     category</a></th>
					  <th  onclick="sortTable(6)  "  >  <a href="#" style=" color:red">   start   </a></th>
					  <th  onclick="sortTable(7)  "  >  <a href="#" style=" color:red">   end     </a></th>
					  <th  onclick="sortTable(8)  "  >  <a href="#" style=" color:red">   books</a></th>
					  <th>							    <a href="#" style=" color:red">edit    </a></th> 
				
				 </tr>
					  <?php 	
    			$c=1;
while ($row=mysqli_fetch_array($r))
	{
		?>


				  <tr>
				  <td><?php echo $c;$c++;?>
				 <td><?php echo highlightKeywords($checkarr[11],$checkarr[0], $row['id']           ,$arraySearch) ?></td>
				 <td><?php echo highlightKeywords($checkarr[11],$checkarr[1], $row['name']         ,$arraySearch) ?></td>
				 <td><?php echo highlightKeywords($checkarr[11],$checkarr[2], $row['dob']          ,$arraySearch) ?></td>
				 <td><?php echo highlightKeywords($checkarr[11],$checkarr[3], $row['address']      ,$arraySearch) ?></td>
				 <td><?php echo highlightKeywords($checkarr[11],$checkarr[4], $row['phone']        ,$arraySearch) ?></td>
				 <td><?php echo highlightKeywords($checkarr[11],$checkarr[5], $row['email']        ,$arraySearch) ?></td>
				 <td><?php echo highlightKeywords($checkarr[11],$checkarr[6], $row['fees']         ,$arraySearch) ?></td>			  
				 <td><?php echo highlightKeywords($checkarr[11],$checkarr[7], $row['caution']      ,$arraySearch) ?></td>
				 <td><?php echo highlightKeywords($checkarr[11],$checkarr[8], $row['category']     ,$arraySearch) ?></td>
				 <td><?php echo highlightKeywords($checkarr[11],$checkarr[9], $row['start']        ,$arraySearch) ?></td>
				 <td><?php echo highlightKeywords($checkarr[11],$checkarr[10],$row['end']          ,$arraySearch) ?></td>
				 <td><?php echo highlightKeywords($checkarr[11],$checkarr[13],$row['books']          ,$arraySearch) ?></td> 
				  
				 <td> <button type="submit"  formaction="memedit1.php" name="edit"  value="<?php echo $row['id'];?>" >  edit</button> </td>                                       
					  </tr>					  
					
<?php 
        }
            echo '</table> </form>';
      
    ?>



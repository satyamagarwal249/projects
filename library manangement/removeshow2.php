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
	$request=$checkarr[10];
 	
	//echo "req:   ".$request;
	//print_r($checkarr);
include("database.php");

$words = mysql_real_escape_string(preg_replace('!\s+!',' ',$request));   
$arraySearch = explode(" ", trim($words));       
$countSearch = count($arraySearch);
$a = 0;
$query = "SELECT * FROM remove WHERE ";

while ($a < $countSearch)
{
    if($checkarr[9]==1){
//	echo "yes";
    $query = $query." ( id LIKE '%".$arraySearch[$a]."%' or accession LIKE '%".$arraySearch[$a]."%' or title LIKE '%".$arraySearch[$a]."%' or author LIKE '%".$arraySearch[$a]."%' or edition LIKE '%". $arraySearch[$a]."%' or publication LIKE '%".$arraySearch[$a]."%' or price LIKE '%".$arraySearch[$a]."%' or reason LIKE '%".$arraySearch[$a]."%'  or date  LIKE '%".$arraySearch[$a]."%') ";
	}
	else
	{
	$c=0;
	$query=$query."(";
if($checkarr[0]==1) { if($c!=0) {$query = $query." or ";}else{$c++; } $query = $query."id          LIKE '%".$arraySearch[$a]."%' "; }
if($checkarr[1]==1){ if($c!=0) {$query = $query." or ";}else{$c++; } $query = $query."accession       LIKE '%".$arraySearch[$a]."%' "; }
if($checkarr[2]==1) { if($c!=0) {$query = $query." or ";}else{$c++; } $query = $query."title       LIKE '%".$arraySearch[$a]."%' "; }
if($checkarr[3]==1) { if($c!=0) {$query = $query." or ";}else{$c++; } $query = $query."author      LIKE '%".$arraySearch[$a]."%' "; }
if($checkarr[4]==1) { if($c!=0) {$query = $query." or ";}else{$c++; } $query = $query."edition     LIKE '%".$arraySearch[$a]."%' "; }
if($checkarr[5]==1) { if($c!=0) {$query = $query." or ";}else{$c++; } $query = $query."publication LIKE '%".$arraySearch[$a]."%' "; }
if($checkarr[6]==1) { if($c!=0) {$query = $query." or ";}else{$c++; } $query = $query."price       LIKE '%".$arraySearch[$a]."%' "; }
if($checkarr[7]==1) { if($c!=0) {$query = $query." or ";}else{$c++; } $query = $query."date   LIKE '%".$arraySearch[$a]."%' "; }
if($checkarr[8]==1) { if($c!=0) {$query = $query." or ";}else{$c++; } $query = $query."reason    LIKE '%".$arraySearch[$a]."%' "; }


	
		$query=$query.")";

		}
	//	echo $query;
  $a++;
 // echo $a."---";
  //print_r($arraySearch);
  if ($a < $countSearch)
  { //echo $a."---";
  //print_r($arraySearch);
    $query = $query." and ";
	
    }   
  }

$r=mysqli_query($con,$query);  ?>
<table id="myTable" border="3px ">
<tr>		
					  <th  onclick="sortTable(0,1)">  <a href="#" style=" color:red">  serial no.   </a></th>
					  <th  onclick="sortTable(1,1)"  >  <a href="#" style=" color:red">accession no.</a></th>
					  <th  onclick="sortTable(2)"  >  <a href="#" style=" color:red">  title        </a></th>
					  <th  onclick="sortTable(3,1)">  <a href="#" style=" color:red">  author       </a></th>
					  <th  onclick="sortTable(4,1)">    <a href="#" style=" color:red">edition      </a></th>
					  <th  onclick="sortTable(5)">  <a href="#" style=" color:red">    publication  </a></th>
					  <th  onclick="sortTable(6,1)" > <a href="#" style=" color:red">  price        </a></th>
					  <th  onclick="sortTable(7)"  >  <a href="#" style=" color:red">  remove date  </a></th>
					  <th  onclick="sortTable(8)">    <a href="#" style=" color:red">    reason         </a></th>
 </tr>

 <?php
while ($row=mysqli_fetch_array($r))
{	
?>
     				  <tr>
					 <td><?php echo highlightKeywords($checkarr[9],$checkarr[0],$row['id']         ,$arraySearch) ?></td>
					 <td><?php echo highlightKeywords($checkarr[9],$checkarr[1],$row['accession']  ,$arraySearch) ?></td>
					 <td><?php echo highlightKeywords($checkarr[9],$checkarr[2],$row['title']      ,$arraySearch) ?></td>
					 <td><?php echo highlightKeywords($checkarr[9],$checkarr[3],$row['author']     ,$arraySearch) ?></td>
					 <td><?php echo highlightKeywords($checkarr[9],$checkarr[4],$row['edition']    ,$arraySearch) ?></td>
					 <td><?php echo highlightKeywords($checkarr[9],$checkarr[5],$row['publication'],$arraySearch) ?></td>
					 <td><?php echo highlightKeywords($checkarr[9],$checkarr[6],$row['price']      ,$arraySearch) ?></td>  
					 <td><?php echo highlightKeywords($checkarr[9],$checkarr[7],$row['date']     ,$arraySearch) ?></td>
					 <td><?php echo highlightKeywords($checkarr[9],$checkarr[8],$row['reason']     ,$arraySearch) ?></td>
					  </tr>					  
					
<?php 
        }
		?>
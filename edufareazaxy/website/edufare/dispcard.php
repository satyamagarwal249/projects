<?php include("config.php");
$cars=array("course_id","course_name","institute","cost","free","rating","description","tag","start_date","duration","weekly_study","category","website","users");

?>

	
				  <div  id="table-container" >
				  <table id="customers" width="100%" border="1" cellspacing="1" cellpadding="4">
				<?php
				
	$checkarr=$_POST['arr'];
		$no=$_POST['no'];
 	if (isset($no))
	{
echo "no:   ".$no;
	print_r($checkarr);
	$add= "  order by ".$cars[$no];
	echo $add;
	
	if ($checkarr[$no]==-1)
		$add=$add."   desc ";
		}
		else 
		$add="";
		if ($_REQUEST["course_name"]<>'') 
				{
					$search_string = " AND (course_name LIKE '%".mysql_real_escape_string($_REQUEST["course_name"])." %' or search LIKE '%".mysql_real_escape_string($_REQUEST["course_name"])." %' or category LIKE '%".mysql_real_escape_string($_REQUEST["course_name"])." %')";					
				}
				if ($_REQUEST["category"]<>'') 
				{
					$search_category = " AND category LIKE '%".mysql_real_escape_string($_REQUEST["category"])." %'";	
				}
				if ($_REQUEST["institute"]<>'')
				{
					$search_institute = " AND institute='".mysql_real_escape_string($_REQUEST["institute"])."'";	
				}
				#if ($_REQUEST["price"]<>'')
				
					
				
				if ($_REQUEST["rating"]<>'')
				{
					$search_rating = " AND rating >='".mysql_real_escape_string($_REQUEST["rating"])."'";	
				}
				if ($_REQUEST["tag"]<>'')
				{
					$search_tag = " AND tag='".mysql_real_escape_string($_REQUEST["tag"])."'";	
				}
				$dur=$_REQUEST["duration"];
				if ($dur<>'')
				{

				$search_duration = " AND duration<='".$dur."'";	
				}
				if ($_REQUEST["free"]<>'')
				{if ($_REQUEST["free"]=='1')
					$search_free= " AND free='1'";	
				 else 
				 $search_free= " AND cost='0'";	
				}
				if(isset ($_REQUEST["after"]))
					$search_after = " AND start_date>='".($_REQUEST["after"])."'";	
				if(isset ($_REQUEST["min"]) and isset($_REQUEST["max"]))
				$search_price = " AND cost between '".mysql_real_escape_string($_REQUEST["min"])."' and '".mysql_real_escape_string($_REQUEST["max"])."'";	
				if ($_REQUEST["website"]<>'')
				{
					$search_website = " AND website='".mysql_real_escape_string($_REQUEST["website"])."'";	
				}
				
				
				
					$sql = "SELECT * FROM ".$SETTINGS["data_table"]." WHERE 1".$search_string.$search_category.$search_institute.$search_price.$search_rating.$search_tag.$search_duration.$search_free.$search_website.$search_after.$add;
					
				
				echo $sql;
				$sql_result = mysql_query ($sql, $connection ) or die ('request "Could not execute SQL query" '.$sql);
				if (mysql_num_rows($sql_result)>0) {
					while ($row = mysql_fetch_assoc($sql_result)) {
				?>
				  <tr>
				  
					<td>  <?php echo $row["course_id"]; 			?>	   </td>
					<td>  <?php echo $row["course_name"]; 			?>	   </td>
					<td>  <?php echo $row["institute"]; 			?>	   </td>
					<td>  <?php echo $row["cost"]; 				?>    	   </td>
					<td>  <?php echo $row["free"]; 				?>	   </td>
					<td>  <?php echo $row["rating"]; 				?>	   </td>
					<td>  <?php echo $row["description"];			?>	   </td>
					<td>  <?php echo $row["tag"]; 					?>	   </td>
					<td>  <?php echo $row["start_date"];			?>	   </td>
					<td>  <?php echo $row["duration"];				?>		</td>
					<td>  <?php echo $row["weekly_study"]; 				?>	   </td>
					<td>  <?php echo $row["category"];				?>	   </td>
					<td>  <?php echo $row["website"]; 				?>	   </td>
					<td>  <?php echo $row["users"]; 				?>	   </td> 
					<td><a href="<?php echo $row["link"]; 		?>">LINK</a></td>
					
				  </tr>
				<?php
					}
				} else {
				?>
				<tr><td colspan="5">No results found.</td>
				<?php	
				}
				?>
				</table>
</div>

	
			
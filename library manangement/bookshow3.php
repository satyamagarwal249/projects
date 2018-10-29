<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title> book details</title>

<script>
function sortTable(n ,type=0) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("myTable");
  switching = true;
  //Set the sorting direction to ascending:
  dir = "asc"; 
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.getElementsByTagName("TR");
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /*check if the two rows should switch place,
      based on the direction, asc or desc:*/
      if (dir == "asc") {
	  if(type==0)
	  {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch= true;
          break;
        }
      }
	  else
	  {
	  if (Number(x.innerHTML) > Number(y.innerHTML)) {
  shouldSwitch = true;
  break;
}
	  }
	  } 
	  else if (dir == "desc") {
if(type==0)
{      
	  if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
	  else
	  {
	  if (Number(x.innerHTML) < Number(y.innerHTML)) {
  shouldSwitch = true;
  break;
}
	  }
 }
 }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      //Each time a switch is done, increase this count by 1:
      switchcount ++;      
    } else {
      /*If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again.*/
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
</script>

</body>
</html>

</head>
<body >

<?php include("header.php");
?>
<b>
<FONT SIZE = "5" FACE = "algerian"color="brown">
<center>
BOOK details <br><BR>

</FONT>
<input type="text" name="search" >
    <div id="table-container">
    <?php 
	
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
    $query="SELECT id,book,department,author,price,quantity,date,time FROM book";
	 if ($stmt = $conn->prepare($query)) {
        $stmt->execute();
        $stmt->bind_result($id,$book,$department,$author,$price,$quantity,$date,$time);?>

<table id="myTable" border="3px " style="width:1200px;text-align:center;font-size:25px;font-family:algerian;color:blue"><tr>
					  <th  onclick="sortTable(0)"  >  <a href="#" style=" color:red">id        </a></th>
					  <th  onclick="sortTable(1)"  >  <a href="#" style=" color:red">book      </a></th>
					  <th  onclick="sortTable(2)"  >  <a href="#" style=" color:red">department</a></th>
					  <th  onclick="sortTable(3)"  >  <a href="#" style=" color:red">author    </a></th>
					  <th  onclick="sortTable(4,1)">  <a href="#" style=" color:red">price     </a></th>
					  <th  onclick="sortTable(5,1)">  <a href="#" style=" color:red">quantity  </a></th>
					  <th  onclick="sortTable(6)"  >  <a href="#" style=" color:red">date	   </a></th>
					  <th  onclick="sortTable(7)"  >  <a href="#" style=" color:red">time	   </a></th>
					  </tr>
					  <?php 	
        while ($stmt->fetch()) {
		?>
		 <tr>
					  
					  <td><?php echo $id        ?></TD>
					  <td><?php echo $book      ?></TD>
					  <td><?php echo $department?></TD>
					  <td><?php echo $author    ?></td>
					  <td><?php echo $price     ?></td>
					  <td><?php echo $quantity  ?></td>
					  <td><?php echo $date		?></td>
					  <td><?php echo $time		?></td>
					  </tr>
<?php 
        }
            echo '</table>';
        $stmt->close();
    }
    $conn->close();
    ?>


</center>

</FONT>
</b>
</body>
</html>
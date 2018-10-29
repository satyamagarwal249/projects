<?php $request=$_POST['request'];
 
	
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
    $query="SELECT id,book,department,author,price,quantity,date,time FROM book where id like '%" .$request. "%' OR book like '%" .$request. "%' OR department like '%" .$request. "%' OR author like '%" .$request. "%' OR price like '%" .$request. "%'";
	 if ($stmt = $conn->prepare($query)) {
        $stmt->execute();
        $stmt->bind_result($id,$book,$department,$author,$price,$quantity,$date,$time);?>

<table border="3px " style="width:1200px;text-align:center;font-size:25px;font-family:algerian;color:blue"><tr>
					  <th style=" color:red">id        </th>
					  <th style=" color:red">book      </th>
					  <th style=" color:red">department     </th>
					  <th style=" color:red">author     </th>
					  <th style=" color:red">price     </th>
					  <th style=" color:red">quantity     </th>
					  <th style=" color:red">date		 </th>
					  <th style=" color:red">time		</th>
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



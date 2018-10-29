<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title> book details</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript">
var checkarr=[-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,1,""];
//var checkarr={request:"1",key:"0"};
    $(document).ready(function()
                     {
        $("input[name='search']").on('keyup',function()
           {
            var keyword = $(this).val();
			checkarr[12]=keyword;
            $.ajax(
            {
                url:'bookshow302.php',
                type:'POST',
				data: { arr: checkarr},
                success:function(data)
                {
                    $("#table-container").html(data);
                    //alert(data);
                },
            });
        });
    });
	 $(document).ready(function()
                     {
        $("input[name='check[]']").on('click',function()
           {
            checkarr[$(this).val()]*=-1;
			$.ajax(
            {
                url:'bookshow302.php',
                type:'POST',
				data: { arr: checkarr},
                success:function(data)
                {
                    $("#table-container").html(data);
                    //alert(data);
                },
            });
               
        });
    });
	
</script>
<link rel="stylesheet" type="text/css" href="rkcss.css">
</head>
<body >
<div id="wrapper">
<?php
 include("rkhead.php");
  include("rknav.php");
 ?>
<b>
<center>
<span id="my">
BOOK details:
<input type="text" name="search" >
<span style="color:gray" class="glyphicon glyphicon-search"></span> <br><BR>
SEARCH BY:
<input type="checkbox"  name="check[]"value="0"><label>id         </label> 
<input type="checkbox" name="check[]" value="1"><label>title      </label> 
<input type="checkbox" name="check[]" value="2"><label>author     </label> 
<input type="checkbox" name="check[]" value="3"><label>edition    </label> 
<input type="checkbox" name="check[]" value="4"><label>publication</label> 
<input type="checkbox" name="check[]" value="5"><label>price      </label> 
<input type="checkbox" name="check[]" value="6"><label>quantity   </label> 
<input type="checkbox" name="check[]" value="7"><label>category   </label> 
<input type="checkbox" name="check[]" value="8"><label>keyword    </label> 
<input type="checkbox" name="check[]" value="9"><label>issuedate  </label> 
<input type="checkbox" name="check[]" value="10"><label>issuetime  </label>
<input type="checkbox" name="check[]" value="11" checked><label>all</label>
<br>
</span>
<br><br>
    <div id="table-container">
	
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

    <?php 
	
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
    $query="SELECT * FROM book";
	 if ($stmt = $conn->prepare($query)) {
        $stmt->execute();
        $stmt->bind_result($id,$title,$author,$edition,$publication,$price,$quantity,$category,$keyword,$issuedate,$issuetime);
		?>
		<form method="post">
<table id="myTable" border="3px ">
	  <tr>		
					  <th  >  <a href="#" style=" color:red">S.No.</a></th>
					  <th  onclick="sortTable(0,1)"  >  <a href="#" style=" color:red">id         </a></th>
					  <th  onclick="sortTable(1)"  >  <a href="#" style=" color:red">title      </a></th>
					  <th  onclick="sortTable(2)"  >  <a href="#" style=" color:red">author     </a></th>
					  <th  onclick="sortTable(3,1)"  >  <a href="#" style=" color:red">edition    </a></th>
					  <th  onclick="sortTable(4)">  <a href="#" style=" color:red">publication</a></th>
					  <th  onclick="sortTable(5,1)">  <a href="#" style=" color:red">price      </a></th>
	
					  <th  onclick="sortTable(7)"  >  <a href="#" style=" color:red">category   </a></th>
					  <th  onclick="sortTable(5)">  <a href="#" style=" color:red">keyword  </a></th>
					  <th  onclick="sortTable(6)"  >  <a href="#" style=" color:red">date       </a></th>
					  <th  onclick="sortTable(7)"  >  <a href="#" style=" color:red">time       </a></th>
					  <th> <a href="#" style=" color:red">issue       </a></th> 
					  <th> <a href="#" style=" color:red">edit      </a></th> 
					  </tr>
					  <?php 
$c=1;					  
        while ($stmt->fetch()) {
		?>

				
					  <tr>
					  <td><?php echo $c          ?></td>
					  <td><?php echo $id          ?></td>
					  <td><?php echo $title       ?></td>
					  <td><?php echo $author      ?></td>
					  <td><?php echo $edition     ?></td>
					  <td><?php echo $publication ?></td>
					  <td><?php echo $price       ?></td>
				  
					  <td><?php echo $category    ?></td>
					  <td><?php echo $keyword     ?></td>
					  <td><?php echo $issuedate   ?></td>
					  <td><?php echo $issuetime   ?></td>
					  					  <td> <button type="submit"  formaction="#bookrecord1.php"name="issue" value="<?php echo $id?>" >  issue</button> </td>
					 <td> <button type="submit"  formaction="bookrecord1.php" name="edit"  value="<?php echo $id?>" >  edit</button> </td>                                         
					  </tr>					  
					
<?php 
       $c++; }
            echo '</table></form>';
        $stmt->close();
    }
    $conn->close();
    ?>


</center>

</FONT>
</b>
<?php include("footer.php"); ?>
</div>

</body>
</html>
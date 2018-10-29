<input type="text" name="search" >
    <div id="table-container">
    <?php 
	
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
    $query="SELECT id, firstname, lastname, email FROM test";
	
    if ($stmt = $conn->prepare($query)) {
        $stmt->execute();
        $stmt->bind_result($id, $firstname, $lastname, $email);
        echo '<table border="1"';
        echo '<tr>
            <th>Id</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email.</th>
        </tr>';

        while ($stmt->fetch()) {
          echo'<tr>
            <td><input type="checkbox" onclick="" name="checkbox[]" value='.$id.'></td>
               <td>'.$firstname.'</td>
               <td>'.$lastname.'</td>
               <td>'.$email.'</td>
               
          </tr>
               ';
        }
            echo '</table>';
        $stmt->close();
    }
    $conn->close();
    ?>
    </table>

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript">

    $(document).ready(function()
                     {
        $("input[name='search']").on('keyup',function()
           {
            var keyword = $(this).val();
            $.ajax(
            {
                url:'testmultiple2.php',
                type:'POST',
                data:'request='+keyword,
                success:function(data)
                {
                    $("#table-container").html(data);
                    //alert(data);
                },
            });
        });
    });
</script>
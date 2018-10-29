<?php $request=$_POST['request'];

	
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$query="SELECT id, firstname, lastname, email FROM `test` WHERE firstname LIKE '%" .$request. "%' OR lastname LIKE '%".$request  ."%' OR email LIKE '%" .$request ."%'";
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
    $stmt->close();
}
$conn->close();
?>
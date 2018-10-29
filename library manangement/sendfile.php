 <?php
 if(isset($_POST['q']) && $_POST['q'] !=''){
$valueToSearch = $_POST['q'];

$con=mysqli_connect("localhost","root","","library");
mysqli_select_db($con,"library");
// your sql query for Searching result
$query = "SELECT * FROM `test` WHERE CONCAT(`id`, `firstname`, `lastname`, `email`) LIKE '%".$valueToSearch."%'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $id=$row["id"];
        $fn=$row["firstname"];
        $ln=$row["lastname"];
        $email=$row["email"];
    }
}
return json_encode($id, $fn, $ln, $email);
}
?>
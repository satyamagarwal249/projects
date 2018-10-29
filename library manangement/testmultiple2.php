<?php 
	function highlightKeywords($text ,$wordsAry) {
		print_r($wordsAry);
		$wordsCount = count($wordsAry);
		
		for($i=0;$i<$wordsCount;$i++) {
			$highlighted_text = "####1$wordsAry[$i]##2";
			$text = str_ireplace($wordsAry[$i], $highlighted_text,$text);
			}
$text = str_ireplace("####1","<span style='font-weight:bold;color:red ; background:yellow'>", $text);
			$text = str_ireplace("##2","</span>", $text);
		
	return $text;
	}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library";

    //$result=mysql_query($query) or die(error);
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$words = mysql_real_escape_string(preg_replace('!\s+!', ' ',$_POST['request']));   
$arraySearch = explode(" ", trim($words));       
$countSearch = count($arraySearch);
$a = 0;
$query = "SELECT * FROM test WHERE ";
$quote = "'";
while ($a < $countSearch)
{
  $query = $query."firstname LIKE '%".$arraySearch[$a]."%'";
  $a++;
  echo $a."---";
  print_r($arraySearch);
  if ($a < $countSearch)
  { echo $a."---";
  print_r($arraySearch);
    $query = $query." and ";
	
    }   
  }
  echo $query;
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
	echo $firstname;
      echo'<tr>
          <td><input type="checkbox" onclick="" name="checkbox[]" value='.$id.'></td>
           <td>'.highlightKeywords($firstname, $arraySearch) .'</td>
           <td>'.highlightKeywords($lastname, $arraySearch) .'</td>
           <td>'.highlightKeywords($email, $arraySearch) .'</td>
      </tr>
           ';
    }
    $stmt->close();
}
$conn->close();
?>
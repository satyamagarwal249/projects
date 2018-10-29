<form name="frmSearch" method="post" action="">
	<div class="search-box">
		<label class="search-label">Enter Search Keyword:</label>
		<div>
			<input type="text" name="keyword" class="demoInputBox" value="<?php echo $keyword; ?>"	/>
		</div>				
		<div>
			<input type="submit" name="go" class="btnSearch" value="Search">
		</div>
	</div>
</form>
























<?php
	$conn = mysqli_connect("localhost", "root", "", "blog_samples");	
	$keyword = "";	
	$queryCondition = "";
	if(!empty($_POST["keyword"])) {
		$keyword = $_POST["keyword"];
		$wordsAry = explode(" ", $keyword);
		$wordsCount = count($wordsAry);
		$queryCondition = " WHERE ";
		for($i=0;$i<$wordsCount;$i++) {
			$queryCondition .= "title LIKE '%" . $wordsAry[$i] . "%' OR description LIKE '%" . $wordsAry[$i] . "%'";
			if($i!=$wordsCount-1) {
				$queryCondition .= " OR ";
			}
		}
	}
	$orderby = " ORDER BY id desc"; 
	$sql = "SELECT * FROM links " . $queryCondition;
	$result = mysqli_query($conn,$sql);	
?>
<?php 
	function highlightKeywords($text, $keyword) {
		$wordsAry = explode(" ", $keyword);
		$wordsCount = count($wordsAry);
		
		for($i=0;$i<$wordsCount;$i++) {
			$highlighted_text = "<span style='font-weight:bold;'>$wordsAry[$i]</span>";
			$text = str_ireplace($wordsAry[$i], $highlighted_text, $text);
		}

		return $text;
	}
?>
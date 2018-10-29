<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title> calendar</title>
<link rel="stylesheet" type="text/css" href="rkcss.css">
</head>
<body >
<div id="wrapper">
<?php
 include("rkhead.php");
  include("indexnav.php");
 ?>
<b>
<center>
<?php
$monthNames = Array("January", "February", "March", "April", "May", "June", "July", 
"August", "September", "October", "November", "December");
?>
<?php
if (!isset($_REQUEST["month"])) $_REQUEST["month"] = date("n");
if (!isset($_REQUEST["year"])) $_REQUEST["year"] = date("Y");
?>
<?php

date_default_timezone_set("Asia/kolkata");
$tdate    =date("d")-1;
$tmonth    =date("m");
$tyear    =date("Y");
$cMonth = $_REQUEST["month"];
$cYear = $_REQUEST["year"];
 
$prev_year = $cYear;
$next_year = $cYear;
$prev_month = $cMonth-1;
$next_month = $cMonth+1;
 
if ($prev_month == 0 ) {
    $prev_month = 12;
    $prev_year = $cYear - 1;
}
if ($next_month == 13 ) {
    $next_month = 1;
    $next_year = $cYear + 1;
}
?><table width="50%">
<tr align="center">
<td bgcolor="#999999" style="color:#4b692d">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="50%" align="left">  <a href="<?php echo $_SERVER["PHP_SELF"] . "?month=". $prev_month . "&year=" . $prev_year; ?>" style="color:#FFFFFF">Previous</a></td>
<td width="50%" align="right"><a href="<?php echo $_SERVER["PHP_SELF"] . "?month=". $next_month . "&year=" . $next_year; ?>" style="color:#FFFFFF">Next</a>  </td>
</tr>
</table>
</td>
</tr>
<tr>
<td align="center">
<table width="100%" border="1px" cellpadding="2" cellspacing="2">
<tr align="center">
<td colspan="7" bgcolor="#999999" style="color:#FFFFFF"><strong><?php echo $monthNames[$cMonth-1].' '.$cYear; ?></strong></td>
</tr>
<tr>
<td align="center" bgcolor="##BCE0A8" style="color:#FFFFFF"><strong>SUN</strong></td>
<td align="center" bgcolor="##BCE0A8" style="color:#FFFFFF"><strong>MON</strong></td>
<td align="center" bgcolor="##BCE0A8" style="color:#FFFFFF"><strong>TUE</strong></td>
<td align="center" bgcolor="##BCE0A8" style="color:#FFFFFF"><strong>WED</strong></td>
<td align="center" bgcolor="##BCE0A8" style="color:#FFFFFF"><strong>THUS</strong></td>
<td align="center" bgcolor="##BCE0A8" style="color:#FFFFFF"><strong>FRI</strong></td>
<td align="center" bgcolor="##BCE0A8" style="color:#FFFFFF"><strong>SAT</strong></td>
</tr>

<?php 
$timestamp = mktime(0,0,0,$cMonth,1,$cYear);
$maxday = date("t",$timestamp);
$thismonth = getdate ($timestamp);
$startday = $thismonth['wday'];
for ($i=0; $i<($maxday+$startday); $i++) {
    if(($i % 7) == 0 ) echo "<tr>";
    if($i < $startday) echo "<td></td>";
    else 
	{$v=$i - $startday + 1;
	if(($v==$tdate) &&($cMonth==$tmonth) &&($cYear==$tyear) )
	echo "<td align='center' valign='middle' style='background:yellow' height='20px'>". $v . "</td>";
	else
	echo "<td align='center' valign='middle' height='20px'>". $v . "</td>";
	}
    if(($i % 7) == 6 ) echo "</tr>";
}
?>










</table>
</td>
</tr>
</table>

</center>

</b>
<?php include("footer.php"); ?>
</div>

</body>
</html>

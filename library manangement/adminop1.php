<html>
<head>
<title> admin operations </title>


<link rel="stylesheet" type="text/css" href="rkcss.css">
</head>
<body>
<div id="wrapper">
<?php
 include("rkhead.php");
  include("rknav.php");
 ?>
<?php
session_start();
?>
<center>
<span id="master">

<A HREF="BOOKRECORD1.PHP" >register BOOK</A><BR><BR><BR>
<A HREF="studrecord1.PHP" >register member</A><BR><BR><BR><BR>

<A HREF="testsort.PHP" >BOOKS LIST </A><BR><BR><BR>
<A HREF="studshow1.PHP" >members LIST </A><BR><BR><BR><BR>
<A HREF="issue.php"       >issue </A><BR><BR><BR>
<A HREF="return0.php"       >member account </A><BR><BR><BR><BR>
<A HREF="removeshow1.PHP" >see removed BOOK</A><BR><BR><BR>
</span>
</center>
<?php include("footer.php"); ?>
</div>
</body>
</html>

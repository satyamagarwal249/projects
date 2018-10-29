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
<A HREF="editsatus.PHP" >edit book status</A><BR><BR><BR>

<A HREF="issue.PHP"    >issue </A><BR><BR><BR>

<A HREF="return.PHP" >return</A><BR><BR><BR>


<A HREF="REMOVE.PHP"      >REMOVE BOOK</A><BR><BR><BR>

</span>
</center>
<?php include("footer.php"); ?>
</div>
</body>
</html>

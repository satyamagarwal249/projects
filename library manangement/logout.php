<?php
session_start();
session_unset();
session_destroy();
			setcookie('message','successfully logout',time()+1);
header("location:h.php");
?>
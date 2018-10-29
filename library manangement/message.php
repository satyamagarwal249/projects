<center>
<b>
<u>
<FONT SIZE = "5" FACE = "algerian"color="red "> 
<script src="jquery-3.3.1.min.js"></script>
<script type="text/javascript">
 setTimeout(fade_out, 3000);
function fade_out() {
$("#mydiv").fadeOut("slow");
}
 </script>
 
<style>
 .text-glow {/*Definig font could be useful!*/
   //font-size:4em;
   color: red;
   font-family:Arial;
   text-shadow: 1px 0px 20px #ffd200;
-webkit-transition: 1s linear 0s;
-moz-transition: 1s linear 0s;
-o-transition: 1s linear 0s;
transition: 1s linear 0s;
outline: 0 none;
   }
</style>
 <?php 
 if(isset($_COOKIE['message']))
 {?>
<div id="mydiv">
<?php

echo "<span class='text-glow'>".$_COOKIE['message']."</span><br><br>";
?>
 
</div>
<?php }?>
</FONT>
</u>
</b>
</center>
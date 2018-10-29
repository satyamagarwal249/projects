<?PHP
function dig ($c,$quantity)
{
$c=(int) $c;
$n=1;
while((int)($c/10) >0)
{
$n+=1;
$c/=10;

}
$d=(int)((int)$quantity-$n);
$e="";
while($d>0)
{
$e="0".$e;
$d=(int)($d-1);
}
return $e;
}


?>
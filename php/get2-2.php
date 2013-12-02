<?php
$name=$_GET['user'];
$pw=$_GET['pass'];
if ($name=='root' && $pw=='paiplace') {
	echo "1";
}
else{
	echo "0";
}
?>
<?php
$a='123';
$b='abc';
$str='$a $b'.'<br>';
echo $str;
eval("\$str=\"$str\";");
echo $str;
?>
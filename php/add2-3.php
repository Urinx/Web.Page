<?php
$sql="SELECT * FROM test1 ORDER BY ID DESC";
$link=mysql_connect('localhost','root','paiplace') or
die("Could not connect: " . mysql_error());
mysql_select_db('sina');
mysql_query("SET NAMES 'UTF8'");
$res=mysql_query($sql);
while($row=mysql_fetch_row($res)){echo $row[1].'<br>';};
?>

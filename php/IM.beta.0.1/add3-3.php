<?php
$sql="SELECT * FROM test1 ORDER BY ID DESC";
$link=mysql_connect('localhost','root','paiplace') or
die("Could not connect: " . mysql_error());
mysql_select_db('sina');
mysql_query("SET NAMES 'UTF8'");
$res=mysql_query($sql);
while($row=mysql_fetch_row($res)){
	$sql2="SELECT username FROM user WHERE account='{$row[2]}'";
	$res2=mysql_query($sql2);
	$row2=mysql_fetch_row($res2);
	echo $row[1].'&nbsp;&nbsp;&nbsp;--by '.$row2[0].'<br>';
};
?>
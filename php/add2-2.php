<meta charset="utf-8">
<?php
$content=$_GET['content'];
$sql="INSERT INTO test1 (content) VALUES('{$content}')";
if ($_GET['add']=='send') {
	mysql_connect('localhost','root','paiplace') or
die("Could not connect: " . mysql_error());
	mysql_select_db(sina);
	mysql_query("SET NAMES 'UTF8'");
	mysql_query($sql);
}
?>

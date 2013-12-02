<meta charset="utf-8">
<?php
$content=$_GET['content'];
$act=$_GET['account'];
$sql="INSERT INTO test1 (content,account) VALUES('{$content}','{$act}')";
if ($_GET['add']=='true') {
	mysql_connect('localhost','root','paiplace') or
die("Could not connect: " . mysql_error());
	mysql_select_db(sina);
	mysql_query("SET NAMES 'UTF8'");
	mysql_query($sql);
}
?>

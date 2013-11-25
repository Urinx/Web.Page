<meta charset="utf-8">
<?php
$content=$_GET['content'];
$act=$_GET['account'];
$sql="INSERT INTO message (content,account) VALUES('{$content}','{$act}')";
if ($_GET['add']=='true') {
	mysql_connect('localhost','root','paiplace') or
die("Could not connect: " . mysql_error());
	mysql_select_db(QQ);
	mysql_query("SET NAMES 'UTF8'");
	mysql_query($sql);
}
?>

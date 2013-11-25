<?php
$act=$_GET['account'];
$nm=$_GET['myname'];
$sql="SELECT * FROM message ORDER BY ID DESC";
$sql2="SELECT * FROM {$nm}";
$link=mysql_connect('localhost','root','paiplace') or
die("Could not connect: " . mysql_error());
mysql_select_db('QQ');
mysql_query("SET NAMES 'UTF8'");
$res=mysql_query($sql);
$res2=mysql_query($sql2);
$row=mysql_fetch_row($res);
$row2=mysql_fetch_row($res2);
echo $row[0]-$row2[3];
echo $row[1];
?>
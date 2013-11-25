<?php
$act=$_GET['account'];
$nm=$_GET['myname'];
$fn=$_GET['fname'];
$sql="SELECT * FROM message";
$link=mysql_connect('localhost','root','paiplace') or
die("Could not connect: " . mysql_error());
mysql_select_db('QQ');
mysql_query("SET NAMES 'UTF8'");
$res=mysql_query($sql);

$sql2="SELECT * FROM message ORDER BY ID DESC";
$res2=mysql_query($sql2);
$row2=mysql_fetch_row($res2);
$sql3="UPDATE `QQ`.`{$nm}` SET `chatID`='{$row2[0]}'";
mysql_query($sql3);

while($row=mysql_fetch_row($res)){
	if ($row[2]==$act) {
		$clas='me';
		$un=$nm;
	}
	else{
		$clas='ot';
		$un=$fn;
	}
	echo '<li class="'.$clas.'"><img src="res/head/'.$un.'.jpg"><div>'.$row[1].'</div></li>';
};
?>
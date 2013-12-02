<meta charset="utf-8">
<?php
$sql="SELECT * FROM test1 ORDER BY ID DESC";
$link=mysql_connect('localhost','root','paiplace') or
die("Could not connect: " . mysql_error());
mysql_select_db('sina');

mysql_query("SET NAMES 'UTF8'");

$res=mysql_query($sql);
?>

<form action="add-2.php" method="get">
<input type="text" name="content">
<input type="submit" name="add" value="send">
</form>


<?php while($row=mysql_fetch_row($res)) { ?>
<p><?php echo $row[1];?></p>
<?php } ?>
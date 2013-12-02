<?php
$sql="SELECT * FROM message ORDER BY ID DESC";
$link=mysql_connect('localhost','root','paiplace');
mysql_select_db('sina');
$res=mysql_query($sql);
?>
<?php while($row=mysql_fetch_row($res)) { ?>
<p><?php echo $row[1];?></p>
<?php } ?>

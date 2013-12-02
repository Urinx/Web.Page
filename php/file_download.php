<?php
header("Content-type:text/html;charset=utf-8");
$filename=$_GET['down_pic'];
if (isset($filename)) {
	if (file_exists($filename)) {
		$filesize=filesize($filename);
		header('Content-type:application/octet-stream');
		header('Accept-Ranges:bytes');
		header('Accept-Length:'.$filesize);
		header('Content-Disposition:attachment;filename='.$filename);
		$f=fopen($filename, 'r');
		$readbytes=1024;
		while (!feof($f)) {
			echo fread($f, $readbytes);
		}
		fclose($f);
		exit();
	}
	else{
		die("The file isn't exsit.");
	}
}

?>
<form action="file_download.php" method="get">
<img src="1.jpg">
<input name="down_pic" value="1.jpg" hidden>
<br>
<input type="submit" value="Download">
</form>
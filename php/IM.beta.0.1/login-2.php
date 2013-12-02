<?php
$act=$_GET['account'];
$pw=$_GET['password'];
$sql="SELECT * FROM user WHERE account='{$act}'";

mysql_connect('localhost','root','paiplace');
mysql_select_db('sina');
$res=mysql_query($sql);

if ($res) {
	$row=mysql_fetch_row($res);
	if ($pw==$row[3]) {
		$nm=$row[2];

		?>
		<p><?php echo $nm." is online"; ?></p>
		<input type="text" name="content" id="txt1">
		<input type="button" name="add" value="send" onclick="ajax();">

		<script type="text/javascript">
		function ajax(){
			var str=document.getElementById('txt1').value;
			document.getElementById('txt1').value='';

			var xmlhttp=new XMLHttpRequest();
			xmlhttp.onreadystatechange=function(){
				if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			
				};
			}
			url='add3-2.php?add=true&account='+<?php echo $act; ?>+'&content='+str;
			xmlhttp.open('GET',url,true);
			xmlhttp.send();
		}
		</script>
		<script type="text/javascript">
		var timer=null;
		window.onload=function(){
			clearInterval(timer);
			timer=setInterval(function(){
				var xmlhttp=new XMLHttpRequest();
				xmlhttp.onreadystatechange=function(){
					if (xmlhttp.readyState==4 && xmlhttp.status==200) {
						document.getElementById('backw').innerHTML=xmlhttp.responseText;
					};
				}
				xmlhttp.open('GET','add3-3.php',true);
				xmlhttp.send();
			},30);
		}
		</script>
		<p id="backw"></p>


	<?php
	}
	else{
		?>
		<script>
		alert("password is wrong!");
		document.location.href='login.php';
		</script>
		<?php
	}
}
else{
	?>
	<script>
	alert("This account isn't availible!");
	document.location.href='login.php';
	</script>
	<?php
}
?>
<?php
if ($_POST['account']) {
	$act=$_POST['account'];
	$pw=$_POST['password'];
}
else{
	$act=$_GET['account'];
	$pw=$_GET['password'];
}
mysql_connect('localhost','root','paiplace');
mysql_select_db('QQ');
mysql_query("SET NAMES 'UTF8'");
$sql="SELECT * FROM user WHERE account='{$act}'";


$res=mysql_query($sql);

if ($act=='' || $pw=='') {
	?>
	<script>
	document.location.href='qqlogin.html';
	alert("Connection is failed!\nPleace login again.");
	</script>
	<?php
};

if ($res) {
	$row=mysql_fetch_row($res);
	if ($pw==$row[3]) {
		$nm=$row[2];
		$str="I&nbsp;just&nbsp;want&nbsp;2&nbsp;tell&nbsp;you=Ich&nbsp;liebe&nbsp;Dich"."&amp;BeginAgain=I’ve&nbsp;been&nbsp;spending&nbsp;the&nbsp;last&nbsp;8&nbsp;months&nbsp;thinking&nbsp;all&nbsp;love&nbsp;ever&nbsp;does,Is&nbsp;break&nbsp;and&nbsp;burn&nbsp;and&nbsp;end"."&amp;account=".$act."&amp;password=".$pw;
	}
	else{
		?>
		<script>
		document.location.href='qqlogin.html';
		alert("Connection is failed!\nPleace login again.");
		</script>
		<?php
	}
}
else{
	?>
	<script>
	document.location.href='qqlogin.html';
	alert("Connection is failed!\nPleace login again.");
	</script>
	<?php
}

?>

<meta charset="utf-8">
<style type="text/css">
body,div,form,input,article,ul,li,p{
	margin: 0;
	padding: 0;
}
body{
	width: 263px;
	height: 453px;
	overflow-x: hidden;
	overflow-y: hidden;
}
#titlebar{
	border: 0px solid gray;
	height: 45px;
	background: url('res/logined/header_bg@2x.png');
	background-size: 100% 100%;
}
#titlebar span{
	color: white;
	text-align: center;
	font-weight: bold;
	position: relative;
	top: 12px;
	left: 110px;
}


/*middle section*/
article{
	background: #e5e5e5;
	height: 355px;
}
#group{
	border-top: 1px solid gray;
}
#group ul{
	width: 240px;
	margin: 10px;
	/*border-radius: 5px;
	overflow: hidden;*/
}
#group ul li{
	list-style: none;
	background: white;
	height: 40px;
	margin-bottom: 1px;
	font-size: 13px;
}
#group ul li:hover{
	background: #f0f0f0;
}
#group ul li img:nth-child(odd){
	position: relative;
	top: 8px;
	left: 5px;
	width: 25px;
	height: 25px;
}
#group ul li img:nth-child(even){
	float: right;
	position: relative;
	top: 13px;
	left: -10px;
	width: 10px;
	height: 15px;
}


/*footer settings*/
footer{
	border: 0px solid gray;
	position: absolute;
	top: 400px;
	left: 0;
	height: 54px;
	width: 263px;
	background: url('res/logined/header_bg@2x.png');
	background-size: 100% 100%;
}
footer ul{
	list-style: none;
}
footer ul li{
	border: 0px solid gray;
	width: 65.5px;
	height: 54px;
	float: left;
}
footer ul li:nth-child(3){
	background: url('res/logined/tabbar_sel_middle@2x.png');
	background-size: 100% 100%;
}
footer ul li img{
	position: relative;
	top: 5px;
	left: 18px;
	width: 30px;
	height: 30px;
}
footer ul li a{
	display: block;
	position: relative;
	top: 5px;
	font-size: 11px;
	text-align: center;
	color: gray;
	text-decoration: none
}
</style>

<div id="titlebar">
	<span>动态</span>
</div>

<article>
	<section id="group">
		<ul>
			<li>
				<img src="res/moments/found_icons_qzone@2x.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;好友动态
				<img src="res/contacts/table_arrow@2x.png">
			</li>
		</ul>
		<ul>
			<li>
				<img src="res/moments/found_icons_gamecenter@2x.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;游戏中心
				<img src="res/contacts/table_arrow@2x.png">
			</li>
			<li>
				<img src="res/moments/qz_icon_app_tx.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;应用中心
				<img src="res/contacts/table_arrow@2x.png">
			</li>
		</ul>
		<ul>
			<li>
				<img src="res/moments/found_icons_location@2x.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;附近的人
				<img src="res/contacts/table_arrow@2x.png">
			</li>
			<li>
				<img src="res/moments/found_icons_saosao@2x.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;扫一扫
				<img src="res/contacts/table_arrow@2x.png">
			</li>
			<li>
				<img src="res/moments/found_icons_folder@2x.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;我的文件夹
				<img src="res/contacts/table_arrow@2x.png">
			</li>
			<li>
				<img src="res/moments/found_icons_computer@2x.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;传文件到我的电脑
				<img src="res/contacts/table_arrow@2x.png">
			</li>
		</ul>
	</section>
</article>

<footer>
	<ul>
		<li>
			<img src="res/logined/tab_recent_nor@2x.png">
			<a href="message.php?<?php echo $str; ?>">消息</a>
		</li>
		<li>
			<img src="res/logined/tab_buddy_nor@2x.png">
			<a href="contacts.php?<?php echo $str; ?>">联系人</a>
		</li>
		<li>
			<img src="res/logined/tab_qworld_press@2x.png">
			<a href="moments.php?<?php echo $str; ?>" style="color:white;">动态</a>
		</li>
		<li>
			<img src="res/logined/tab_me_nor@2x.png">
			<a href="settings.php?<?php echo $str; ?>">设置</a>
		</li>
	</ul>
</footer>
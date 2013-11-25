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
	overflow: hidden;
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
	line-height: 40px;
}
#group ul li:hover{
	background: #f0f0f0;
}

#group ul li img{
	float: right;
	position: relative;
	top: 13px;
	left: -10px;
	width: 10px;
	height: 15px;
}
#group #head{
	height: 60px;
}
#group #head span{
	font-size: 15px;
	font-weight: bold;
	line-height: 60px;
	position: relative;
}
#group #head span:nth-child(3){
	float: right;
	left: -30px;
	font-weight: lighter;
}
#group #head img:nth-child(1){
	float: left;
	margin: 5px;
	top: 0px;
	left: 0px;
	width: 50px;
	height: 50px;
}
#group #head img:nth-child(4){
	top: 23px;
	left: 28px;
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
footer ul li:nth-child(4){
	background: url('res/logined/tabbar_sel_right@2x.png');
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
	<span>设置</span>
</div>

<article>
	<section id="group">
		<ul>
			<li id="head">
				<img src="res/head/<?php echo $nm; ?>.jpg">
				<span><?php echo $nm; ?></span><span>online</span>
				<img src="res/contacts/table_arrow@2x.png">
			</li>
			<li>
				&nbsp;&nbsp;个性签名
				<img src="res/contacts/table_arrow@2x.png">
			</li>
			<li>
				&nbsp;&nbsp;我的资料
				<img src="res/contacts/table_arrow@2x.png">
			</li>
		</ul>
		<ul>
			<li>
				&nbsp;&nbsp;气泡，主题，表情
				<img src="res/contacts/table_arrow@2x.png">
			</li>
			<li>
				&nbsp;&nbsp;消息通知
				<img src="res/contacts/table_arrow@2x.png">
			</li>
			<li>
				&nbsp;&nbsp;辅助功能
				<img src="res/contacts/table_arrow@2x.png">
			</li>
			<li>
				&nbsp;&nbsp;安全与隐私
				<img src="res/contacts/table_arrow@2x.png">
			</li>
		</ul>
		<ul>
			<li>
				&nbsp;&nbsp;关于QQ
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
			<img src="res/logined/tab_qworld_nor@2x.png">
			<a href="moments.php?<?php echo $str; ?>">动态</a>
		</li>
		<li>
			<img src="res/logined/tab_me_press@2x.png">
			<a href="settings.php?<?php echo $str; ?>" style="color:white;">设置</a>
		</li>
	</ul>
</footer>
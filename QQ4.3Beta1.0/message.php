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
		$sql2="SELECT * FROM {$nm}";
		$res2=mysql_query($sql2);
		$row2=mysql_fetch_row($res2);
		$fn=$row2[2];
		$fid=$row2[1];
		$str="I&nbsp;just&nbsp;want&nbsp;2&nbsp;tell&nbsp;you=Ich&nbsp;liebe&nbsp;Dich"."&amp;BeginAgain=I’ve&nbsp;been&nbsp;spending&nbsp;the&nbsp;last&nbsp;8&nbsp;months&nbsp;thinking&nbsp;all&nbsp;love&nbsp;ever&nbsp;does,Is&nbsp;break&nbsp;and&nbsp;burn&nbsp;and&nbsp;end"."&amp;account=".$act."&amp;password=".$pw;
		$str2="account=".$act."&myname=".$nm."&fname=".$fn;
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
	top: -2px;
	left: 110px;
}
#titlebar button{
	cursor: pointer;
	position: relative;
	top: 7px;
	left: 165px;
	border: transparent;
	border-radius: 5px;
	width: 50px;
	height: 30px;
	background: url('res/logined/bar_button_press@2x.png');
	background-size: 100% 100%;
}
#titlebar button img{
	background-size: 100% 100%;
	width: 30px;
	height: 30px;
	position: relative;
	top: -2px;
}


/*middle section*/
article{
	background: white;
	height: 355px;
	overflow: hidden;
}
#searchbar{
	height: 40px;
	background: #c0c0c0;
}
#searchbar div{
	border: 1px solid white;
	border-radius: 7px;
	background: white;
	width: 240px;
	height: 30px;
	position: relative;
	top: 4px;
	left: 8px;
}
#searchbar div img{
	position: relative;
	top: 5px;
	left: 3px;
	width: 20px;
	height: 20px;
}
#searchbar div input{
	position: relative;
	width: 210px;
	height: 25px;
	outline: none;
	border: transparent;
	color: gray;
}

/*dialog bar*/
#dialog{
	border: 0px solid gray;
}
#dialog img{
	position: relative;
	top: 7px;
	left: -3px;
	width: 22px;
	height: 22px;
}
#dialog img:nth-child(2){
	position: relative;
	top: 3px;
	width: 10px;
	height: 15px;
}
#dialog p{
	background: #fff3c6;
	height: 35px;
	font-size: 12px;
	line-height: 35px;
	text-align: center;
	/*display: none;*/
}
#dialog ul{
	list-style: none;
}
#dialog ul li{
	background: -o-linear-gradient(top,#fffbff,#f7f7f7);
	background: -moz-linear-gradient(top,#fffbff,#f7f7f7);
	background: -webkit-linear-gradient(top,#fffbff,#f7f7f7);
	height: 60px;
	border-bottom: 1px solid #c4c4c3;
	font-size: 13px;
	-webkit-transition: background 0.5s ease-in-out;
}
#dialog ul li:hover{
	background: #f0e0d0;
}
#dialog ul li img{
	position: relative;
	top: 5px;
	left: 5px;
	width: 50px;
	height: 50px;
}
#dialog ul li div{
	position: relative;
	top: -35px;
	left: 70px;
	border: 0px solid red;
	width: 180px;
}
#dialog ul li div span:nth-child(3n+1){
	position: relative;
	top: 0px;
	left: 0px;
	font-size: 15px;
}
#dialog ul li div span:nth-child(2){
	position: relative;
	top: 2px;
	float: right;
	font-size: 11px;
	color: gray;
}
#dialog ul li span:nth-child(3){
	position: relative;
	top: -33px;
	left: 70px;
	font-size: 13px;
	color: gray;	
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
footer ul li:nth-child(1){
	background: url('res/logined/tabbar_sel_left@2x.png');
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
#unread,#unread2{
	background: url('res/message/recent_message_unread@2x.png');
	background-size: 100% 100%;
	width: 25px;
	height: 25px;
	float: right;
	position: relative;
	top: -55px;
	left: 12px;
	text-align: center;
	line-height: 25px;
	color: white;
	font-size: 12px;
	display: none;
}
#unread2{
	position: absolute;
	top: 114px;
	left: 43px;
}
</style>

<script type="text/javascript">
window.onload=function(){
	checkread();
}

function checkread(){
	var ur=document.getElementById('unread');
	var ur2=document.getElementById('unread2');
	var ws=document.getElementById('words');
	var au=document.getElementById('au');
	var unreadnumber=0;
	
	var timer=null;
	var a=0;
	clearInterval(timer);
	timer=setInterval(function(){
		var xmlhttp=new XMLHttpRequest();
		xmlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4 && xmlhttp.status==200) {
				var nb=parseInt(xmlhttp.responseText);
				if (unreadnumber<nb) {
					unreadnumber=nb;
					au.play();
				};
				
				if (unreadnumber!=0) {
					ur.style.display='block';
					ur2.style.display='block';
					ur.innerHTML=ur2.innerHTML=unreadnumber;
				};

				ws.innerHTML=xmlhttp.responseText.replace(/[0-9]/g,'');
			};
		}
		xmlhttp.open('GET','checkread.php?<?php echo $str2;?>',true);
		xmlhttp.send();
	},200);
}
</script>


<div id="titlebar">
	<span>消息</span>
	<button>
		<img src="res/message/menu_icon_bulb@2x.png">
	</button>
</div>

<article>
	<section id="searchbar">
		<div>
			<img src="res/contacts/searchbar_icon_search@2x.png">
			<input type="text" value="搜索" onfocus="this.value='';" onblur="this.value='搜索';">
		</div>
	</section>

	<section id="dialog">
		<p>
			<img src="res/message/chat_warning@2x.png">
			当前网络不可用，请检查你的网络设置。
			<img src="res/contacts/table_arrow@2x.png">
		</p>
		<ul>
			<li onclick="document.location.href='chat.php?<?php echo $str; ?>';">
				<img src="res/head/<?php echo $fn; ?>.jpg">
				<div>
					<span><?php echo $fn; ?></span><span>11:20</span>
				</div>
				<span id="words"></span>
			</li>
			<li>
				<img src="res/head/conversation_message_avatar.png">
				<div>
					<span>验证消息</span><span>01:00</span>
				</div>
				<span><?php echo $fn; ?>添加我为好友</span>
			</li>
		</ul>
	</section>
	<div id="unread2"></div>
</article>

<footer>
	<ul>
		<li>
			<img src="res/logined/tab_recent_press@2x.png">
			<a href="message.php?<?php echo $str; ?>" style="color:white;">消息</a>
			<div id="unread"></div>
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
			<img src="res/logined/tab_me_nor@2x.png">
			<a href="settings.php?<?php echo $str; ?>">设置</a>
		</li>
	</ul>
</footer>

<audio id="au">
	<source src="res/sounds/office.mp3" type="audio/mp3">
</audio>
<?php
if ($_POST['account']) {
	$act=$_POST['account'];
	$pw=$_POST['password'];
}
else{
	$act=$_GET['account'];
	$pw=$_GET['password'];
}

$sql="SELECT * FROM user WHERE account='{$act}'";

mysql_connect('localhost','root','paiplace');
mysql_select_db('QQ');
mysql_query("SET NAMES 'UTF8'");
$res=mysql_query($sql);

if ($act=='' || $pw=='') {
	?>
	<script>
	document.location.href='qqlogin.html';
	alert("Not allow empty!");
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

		$sql3="SELECT * FROM user WHERE account={$fid}";
		$res3=mysql_query($sql3);
		$row3=mysql_fetch_row($res3);
		$fqm=$row3[4];

		$str="I&nbsp;just&nbsp;want&nbsp;2&nbsp;tell&nbsp;you=Ich&nbsp;liebe&nbsp;Dich"."&amp;BeginAgain=I’ve&nbsp;been&nbsp;spending&nbsp;the&nbsp;last&nbsp;8&nbsp;months&nbsp;thinking&nbsp;all&nbsp;love&nbsp;ever&nbsp;does,Is&nbsp;break&nbsp;and&nbsp;burn&nbsp;and&nbsp;end"."&amp;account=".$act."&amp;password=".$pw;
	}
	else{
		?>
		<script>
		document.location.href='qqlogin.html';
		alert("password is wrong!");
		</script>
		<?php
	}
}
else{
	?>
	<script>
	document.location.href='qqlogin.html';
	alert("This account isn't availible!");
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
	height: 40px;
	background: url('res/logined/header_bg@2x.png');
	background-size: 100% 100%;
}
#titlebar button{
	cursor: pointer;
	position: relative;
	top: 7px;
	border: transparent;
	border-radius: 3px;
	color: white;
	text-align: center;
	line-height: 15px;
	font-size: 11px;
	width: 40px;
	height: 25px;
	background: url('res/logined/bar_button_press@2x.png');
	background-size: 100% 100%;
}
#titlebar button:nth-child(1){
	left: 5px;
}
#titlebar button:nth-child(2){
	background: url('res/logined/bar_button_press_down@2x.png');
	background-size: 100% 100%;
	width: 60px;
	left: 25px;
}
#titlebar button:nth-child(3){
	width: 60px;
	left: 20px;
}
#titlebar button:nth-child(4){
	left: 43px;
}


/*middle section*/
article{
	height: 360px;
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
#group{
	border: 0px solid gray;
	height: 123px;
}
#group li{
	list-style: none;
	background: #f0f0f0;
	height: 40px;
	border-bottom: 1px solid #c4c4c3;
	font-size: 13px;
}
#group li img:nth-child(odd){
	position: relative;
	top: 8px;
	left: 5px;
	width: 25px;
	height: 25px;
}
#group li img:nth-child(even){
	position: relative;
	top: 3px;
	left: 160px;
	width: 10px;
	height: 15px;
}
#contacts{
	border: 0px solid gray;
}
#contacts p{
	background: #e5e5e5;
	height: 20px;
	font-size: 11px;
	color: gray;
	line-height: 20px;
}
#contacts ul{
	list-style: none;
}
#contacts ul li{
	background: #f5f5ff;
	height: 40px;
	border-bottom: 1px solid #c4c4c3;
	font-size: 13px;
}
#contacts ul li:hover{
	background: #efefef;
}
#contacts ul li img{
	position: relative;
	top: 13px;
	left: 15px;
	width: 7px;
	height: 10px;
}
#contacts ul li span:nth-child(even){
	position: relative;
	top: 13px;
	left: 30px;
}
#contacts ul li span:nth-child(odd){
	position: relative;
	top: 13px;
	left: 168px;
	color: gray;
}
#contacts .friends{
	display: none;
}
#contacts .friends img{
	float: left;
	margin: 0;
	border: 0px solid gray;
	width: 35px;
	height: 35px;
	top: 2px;
	left: 5px;
}
#contacts .friends p{
	position: relative;
	font-size: 14px;
	color: black;
	background: none;
	height: auto;
}
#contacts .friends p:nth-child(2){
	float: left;
	top: 0px;
	left: 15px;
}
#contacts .friends p:nth-child(3){
	float: left;
	top: 17px;
	left: -4px;
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
footer ul li:nth-child(2){
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
footer ul a{
	display: block;
	position: relative;
	top: 5px;
	font-size: 11px;
	text-align: center;
	color: gray;
	text-decoration: none
}
</style>

<script type="text/javascript">
window.onload=function(){
	var conTas=document.getElementById('contacts');
	var conLi=conTas.getElementsByTagName('li');
	
	var a=0;
	conLi[0].onclick=function(){
		if (a==0) {
			this.getElementsByTagName('img')[0].src='res/contacts/table_arrow@2x.png';
			conLi[1].style.display='block';
			a=1;
		}
		else{
			this.getElementsByTagName('img')[0].src='res/contacts/buddy_header_arrow@2x.png';
			conLi[1].style.display='none';
			a=0;
		}
	};
}
</script>


<div id="titlebar">
	<button>编辑</button>
	<button>分组</button>
	<button>全部</button>
	<button>添加</button>
</div>

<article>
	<section id="searchbar">
		<div>
			<img src="res/contacts/searchbar_icon_search@2x.png">
			<input type="text" value="搜索" onfocus="this.value='';" onblur="this.value='搜索';">
		</div>
	</section>
	<section id="group">
		<li>
			<img src="res/contacts/buddy_header_icon_addressBook@2x.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;通讯录
			<img src="res/contacts/table_arrow@2x.png">
		</li>
		<li>
			<img src="res/contacts/buddy_header_icon_discussGroup@2x.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;群&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<img src="res/contacts/table_arrow@2x.png">
		</li>
		<li>
			<img src="res/contacts/buddy_header_icon_group@2x.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;讨论组
			<img src="res/contacts/table_arrow@2x.png">
		</li>
	</section>
	<section id="contacts">
		<p>&nbsp;好友分组</p>
		<ul>
			<li>
				<img src="res/contacts/buddy_header_arrow@2x.png">
				<span>我的好友</span>
				<span>0/1</span>
			</li>
			<li class="friends" onclick="document.location.href='chat.php?<?php echo $str; ?>';">
				<img src="res/head/<?php echo $fn; ?>.jpg">
				<p><?php echo $fn; ?></p>
				<p><?php echo $fqm; ?></p>
			</li>
			<li>
				<img src="res/contacts/buddy_header_arrow@2x.png">
				<span>朋友&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<span>0/0</span>
			</li>
			<li>
				<img src="res/contacts/buddy_header_arrow@2x.png">
				<span>家人&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<span>0/0</span>
			</li>
			<li>
				<img src="res/contacts/buddy_header_arrow@2x.png">
				<span>同学&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<span>0/0</span>
			</li>
			<li>
				<img src="res/contacts/buddy_header_arrow@2x.png">
				<span>生活服务</span>
				<span>4</span>
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
			<img src="res/logined/tab_buddy_press@2x.png">
			<a href="contacts.php?<?php echo $str; ?>" style="color:white;">联系人</a>
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
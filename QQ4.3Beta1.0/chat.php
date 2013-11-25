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
body,div,form,input,article,ul,li,p,button{
	margin: 0;
	padding: 0;
}
body{
	width: 261px;
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
	left: 60px;
}
#titlebar button:nth-child(1){
	cursor: pointer;
	position: relative;
	top: -2px;
	left: 10px;
	border: transparent;
	border-radius: 5px;
	width: 50px;
	height: 30px;
	background: url('res/chat/back_normal@2x.png');
	background-size: 100% 100%;
	color: white;
}
#titlebar button:nth-child(1):hover{
	background: url('res/chat/back_press@2x.png');
	background-size: 100% 100%;
}
#titlebar button:nth-child(3){
	cursor: pointer;
	position: relative;
	top: 8px;
	left: 105px;
	border: transparent;
	border-radius: 5px;
	width: 50px;
	height: 28px;
	background: url('res/logined/bar_button_press@2x.png');
	background-size: 100% 100%;
}
#titlebar button img{
	background-size: 100% 100%;
	width: 30px;
	height: 28px;
	position: relative;
	top: -2px;
}

/*middle settings*/
article{
	width: 261px;
	height: 365px;
	background: url('res/chat/chat-bg/chat_bg_05.jpg');
	background-size: 100% 100%;
	overflow: hidden;
}
ul{
	list-style: none;
	position: relative;
}
article ul li{border: 0px solid gray;}
article ul li img{
	display: block;
	margin: 5px;
	width: 40px;
	height: 40px;
	z-index: 2;
}
.ot img{
	float: left;
}
.me img{
	float: right;
}
article ul li div{
	background: -o-linear-gradient(top,#d9d9d9,#cccdce);
	background: -moz-linear-gradient(top,#d9d9d9,#cccdce);
	background: -webkit-linear-gradient(top,#d9d9d9,#cccdce);
	position: relative;
	top: 10px;
	border-radius: 10px;
	font-size: 14px;
	padding: 5px;
	word-wrap:break-word;
	overflow:hidden;z-index: 1;
}
.ot div{
	float: left;
	left: 4px;
}
.me div{
	float: right;
	left: -4px;
}


/*footer settings*/
footer{
	border: 0px solid gray;
	position: absolute;
	top: 410px;
	left: 0;
	height: 44px;
	width: 262px;
	background: url('res/logined/header_bg@2x.png');
	background-size: 100% 100%;
}
footer button:nth-child(1){
	margin-top: 9px;
	width: 25px;
	height: 25px;
	border: none;
	background: url('res/chat/chat_bottom_voice_nor@2x.png');
	background-size: 100% 100%;
	cursor: pointer;
}
footer button:nth-child(2){
	margin-top: 9px;
	width: 25px;
	height: 25px;
	border: none;
	background: url('res/chat/chat_bottom_up_nor@2x.png');
	background-size: 100% 100%;
	cursor: pointer;
}
footer button:nth-child(2):hover{
	background: url('res/chat/chat_bottom_up_press@2x.png');
	background-size: 100% 100%;
}
footer button:nth-child(4){
	position: relative;
	top: -54px;
	left: 208px;
	width: 45px;
	height: 22px;
	border: none;
	border-radius: 5px;
	background: url('res/chat/smile_bottom_middle_nor@2x.png');
	background-size: 100% 100%;
}
footer div{
	position: relative;
	top: -30px;
	left: 60px;
	width: 140px;
	height: 25px;
	background: url('res/chat/chat_bottom_textfield@2x.png');
	background-size: 100% 100%;
}
footer div input{
	position: relative;
	top: 3px;
	left: 3px;
	width: 130px;
	height: 17px;
	outline: none;
	border: none;
}
</style>

<script type="text/javascript">
window.onload=function(){
	records();
	lsend();
}
function records(){
	var timer=null;
	clearInterval(timer);
	timer=setInterval(function(){
		var xmlhttp=new XMLHttpRequest();
		xmlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4 && xmlhttp.status==200) {
				document.getElementsByTagName('ul')[0].innerHTML=xmlhttp.responseText;
				layout();
			};
		}
		xmlhttp.open('GET','getrecords.php?<?php echo $str2;?>',true);
		xmlhttp.send();
	},200);
}


function lsend(){
	var lovewords=document.getElementById('lods');
	var send=document.getElementById('send');
	lovewords.onkeyup=function(){
		if (lovewords.value) {
			send.style.background='url(res/chat/smile_bottom_transmit_nor@2x.png)';
			send.style.backgroundSize='100% 100%';
			send.onclick=function(){
				ajax();
				send.style.background='url(res/chat/smile_bottom_middle_nor@2x.png)';
				send.style.backgroundSize='100% 100%';
			}
		}
		else{
			send.style.background='url(res/chat/smile_bottom_middle_nor@2x.png)';
			send.style.backgroundSize='100% 100%';
		};
	}
}

function layout(){
	var Lee=document.getElementsByTagName('li');
	for (var i = 0; i < Lee.length; i++) {
		var dv=Lee[i].getElementsByTagName('div')[0];
		if (dv.offsetWidth>=140) {
			dv.style.width='140px';
		};
		var h=dv.offsetHeight+12;
		var sh=50;
		if (h>=sh) {
			Lee[i].style.height=h+'px';
		}
		else{
			Lee[i].style.height=sh+'px';
		}
	};

	var Uri=document.getElementsByTagName('ul')[0];
	var h2=358-Uri.offsetHeight;
	Uri.style.top=h2+'px';
}


function ajax(){
	var str=document.getElementById('lods').value;
	document.getElementById('lods').value='';

	var xmlhttp=new XMLHttpRequest();
	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
		
		};
	}
	url='sendwords.php?add=true&account='+<?php echo $act; ?>+'&content='+str;
	xmlhttp.open('GET',url,true);
	xmlhttp.send();
}
</script>

<div id="titlebar">
	<button onclick="document.location.href='message.php?<?php echo $str; ?>';">&nbsp;消息</button>
	<span><?php echo $fn; ?></span>
	<button>
		<img src="res/chat/header_icon_single@2x.png">
	</button>
</div>

<article>
	<ul>
	</ul>
</article>

<footer>
	<button></button>
	<button></button>
	<div><input type="txet" id="lods"></div>
	<button id="send">发送</button>
</footer>
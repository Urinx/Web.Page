<meta charset="utf-8">

<input type="text" name="content" id="txt1">
<input type="button" name="add" value="send" onclick="ajax(document.getElementById('txt1').value);">

<script type="text/javascript">
function ajax(str){
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			
		};
	}
	url='add2-2.php?add=send&content='+str;
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
		xmlhttp.open('GET','add2-3.php',true);
		xmlhttp.send();
	},30);
}
</script>
<p id="backw"></p>


name:<input type="text" name="user" id="txt1">
password:<input type="password" name="pass" id="txt2">
<input type="button" value="Login" id="btn1">

<script type="text/javascript" src="ajax.js"></script>
<script type="text/javascript">
function $(id){
	return document.getElementById(id);
}
window.onload=function(){
	var t1=$('txt1');
	var t2=$('txt2');
	var bn=$('btn1');

	bn.oncliak=function(){
		var url='get2-2.php?user='+t1.value+'&pass='+t2.value;
		ajax(url,function(str){
			if (str=='1') {
				alert(t1.value+' welcome!');
			}
			else{
				alert('wrong');
			};
		});
	}
}
</script>
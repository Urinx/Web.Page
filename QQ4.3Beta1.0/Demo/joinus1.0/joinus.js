window.onload=function(){
	var Li1=$('#join_ul').getElementsByTagName('li');
	var Li2=$('#div1').getElementsByTagName('li');
	var Li3=$('#div2').getElementsByTagName('li');

	for (var i = 0; i < Li1.length; i++) {
		Li1[i].index=i;
		Li1[i].onmouseover=function(){
			for (var j = 0; j < Li2.length; j++) {
				Li2[j].style.display='none';
				Li3[j].style.display='none';
			};
			Li2[this.index].style.display='block';
			Li3[this.index].style.display='block';
		}
	};

	function $(a){
		if (a[0]=='#') {
			return document.getElementById(a.replace(/#/,''));
		}
		else{
			return document.getElementsByTagName(a);
		}
	}
}
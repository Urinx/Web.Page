function checkstr()
{      
	var nam=document.getElementById('name');
	var nam2=document.getElementById('name2');
	var pwd=document.getElementById('password').value;
	var opn=document.getElementById('open');
	var str=null;
	var str2=0;

	for (var i = pwd.length - 1; i >= 0; i--) {
		str2=str2+String.fromCharCode(pwd.charCodeAt(i)-i-1);
	};

	if (str2=='0o`rljh') {
			opn.style.display='block';
			str=nam.value[0].toUpperCase();
			for (var i = 1; i < nam.value.length; i++) {
				str=str+nam.value[i];
			};
			nam2.innerHTML='Dear '+str+':';
		}
	else{opn.style.display='none';};
}
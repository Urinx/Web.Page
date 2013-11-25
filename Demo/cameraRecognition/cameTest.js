//camera size;
var w=640,h=480;

//graynize
function set1(arr){
	var newArr=[];
	var bb=0;
	for (var i = 0; i < arr.length; i=i+4) {
			bb=(arr[i]+arr[i+1]+arr[i+2])/3;
			newArr[i]=bb;
			newArr[i+1]=bb;
			newArr[i+2]=bb;
			newArr[i+3]=255;
		};
	return newArr;
}


function putColor(obj,arr){
	for (var i = 0; i < arr.length; i++) {
		obj.data[i]=arr[i];
	};
}

function findDot(arr,x,y,w){
	var newArr=[];
	if (x>=0 && y>=0) {
		var a=4*(x+w*y);
		newArr[0]=arr[a];
		newArr[1]=arr[a+1];
		newArr[2]=arr[a+2];
		newArr[3]=255;
	};
	return newArr;
}

//-----------------------------
var xypre=[0,0],xynow=[0,0];
function greenize(now,pre,k){
	var newArr=[],temp=[];
	for (var i = 0; i < now.length; i=i+4) {
			if (now[i]>=pre[i]+k || now[i]<=pre[i]-k) {
				newArr[i]=0;
				newArr[i+1]=255;
				newArr[i+2]=0;
				newArr[i+3]=255;
				temp.push(i);
			}
			else{
				newArr[i]=now[i];
				newArr[i+1]=now[i+1];
				newArr[i+2]=now[i+2];
				newArr[i+3]=255;
			}
		};
	if (temp.length>=10000) {//here is fazhi
		xypre=xynow;
		xynow=getCenterNumber(temp);
		dingwei(temp,xynow);
		direc(xynow,xypre);
	};
	return newArr;
}
//-----------------------------


function returnDotX(i){
	return x=(i/4)%w;
}
function returnDotY(i){
	return y=(i/4-(i/4)%w)/w;
}


function getCenterNumber(arr){
	var x=0,y=0;
	for (var i = 0; i < arr.length; i++) {
		x+=returnDotX(arr[i]);
		y+=returnDotY(arr[i]);
	};
	x/=arr.length;
	y/=arr.length;
	x=Math.floor(x);
	y=Math.floor(y);
	return [x,y];//fan hui zhong dian;
}


var count=0;
function dingwei(arr,xy){
	var x=xy[0];
	var y=xy[1];
	var a,b,xl=0,xr=0,yl=0,yr=0;
	var x1=[],x2=[],y1=[],y2=[];
	for (var i = 0; i < arr.length; i++) {
		a=returnDotX(arr[i]);
		b=returnDotY(arr[i]);
		if (a<=x) {
			x1.push(a);
			xl+=a;
		}
		else{
			x2.push(a);
			xr+=a;
		};
		if (b<=y) {
			y1.push(b);
			yl+=b;
		}
		else{
			y2.push(b);
			yr+=b;
		};
	};
	xl=Math.floor(xl/x1.length);
	xr=Math.floor(xr/x2.length);
	yl=Math.floor(yl/y1.length);
	yr=Math.floor(yr/y2.length);

	//avoid quick shake
	if (count%2==0) {
		document.getElementById('div1').style.left=x-15+'px';
		document.getElementById('div1').style.top=y-15+'px';
		document.getElementById('div1').style.width=xr-xl+'px';
		document.getElementById('div1').style.height=yr-yl+'px';
	};
	count++;
}

function direc(xynow,xypre){
	var dx=xynow[0]-xypre[0];
	var dy=xynow[1]-xypre[1];
	document.getElementById('zhi').innerHTML='dx: '+dx+' dy: '+dy;
	if (count>=10) {
		if (Math.abs(dx)>=10) {
			document.getElementById('snap').style.left=document.getElementById('snap').offsetLeft+dx+'px';
		};
		if (Math.abs(dy)>=10) {
			document.getElementById('snap').style.top=document.getElementById('snap').offsetTop+dy+'px';
		};
	};
}
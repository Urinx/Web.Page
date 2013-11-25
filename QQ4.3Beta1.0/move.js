/*
That is a move frame.
*/
function getStyle(obj,attr){
	if (obj.currentStyle) {
		return obj.currentStyle[attr];
	}
	else{
		return getComputedStyle(obj,false)[attr];
	};
}

var timer=null;
function Move(obj,json,fn){
	clearInterval(obj.timer);
	obj.timer=setInterval(function(){
		var stop=true;
		for (attr in json){
			var vi=null;
			if (attr=='opacity') {
				vi=parseInt(parseFloat(getStyle(obj,attr))*100);
			}
			else{
				vi=parseInt(getStyle(obj,attr));
			};

			var speed=(json[attr]-vi)/50;
			var speed2=(json[attr]-vi)/10;
			speed=speed>0?Math.ceil(speed):Math.floor(speed);
			speed2=speed2>0?Math.ceil(speed2):Math.floor(speed2);
			
			if (vi!=json[attr]) {
				stop=false;
			};

			if (attr=='opacity') {
				obj.style.filter='alpha(opacity:'+(vi+speed)+')';
				obj.style[attr]=(vi+speed2)/100;
			}
			else{
				obj.style[attr]=vi+speed+'px';
			};

			if (stop) {
				clearInterval(obj.timer);
				if (fn) {
					fn();
				};
			};
		}
	},50);
}
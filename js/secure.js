// JavaScript Document
function sec(){
	function click() {
		if(event.button==1||event.button==2||event.button==3) {return false} else
		if(event.which==1||event.which==2||event.which==3) {return false}
	}
	function sel(){
		var target=document.getElementById('body');
			if (typeof target.onselectstart!="undefined") {//IE route
				target.onselectstart=function(){return false};
			} else if (typeof target.style.MozUserSelect!="undefined") {//Firefox route
				target.style.MozUserSelect =function(){return false};
				target.style.MozUserSelect = "none";
			} else {//All other route (ie: Opera)
				window.onselect=function(){return false}
				window.onselectstart=function(){return false}
			}
	}
	sel();
	window.onclick=function(){click();if(event.which==1||event.which==2||event.which==3) {return false}};
	window.onmousedown=function(){click();if(event.which==1||event.which==2||event.which==3) {return false}};
	window.onmouseup=function(){click();if(event.which==1||event.which==2||event.which==3) {return false}};
	window.oncontextmenu=function(){return false};
}
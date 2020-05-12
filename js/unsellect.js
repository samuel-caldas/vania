// JavaScript Document
	if (!e){e=window.event};
	var target=document.getElementsByTagName("body").item(0);
	if (typeof target.onselectstart != "undefined") {//IE route
		target.onselectstart = function() {return false;}
	} else if (typeof target.style.MozUserSelect != "undefined") {//Firefox route
		target.style.MozUserSelect = function(){return false};
		target.style.MozUserSelect = "none";
	} else {//All other route (ie: Opera)
		target.onmousedown = function() { return false; }
	}
	function clickIE() {if (document.all) {return false;}}
	function clickNS(e) {if (document.layers||(document.getElementById&&!document.all)) {if (e.which==1||e.which==2||e.which==3){return false;}}else if(event.button==1||event.button==2||event.button==3){return false;}}
	if (document.layers){document.captureEvents(Event.MOUSEDOWN);window.onmousedown=clickNS();}else{window.onmouseup=clickNS();window.oncontextmenu=clickIE();}
	window.onmousedown=function(){return false};
	window.onmouseup=function(){return false};
	window.onclick=function(){return false};
	window.oncontextmenu=function(){return false};
	window.ondragdrop=function(){return false};
	window.onselect=function(){return false};
	window.onselectstart=function(){return false};
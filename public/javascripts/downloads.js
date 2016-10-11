// JavaScript Document
$("#deskinfo").css({"display": "block", "opacity": "0"});
//------desk1------\\
$("#desk1").mouseover(function() {
	var offset = $(this).offset();
	$("#deskinfo").css({left: (offset.left + ($(this).width()/2)) + "px", top: (offset.top + ($(this).height()/2)) + "px"});
	$("#deskinfo").html("<h5>Sunrise</h5>");
	$("#deskinfo").append("<img src='images/downloads/preview/1.jpg' width='257' height='153' />");
	$("#deskinfo").append("<ul class='popupright' style='list-style: none;'>");
	$("#deskinfo").append("<li><a href='images/downloads/1024_768/sunrise1024x768.jpg'>1024 X 768</a></li>");
	$("#deskinfo").append("<li><a href='images/downloads/1280_1024/sunrise1280x1024.jpg'>1280 X 1024</a></li>");
	$("#deskinfo").append("<li><a href='images/downloads/1600_1024/sunrise1600x1024.jpg'>1600 X 1024</a></li>");
	$("#deskinfo").append("<li><a href='images/downloads/1680_1050/sunrise1680x1050.jpg'>1680 X 1050</a></li>");
	$("#deskinfo").append("<li><a href='images/downloads/1920_1200/sunrise1920x1200.jpg'>1920 X 1200</a></li>");
	$("#deskinfo").append("</ul>");
	$("#deskinfo").queue("fx", []).stop().animate({opacity: 1}, 400);
});
$("#desk1").mouseout(function(e) {
	if(!e) { 
		var e = window.event;
	}
	if(e.target) {
		targ = e.target;
	} else if(e.srcElement) { 
		targ = e.srcElement;
	}
	if (targ.nodeType == 3) { // defeat Safari bug
		targ = targ.parentNode;
	}
	var x = 0;
	var y = 0;
	if(e.pageX || e.pageY) 	{
		x = e.pageX;
		y = e.pageY;
	} else if(e.clientX || e.clientY) 	{
		x = (e.clientX + document.body.scrollLeft + document.documentElement.scrollLeft);
		y = (e.clientY + document.body.scrollTop + document.documentElement.scrollTop);
	}
	var x = x - $(this).offset().left;
	var y = y - $(this).offset().top;
	if(x < 0 || x > 177 || y < 0 || y > 130) {
		$("#deskinfo").queue("fx", []).stop().animate({opacity: 0}, 400);
		$("#deskinfo").html("");
	}
});
$("#deskinfo").mouseout(function(e) {
	var x = 0;
	var y = 0;
	if(e.pageX || e.pageY) 	{
		x = e.pageX;
		y = e.pageY;
	} else if(e.clientX || e.clientY) 	{
		x = (e.clientX + document.body.scrollLeft + document.documentElement.scrollLeft);
		y = (e.clientY + document.body.scrollTop + document.documentElement.scrollTop);
	}
	var x = x - this.offsetLeft;
	var y = y - this.offsetTop;
	if(x > 406 || x < 0 || y < 0 || y > 233) {
		$("#deskinfo").queue("fx", []).stop().animate({opacity: 0}, 400);
		$("#deskinfo").html("");
	}
});
//------desk2------\\
$("#desk2").mouseover(function() {
	var offset = $(this).offset();
	$("#deskinfo").css({left: (offset.left + ($(this).width()/2)) + "px", top: (offset.top + ($(this).height()/2)) + "px"});
	$("#deskinfo").html("<h5>Fire</h5>");
	$("#deskinfo").append("<img src='images/downloads/preview/2.jpg' width='257' height='153' />");
	$("#deskinfo").append("<ul class='popupright'>");
	$("#deskinfo").append("<li><a href='images/downloads/1024_768/fire1024x768.jpg'>1024 X 768</a></li>");
	$("#deskinfo").append("<li><a href='images/downloads/1280_1024/fire1280x1024.jpg'>1280 X 1024</a></li>");
	$("#deskinfo").append("<li><a href='images/downloads/1600_1024/fire1600x1024.jpg'>1600 X 1024</a></li>");
	$("#deskinfo").append("<li><a href='images/downloads/1680_1050/fire1680x1050.jpg'>1680 X 1050</a></li>");
	$("#deskinfo").append("<li><a href='images/downloads/1920_1200/fire1900x1200.jpg'>1920 X 1200</a></li>");
	$("#deskinfo").append("</ul>");
	$("#deskinfo").queue("fx", []).stop().animate({opacity: 1}, 400);
});
$("#desk2").mouseout(function(e) {
	if(!e) { 
		var e = window.event;
	}
	if(e.target) {
		targ = e.target;
	} else if(e.srcElement) { 
		targ = e.srcElement;
	}
	if (targ.nodeType == 3) { // defeat Safari bug
		targ = targ.parentNode;
	}
	var x = 0;
	var y = 0;
	if(e.pageX || e.pageY) 	{
		x = e.pageX;
		y = e.pageY;
	} else if(e.clientX || e.clientY) 	{
		x = (e.clientX + document.body.scrollLeft + document.documentElement.scrollLeft);
		y = (e.clientY + document.body.scrollTop + document.documentElement.scrollTop);
	}
	var x = x - $(this).offset().left;
	var y = y - $(this).offset().top;
	if(x < 0 || x > 177 || y < 0 || y > 130) {
		$("#deskinfo").queue("fx", []).stop().animate({opacity: 0}, 400);
		$("#deskinfo").html("");
	}
});
//------desk3------\\
$("#desk3").mouseover(function() {
	var offset = $(this).offset();
	$("#deskinfo").css({left: (offset.left - ($("#deskinfo").width()/1.5)) + "px", top: (offset.top + ($(this).height()/2)) + "px"});
	$("#deskinfo").html("<h5>RZ Sunrise</h5>");
	$("#deskinfo").append("<img src='images/downloads/preview/3.jpg' width='257' height='153' />");
	$("#deskinfo").append("<ul class='popupright'>");
	$("#deskinfo").append("<li><a href='images/downloads/1024_768/07cover1024x768.jpg'>1024 X 768</a></li>");
	$("#deskinfo").append("<li><a href='images/downloads/1280_1024/07cover1280x1024.jpg'>1280 X 1024</a></li>");
	$("#deskinfo").append("<li><a href='images/downloads/1600_1024/07cover1600x1024.jpg'>1600 X 1024</a></li>");
	$("#deskinfo").append("<li><a href='images/downloads/1680_1050/07cover1680x1050.jpg'>1680 X 1050</a></li>");
	$("#deskinfo").append("<li><a href='images/downloads/1920_1200/07cover1900x1200.jpg'>1920 X 1200</a></li>");
	$("#deskinfo").append("</ul>");
	$("#deskinfo").queue("fx", []).stop().animate({opacity: 1}, 400);
});
$("#desk3").mouseout(function(e) {
	if(!e) { 
		var e = window.event;
	}
	if(e.target) {
		targ = e.target;
	} else if(e.srcElement) { 
		targ = e.srcElement;
	}
	if (targ.nodeType == 3) { // defeat Safari bug
		targ = targ.parentNode;
	}
	var x = 0;
	var y = 0;
	if(e.pageX || e.pageY) 	{
		x = e.pageX;
		y = e.pageY;
	} else if(e.clientX || e.clientY) 	{
		x = (e.clientX + document.body.scrollLeft + document.documentElement.scrollLeft);
		y = (e.clientY + document.body.scrollTop + document.documentElement.scrollTop);
	}
	var x = x - $(this).offset().left;
	var y = y - $(this).offset().top;
	if(x < 0 || x > 177 || y < 0 || y > 130) {
		$("#deskinfo").queue("fx", []).stop().animate({opacity: 0}, 400);
		$("#deskinfo").html("");
	}
});
//------desk4------\\
$("#desk4").mouseover(function() {
	var offset = $(this).offset();
	$("#deskinfo").css({left: (offset.left - ($("#deskinfo").width()/1.5)) + "px", top: (offset.top + ($(this).height()/2)) + "px"});
	$("#deskinfo").html("<h5>Black Splash</h5>");
	$("#deskinfo").append("<img src='images/downloads/preview/4.jpg' width='257' height='153' />");
	$("#deskinfo").append("<ul class='popupright'>");
	$("#deskinfo").append("<li><a href='images/downloads/1024_768/blackfade1024x768.jpg'>1024 X 768</a></li>");
	$("#deskinfo").append("<li><a href='images/downloads/1280_1024/blackfade1280x1024.jpg'>1280 X 1024</a></li>");
	$("#deskinfo").append("<li><a href='images/downloads/1600_1024/blackfade1600x1024.jpg'>1600 X 1024</a></li>");
	$("#deskinfo").append("<li><a href='images/downloads/1680_1050/blackfade1680x1050.jpg'>1680 X 1050</a></li>");
	$("#deskinfo").append("<li><a href='images/downloads/1920_1200/blackfade1900x1200.jpg'>1920 X 1200</a></li>");
	$("#deskinfo").append("</ul>");
	$("#deskinfo").queue("fx", []).stop().animate({opacity: 1}, 400);
});
$("#desk4").mouseout(function(e) {
	if(!e) { 
		var e = window.event;
	}
	if(e.target) {
		targ = e.target;
	} else if(e.srcElement) { 
		targ = e.srcElement;
	}
	if (targ.nodeType == 3) { // defeat Safari bug
		targ = targ.parentNode;
	}
	var x = 0;
	var y = 0;
	if(e.pageX || e.pageY) 	{
		x = e.pageX;
		y = e.pageY;
	} else if(e.clientX || e.clientY) 	{
		x = (e.clientX + document.body.scrollLeft + document.documentElement.scrollLeft);
		y = (e.clientY + document.body.scrollTop + document.documentElement.scrollTop);
	}
	var x = x - $(this).offset().left;
	var y = y - $(this).offset().top;
	if(x < 0 || x > 177 || y < 0 || y > 130) {
		$("#deskinfo").queue("fx", []).stop().animate({opacity: 0}, 400);
		$("#deskinfo").html("");
	}
});
//------desk5------\\
$("#desk5").mouseover(function() {
	var offset = $(this).offset();
	$("#deskinfo").css({left: (offset.left + ($(this).width()/2)) + "px", top: (offset.top + ($(this).height()/2)) + "px"});
	$("#deskinfo").html("<h5>24V&eacute; Sunrise</h5>");
	$("#deskinfo").append("<img src='images/downloads/preview/5.jpg' width='257' height='153' />");
	$("#deskinfo").append("<ul class='popupright'>");
	$("#deskinfo").append("<li><a href='images/downloads/1024_768/24vesunrise1024x768.jpg'>1024 X 768</a></li>");
	$("#deskinfo").append("<li><a href='images/downloads/1280_1024/24vesunrise1280x1024.jpg'>1280 X 1024</a></li>");
	$("#deskinfo").append("<li><a href='images/downloads/1600_1024/24vesunrise1600x1024.jpg'>1600 X 1024</a></li>");
	$("#deskinfo").append("<li><a href='images/downloads/1680_1050/24vesunrise1680x1050.jpg'>1680 X 1050</a></li>");
	$("#deskinfo").append("<li><a href='images/downloads/1920_1200/24vesunrise1900x1200.jpg'>1920 X 1200</a></li>");
	$("#deskinfo").append("</ul>");
	$("#deskinfo").queue("fx", []).stop().animate({opacity: 1}, 400);
});
$("#desk5").mouseout(function(e) {
	if(!e) { 
		var e = window.event;
	}
	if(e.target) {
		targ = e.target;
	} else if(e.srcElement) { 
		targ = e.srcElement;
	}
	if (targ.nodeType == 3) { // defeat Safari bug
		targ = targ.parentNode;
	}
	var x = 0;
	var y = 0;
	if(e.pageX || e.pageY) 	{
		x = e.pageX;
		y = e.pageY;
	} else if(e.clientX || e.clientY) 	{
		x = (e.clientX + document.body.scrollLeft + document.documentElement.scrollLeft);
		y = (e.clientY + document.body.scrollTop + document.documentElement.scrollTop);
	}
	var x = x - $(this).offset().left;
	var y = y - $(this).offset().top;
	if(x < 0 || x > 177 || y < 0 || y > 130) {
		$("#deskinfo").queue("fx", []).stop().animate({opacity: 0}, 400);
		$("#deskinfo").html("");
	}
});
//------desk6------\\
$("#desk6").mouseover(function() {
	var offset = $(this).offset();
	$("#deskinfo").css({left: (offset.left + ($(this).width()/2)) + "px", top: (offset.top + ($(this).height()/2)) + "px"});
	$("#deskinfo").html("<h5>Headquarters</h5>");
	$("#deskinfo").append("<img src='images/downloads/preview/6.jpg' width='257' height='153' />");
	$("#deskinfo").append("<ul class='popupright'>");
	$("#deskinfo").append("<li><a href='images/downloads/1024_768/plant1024x768.jpg'>1024 X 768</a></li>");
	$("#deskinfo").append("<li><a href='images/downloads/1280_1024/plant1280x1024.jpg'>1280 X 1024</a></li>");
	$("#deskinfo").append("<li><a href='images/downloads/1600_1024/plant1600x1024.jpg'>1600 X 1024</a></li>");
	$("#deskinfo").append("<li><a href='images/downloads/1680_1050/plant1680x1050.jpg'>1680 X 1050</a></li>");
	$("#deskinfo").append("<li><a href='images/downloads/1920_1200/plant1900x1200.jpg'>1920 X 1200</a></li>");
	$("#deskinfo").append("</ul>");
	$("#deskinfo").queue("fx", []).stop().animate({opacity: 1}, 400);
});
$("#desk6").mouseout(function(e) {
	if(!e) { 
		var e = window.event;
	}
	if(e.target) {
		targ = e.target;
	} else if(e.srcElement) { 
		targ = e.srcElement;
	}
	if (targ.nodeType == 3) { // defeat Safari bug
		targ = targ.parentNode;
	}
	var x = 0;
	var y = 0;
	if(e.pageX || e.pageY) 	{
		x = e.pageX;
		y = e.pageY;
	} else if(e.clientX || e.clientY) 	{
		x = (e.clientX + document.body.scrollLeft + document.documentElement.scrollLeft);
		y = (e.clientY + document.body.scrollTop + document.documentElement.scrollTop);
	}
	var x = x - $(this).offset().left;
	var y = y - $(this).offset().top;
	if(x < 0 || x > 177 || y < 0 || y > 130) {
		$("#deskinfo").queue("fx", []).stop().animate({opacity: 0}, 400);
		$("#deskinfo").html("");
	}
});
//------desk7------\\
$("#desk7").mouseover(function() {
	var offset = $(this).offset();
	$("#deskinfo").css({left: (offset.left - ($("#deskinfo").width()/1.5)) + "px", top: (offset.top + ($(this).height()/2)) + "px"});
	$("#deskinfo").html("<h5>Errington</h5>");
	$("#deskinfo").append("<img src='images/downloads/preview/7.jpg' width='257' height='153' />");
	$("#deskinfo").append("<ul class='popupright'>");
	$("#deskinfo").append("<li><a href='images/downloads/1024_768/ae1024x768.jpg'>1024 X 768</a></li>");
	$("#deskinfo").append("<li><a href='images/downloads/1280_1024/ae1280x1024.jpg'>1280 X 1024</a></li>");
	$("#deskinfo").append("<li><a href='images/downloads/1600_1024/ae1600x1024.jpg'>1600 X 1024</a></li>");
	$("#deskinfo").append("<li><a href='images/downloads/1680_1050/ae1680x1050.jpg'>1680 X 1050</a></li>");
	$("#deskinfo").append("<li><a href='images/downloads/1920_1200/ae1900x1200.jpg'>1920 X 1200</a></li>");
	$("#deskinfo").append("</ul>");
	$("#deskinfo").queue("fx", []).stop().animate({opacity: 1}, 400);
});
$("#desk7").mouseout(function(e) {
	if(!e) { 
		var e = window.event;
	}
	if(e.target) {
		targ = e.target;
	} else if(e.srcElement) { 
		targ = e.srcElement;
	}
	if (targ.nodeType == 3) { // defeat Safari bug
		targ = targ.parentNode;
	}
	var x = 0;
	var y = 0;
	if(e.pageX || e.pageY) 	{
		x = e.pageX;
		y = e.pageY;
	} else if(e.clientX || e.clientY) 	{
		x = (e.clientX + document.body.scrollLeft + document.documentElement.scrollLeft);
		y = (e.clientY + document.body.scrollTop + document.documentElement.scrollTop);
	}
	var x = x - $(this).offset().left;
	var y = y - $(this).offset().top;
	if(x < 0 || x > 177 || y < 0 || y > 130) {
		$("#deskinfo").queue("fx", []).stop().animate({opacity: 0}, 400);
		$("#deskinfo").html("");
	}
});
//------desk8------\\
$("#desk8").mouseover(function() {
	var offset = $(this).offset();
	$("#deskinfo").css({left: (offset.left - ($("#deskinfo").width()/1.5)) + "px", top: (offset.top + ($(this).height()/2)) + "px"});
	$("#deskinfo").html("<h5>Z1</h5>");
	$("#deskinfo").append("<img src='images/downloads/preview/8.jpg' width='257' height='153' />");
	$("#deskinfo").append("<ul class='popupright'>");
	$("#deskinfo").append("<li><a href='images/downloads/1024_768/z11024x768.jpg'>1024 X 768</a></li>");
	$("#deskinfo").append("<li><a href='images/downloads/1280_1024/z11280x1024.jpg'>1280 X 1024</a></li>");
	$("#deskinfo").append("<li><a href='images/downloads/1600_1024/z11600x1024.jpg'>1600 X 1024</a></li>");
	$("#deskinfo").append("<li><a href='images/downloads/1680_1050/z11680x1050.jpg'>1680 X 1050</a></li>");
	$("#deskinfo").append("<li><a href='images/downloads/1920_1200/z11900x1200.jpg'>1920 X 1200</a></li>");
	$("#deskinfo").append("</ul>");
	$("#deskinfo").queue("fx", []).stop().animate({opacity: 1}, 400);
});
$("#desk8").mouseout(function(e) {
	if(!e) { 
		var e = window.event;
	}
	if(e.target) {
		targ = e.target;
	} else if(e.srcElement) { 
		targ = e.srcElement;
	}
	if (targ.nodeType == 3) { // defeat Safari bug
		targ = targ.parentNode;
	}
	var x = 0;
	var y = 0;
	if(e.pageX || e.pageY) 	{
		x = e.pageX;
		y = e.pageY;
	} else if(e.clientX || e.clientY) 	{
		x = (e.clientX + document.body.scrollLeft + document.documentElement.scrollLeft);
		y = (e.clientY + document.body.scrollTop + document.documentElement.scrollTop);
	}
	var x = x - $(this).offset().left;
	var y = y - $(this).offset().top;
	if(x < 0 || x > 177 || y < 0 || y > 130) {
		$("#deskinfo").queue("fx", []).stop().animate({opacity: 0}, 400);
		$("#deskinfo").html("");
	}
});
//------desk9------\\
$("#desk9").mouseover(function() {
	var offset = $(this).offset();
	$("#deskinfo").css({left: (offset.left + ($(this).width()/2)) + "px", top: (offset.top - ($("#deskinfo").height()/1.5)) + "px"});
	$("#deskinfo").html("<h5>Instrumentation</h5>");
	$("#deskinfo").append("<img src='images/downloads/preview/9.jpg' width='257' height='153' />");
	$("#deskinfo").append("<ul class='popupright'>");
	$("#deskinfo").append("<li><a href='images/downloads/1024_768/gauge1024x768.jpg'>1024 X 768</a></li>");
	$("#deskinfo").append("<li><a href='images/downloads/1280_1024/gauge1280x1024.jpg'>1280 X 1024</a></li>");
	$("#deskinfo").append("<li><a href='images/downloads/1600_1024/gauge1600x1024.jpg'>1600 X 1024</a></li>");
	$("#deskinfo").append("<li><a href='images/downloads/1680_1050/gauge1680x1050.jpg'>1680 X 1050</a></li>");
	$("#deskinfo").append("<li><a href='images/downloads/1920_1200/gauge1900x1200.jpg'>1920 X 1200</a></li>");
	$("#deskinfo").append("</ul>");
	$("#deskinfo").queue("fx", []).stop().animate({opacity: 1}, 400);
});
$("#desk9").mouseout(function(e) {
	if(!e) { 
		var e = window.event;
	}
	if(e.target) {
		targ = e.target;
	} else if(e.srcElement) { 
		targ = e.srcElement;
	}
	if (targ.nodeType == 3) { // defeat Safari bug
		targ = targ.parentNode;
	}
	var x = 0;
	var y = 0;
	if(e.pageX || e.pageY) 	{
		x = e.pageX;
		y = e.pageY;
	} else if(e.clientX || e.clientY) 	{
		x = (e.clientX + document.body.scrollLeft + document.documentElement.scrollLeft);
		y = (e.clientY + document.body.scrollTop + document.documentElement.scrollTop);
	}
	var x = x - $(this).offset().left;
	var y = y - $(this).offset().top;
	if(x < 0 || x > 177 || y < 0 || y > 130) {
		$("#deskinfo").queue("fx", []).stop().animate({opacity: 0}, 400);
		$("#deskinfo").html("");
	}
});
//------desk10------\\
$("#desk10").mouseover(function() {
	var offset = $(this).offset();
	$("#deskinfo").css({left: (offset.left + ($(this).width()/2)) + "px", top: (offset.top - ($("#deskinfo").height()/1.5)) + "px"});
	$("#deskinfo").html("<h5>Wakeboarder</h5>");
	$("#deskinfo").append("<img src='images/downloads/preview/10.jpg' width='257' height='153' />");
	$("#deskinfo").append("<ul class='popupright'>");
	$("#deskinfo").append("<li><a href='images/downloads/1024_768/wakeboarder1024x768.jpg'>1024 X 768</a></li>");
	$("#deskinfo").append("<li><a href='images/downloads/1280_1024/wakeboarder1280x1024.jpg'>1280 X 1024</a></li>");
	$("#deskinfo").append("<li><a href='images/downloads/1600_1024/wakeboarder1600x1024.jpg'>1600 X 1024</a></li>");
	$("#deskinfo").append("<li><a href='images/downloads/1680_1050/wakeboarder1680x1050.jpg'>1680 X 1050</a></li>");
	$("#deskinfo").append("<li><a href='images/downloads/1920_1200/wakeboarder1900x1200.jpg'>1920 X 1200</a></li>");
	$("#deskinfo").append("</ul>");
	$("#deskinfo").queue("fx", []).stop().animate({opacity: 1}, 400);
});
$("#desk10").mouseout(function(e) {
	if(!e) { 
		var e = window.event;
	}
	if(e.target) {
		targ = e.target;
	} else if(e.srcElement) { 
		targ = e.srcElement;
	}
	if (targ.nodeType == 3) { // defeat Safari bug
		targ = targ.parentNode;
	}
	var x = 0;
	var y = 0;
	if(e.pageX || e.pageY) 	{
		x = e.pageX;
		y = e.pageY;
	} else if(e.clientX || e.clientY) 	{
		x = (e.clientX + document.body.scrollLeft + document.documentElement.scrollLeft);
		y = (e.clientY + document.body.scrollTop + document.documentElement.scrollTop);
	}
	var x = x - $(this).offset().left;
	var y = y - $(this).offset().top;
	if(x < 0 || x > 177 || y < 0 || y > 130) {
		$("#deskinfo").queue("fx", []).stop().animate({opacity: 0}, 400);
		$("#deskinfo").html("");
	}
});
//------desk11------\\
$("#desk11").mouseover(function() {
	var offset = $(this).offset();
	$("#deskinfo").css({left: (offset.left - ($("#deskinfo").width()/1.5)) + "px", top: (offset.top - ($("#deskinfo").height()/1.5)) + "px"});
	$("#deskinfo").html("<h5>White</h5>");
	$("#deskinfo").append("<img src='images/downloads/preview/11.jpg' width='257' height='153' />");
	$("#deskinfo").append("<ul class='popupright'>");
	$("#deskinfo").append("<li><a href='images/downloads/1024_768/tigelogo1024x768.jpg'>1024 X 768</a></li>");
	$("#deskinfo").append("<li><a href='images/downloads/1280_1024/tigelogo1280x1024.jpg'>1280 X 1024</a></li>");
	$("#deskinfo").append("<li><a href='images/downloads/1600_1024/tigelogo1600x1024.jpg'>1600 X 1024</a></li>");
	$("#deskinfo").append("<li><a href='images/downloads/1680_1050/tigelogo1680x1050.jpg'>1680 X 1050</a></li>");
	$("#deskinfo").append("<li><a href='images/downloads/1920_1200/tigelogo1900x1200.jpg'>1920 X 1200</a></li>");
	$("#deskinfo").append("</ul>");
	$("#deskinfo").queue("fx", []).stop().animate({opacity: 1}, 400);
});
$("#desk11").mouseout(function(e) {
	if(!e) { 
		var e = window.event;
	}
	if(e.target) {
		targ = e.target;
	} else if(e.srcElement) { 
		targ = e.srcElement;
	}
	if (targ.nodeType == 3) { // defeat Safari bug
		targ = targ.parentNode;
	}
	var x = 0;
	var y = 0;
	if(e.pageX || e.pageY) 	{
		x = e.pageX;
		y = e.pageY;
	} else if(e.clientX || e.clientY) 	{
		x = (e.clientX + document.body.scrollLeft + document.documentElement.scrollLeft);
		y = (e.clientY + document.body.scrollTop + document.documentElement.scrollTop);
	}
	var x = x - $(this).offset().left;
	var y = y - $(this).offset().top;
	if(x < 0 || x > 177 || y < 0 || y > 130) {
		$("#deskinfo").queue("fx", []).stop().animate({opacity: 0}, 400);
		$("#deskinfo").html("");
	}
});
//------desk12------\\
$("#desk12").mouseover(function() {
	var offset = $(this).offset();
	$("#deskinfo").css({left: (offset.left - ($("#deskinfo").width()/1.5)) + "px", top: (offset.top - ($("#deskinfo").height()/1.5)) + "px"});
	$("#deskinfo").html("<h5>Black</h5>");
	$("#deskinfo").append("<img src='images/downloads/preview/12.jpg' width='257' height='153' />");
	$("#deskinfo").append("<ul class='popupright'>");
	$("#deskinfo").append("<li><a href='images/downloads/1024_768/tigelogoblack1024x768.jpg'>1024 X 768</a></li>");
	$("#deskinfo").append("<li><a href='images/downloads/1280_1024/tigelogoblack1280x1024.jpg'>1280 X 1024</a></li>");
	$("#deskinfo").append("<li><a href='images/downloads/1600_1024/tigelogoblack1600x1024.jpg'>1600 X 1024</a></li>");
	$("#deskinfo").append("<li><a href='images/downloads/1680_1050/tigelogoblack1680x1050.jpg'>1680 X 1050</a></li>");
	$("#deskinfo").append("<li><a href='images/downloads/1920_1200/tigelogoblack1900x1200.jpg'>1920 X 1200</a></li>");
	$("#deskinfo").append("</ul>");
	$("#deskinfo").queue("fx", []).stop().animate({opacity: 1}, 400);
});
$("#desk12").mouseout(function(e) {
	if(!e) { 
		var e = window.event;
	}
	if(e.target) {
		targ = e.target;
	} else if(e.srcElement) { 
		targ = e.srcElement;
	}
	if (targ.nodeType == 3) { // defeat Safari bug
		targ = targ.parentNode;
	}
	var x = 0;
	var y = 0;
	if(e.pageX || e.pageY) 	{
		x = e.pageX;
		y = e.pageY;
	} else if(e.clientX || e.clientY) 	{
		x = (e.clientX + document.body.scrollLeft + document.documentElement.scrollLeft);
		y = (e.clientY + document.body.scrollTop + document.documentElement.scrollTop);
	}
	var x = x - $(this).offset().left;
	var y = y - $(this).offset().top;
	if(x < 0 || x > 177 || y < 0 || y > 130) {
		$("#deskinfo").queue("fx", []).stop().animate({opacity: 0}, 400);
		$("#deskinfo").html("");
	}
});
//------desk13------\\
$("#desk13").mouseover(function() {
	var offset = $(this).offset();
	$("#deskinfo").css({left: (offset.left + ($(this).width()/2)) + "px", top: (offset.top - ($("#deskinfo").height()/1.5)) + "px"});
	$("#deskinfo").html("<h5>RZ Night</h5>");
	$("#deskinfo").append("<img src='images/downloads/preview/13.jpg' width='257' height='153' />");
	$("#deskinfo").append("<ul class='popupright'>");
	$("#deskinfo").append("<li><a href='images/downloads/1024_768/rznight1024x768.jpg'>1024 X 768</a></li>");
	$("#deskinfo").append("<li><a href='images/downloads/1280_1024/rznight1280x1024.jpg'>1280 X 1024</a></li>");
	$("#deskinfo").append("<li><a href='images/downloads/1600_1024/rznight1600x1024.jpg'>1600 X 1024</a></li>");
	$("#deskinfo").append("<li><a href='images/downloads/1680_1050/rznight1680x1050.jpg'>1680 X 1050</a></li>");
	$("#deskinfo").append("<li><a href='images/downloads/1920_1200/rznight1900x1200.jpg'>1920 X 1200</a></li>");
	$("#deskinfo").append("</ul>");
	$("#deskinfo").queue("fx", []).stop().animate({opacity: 1}, 400);
});
$("#desk13").mouseout(function(e) {
	if(!e) { 
		var e = window.event;
	}
	if(e.target) {
		targ = e.target;
	} else if(e.srcElement) { 
		targ = e.srcElement;
	}
	if (targ.nodeType == 3) { // defeat Safari bug
		targ = targ.parentNode;
	}
	var x = 0;
	var y = 0;
	if(e.pageX || e.pageY) 	{
		x = e.pageX;
		y = e.pageY;
	} else if(e.clientX || e.clientY) 	{
		x = (e.clientX + document.body.scrollLeft + document.documentElement.scrollLeft);
		y = (e.clientY + document.body.scrollTop + document.documentElement.scrollTop);
	}
	var x = x - $(this).offset().left;
	var y = y - $(this).offset().top;
	if(x < 0 || x > 177 || y < 0 || y > 130) {
		$("#deskinfo").queue("fx", []).stop().animate({opacity: 0}, 400);
		$("#deskinfo").html("");
	}
});
//------desk14------\\
$("#desk14").mouseover(function() {
	var offset = $(this).offset();
	$("#deskinfo").css({left: (offset.left + ($(this).width()/2)) + "px", top: (offset.top - ($("#deskinfo").height()/1.5)) + "px"});
	$("#deskinfo").html("<h5>RZ Silhouette</h5>");
	$("#deskinfo").append("<img src='images/downloads/preview/14.jpg' width='257' height='153' />");
	$("#deskinfo").append("<ul class='popupright'>");
	$("#deskinfo").append("<li><a href='images/downloads/1024_768/rzsilo1024x768.jpg'>1024 X 768</a></li>");
	$("#deskinfo").append("<li><a href='images/downloads/1280_1024/rzsilo1280x1024.jpg'>1280 X 1024</a></li>");
	$("#deskinfo").append("<li><a href='images/downloads/1600_1024/rzsilo1600x1024.jpg'>1600 X 1024</a></li>");
	$("#deskinfo").append("<li><a href='images/downloads/1680_1050/rzsilo1680x1050.jpg'>1680 X 1050</a></li>");
	$("#deskinfo").append("<li><a href='images/downloads/1920_1200/rzsilo1900x1200.jpg'>1920 X 1200</a></li>");
	$("#deskinfo").append("</ul>");
	$("#deskinfo").queue("fx", []).stop().animate({opacity: 1}, 400);
});
$("#desk14").mouseout(function(e) {
	if(!e) { 
		var e = window.event;
	}
	if(e.target) {
		targ = e.target;
	} else if(e.srcElement) { 
		targ = e.srcElement;
	}
	if (targ.nodeType == 3) { // defeat Safari bug
		targ = targ.parentNode;
	}
	var x = 0;
	var y = 0;
	if(e.pageX || e.pageY) 	{
		x = e.pageX;
		y = e.pageY;
	} else if(e.clientX || e.clientY) 	{
		x = (e.clientX + document.body.scrollLeft + document.documentElement.scrollLeft);
		y = (e.clientY + document.body.scrollTop + document.documentElement.scrollTop);
	}
	var x = x - $(this).offset().left;
	var y = y - $(this).offset().top;
	if(x < 0 || x > 177 || y < 0 || y > 130) {
		$("#deskinfo").queue("fx", []).stop().animate({opacity: 0}, 400);
		$("#deskinfo").html("");
	}
});
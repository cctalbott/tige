// JavaScript Document
/*var images = new Array();
images[0] = "images/home/mainimgs/hp_main_1.jpg";
images[1] = "images/home/mainimgs/hp_main_2.jpg";
images[2] = "images/home/mainimgs/hp_main_3.jpg";

$num = Math.floor(Math.random() * 4);

$("#mainimg").css({ "background": "url("+ images[$num] +") no-repeat" });*/

var mainImages = new Images();

var num = Math.floor(Math.random() * 3);
mainImgUpdate();

$("#mainimg-nav ul .previmg").click(function() {
	if(num == 0) {
		num = 2;
	} else {
		num = num - 1;
	}
	mainImgUpdate();
});
$("#mainimg-nav ul .nextimg").click(function() {
	if(num == 2) {
		num = 0;
	} else {
		num = num + 1;
	}
	mainImgUpdate();
});

function Images() {
	this.images = new Array();
	this.images[0] = "images/home/mainimgs/homepage_rz2.jpg";
	this.images[1] = "images/home/mainimgs/touch.jpg";
	this.images[2] = "images/home/mainimgs/homepage_rider.jpg";
}

function mainImgUpdate() {
	with(mainImages) {
		$("#mainimg").css({"background": "url("+ images[num] +") no-repeat"});
	}
	$("#mainimg-nav ul .imgdot").css({"background-position": "0 0"});
	$("#mainimg-nav ul .imgdot:eq("+ num +")").css({"background-position": "0 -6px"});
	switch(num) {
		case 0:
			$("#touchBtn").css({"display": "none"});
			break;
		case 1:
			$("#touchBtn").css({"display": "block"});
			break;
		case 2:
			$("#touchBtn").css({"display": "none"});
			break;
		default:
			$("#touchBtn").css({"display": "none"});
	}
		
}
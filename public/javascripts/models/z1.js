var mainImages = new Images();
var contentGallery = new ContentGallery();
var num = Math.floor(Math.random() * 2);
var galleryLeft;

document.observe('dom:loaded', function() {
  mainImgUpdate();
  
  $("mainimg-nav").select("ul .previmg")[0].observe('click', function(event) {
  	if(num == 0) {
  		num = 1;
  	} else {
  		num = num - 1;
  	}

  	mainImgUpdate();
  });
  $("mainimg-nav").select("ul .nextimg")[0].observe('click', function(event) {
  	if(num == 1) {
  		num = 0;
  	} else {
  		num = num + 1;
  	}

  	mainImgUpdate();
  });
  
/*
** FEATURE DOTS
*/
  /*$("dotAlphaZ").observe('mouseover', function(event) {
  	featureRollover("/boatfeatures/tower/z1");
  }).observe('click', function(event) {
  	featureRollover("/boatfeatures/tower/z1");
  });*/

  $("dotLCD").observe('mouseover', function(event) {
  	featureRollover("/boatfeatures/lcd/z1");
  }).observe('click', function(event) {
  	featureRollover("/boatfeatures/lcd/z1");
  });

  $("dotDash").observe('mouseover', function() {
  	featureRollover("/boatfeatures/dash/z1");
  }).observe('click', function() {
  	featureRollover("/boatfeatures/dash/z1");
  });

  $("dotTAC").observe('mouseover', function(event) {
  	featureRollover("/boatfeatures/transomactivitycenter/z1");
  }).observe('click', function(event) {
  	featureRollover("/boatfeatures/transomactivitycenter/z1");
  });

  $("dotStorage").observe('mouseover', function() {
  	featureRollover("/boatfeatures/storage/z1");
  }).observe('click', function() {
  	featureRollover("/boatfeatures/storage/z1");
  });

  $("dotPcm").observe('mouseover', function(event) {
  	featureRollover("/boatfeatures/engine/z1");
  }).observe('click', function(event) {
  	featureRollover("/boatfeatures/engine/z1");
  });

  $("dotCarpet").observe('mouseover', function(event) {
  	featureRollover("/boatfeatures/carpet/z1");
  }).observe('click', function(event) {
  	featureRollover("/boatfeatures/carpet/z1");
  });
});

function Images() {
  var dir = "/public/images/models/";

	this.images = new Array();
	this.images[0] = dir +"z1/main/1.jpg";
	this.images[1] = dir +"z1/main/2.jpg";
	//this.images[2] = dir +"z1/main/3.jpg";
	//this.images[3] = dir +"z1/main/4.jpg";
	//this.images[4] = dir +"z1/main/5.jpg";
}

function showHideArrows() {
  galleryLeft = $("contentGallery").select(".galleryWrapper ul")[0].getStyle('left');
  var patt = /[\W]?[\d]+/;
  galleryLeft = patt.exec(galleryLeft);
  
  //alert(Number(galleryLeft));
  
  if(Number(galleryLeft) == 0) 
	{
		$("contentGalleryPg1").setStyle({backgroundPosition: "0 -7px"});
		$("contentGalleryPg2").setStyle({backgroundPosition: "0 0"});
		$("contentGalleryPg3").setStyle({backgroundPosition: "0 0"});
		$("contentGalleryPg4").setStyle({backgroundPosition: "0 0"});
	} 
	else if(Number(galleryLeft) == -464)
	{
	  $("contentGalleryPg1").setStyle({backgroundPosition: "0 0"});
		$("contentGalleryPg2").setStyle({backgroundPosition: "0 -7px"});
		$("contentGalleryPg3").setStyle({backgroundPosition: "0 0"});
		$("contentGalleryPg4").setStyle({backgroundPosition: "0 0"});
	}
	else if(Number(galleryLeft) == -928)
	{
	  $("contentGalleryPg1").setStyle({backgroundPosition: "0 0"});
		$("contentGalleryPg2").setStyle({backgroundPosition: "0 0"});
		$("contentGalleryPg3").setStyle({backgroundPosition: "0 -7px"});
		$("contentGalleryPg4").setStyle({backgroundPosition: "0 0"});
	}
	else if(Number(galleryLeft) == -1392)
	{
	  $("contentGalleryPg1").setStyle({backgroundPosition: "0 0"});
		$("contentGalleryPg2").setStyle({backgroundPosition: "0 0"});
		$("contentGalleryPg3").setStyle({backgroundPosition: "0 0"});
		$("contentGalleryPg4").setStyle({backgroundPosition: "0 -7px"});
	}
  
	if(Number(galleryLeft) >= 0) 
	{
		$("contentGalleryLt").setStyle({visibility: 'hidden'});
		$("contentGalleryRt").setStyle({visibility: 'visible'});
	} 
	else if(Number(galleryLeft) <= -1392) 
	{
		$("contentGalleryLt").setStyle({visibility: 'visible'});
		$("contentGalleryRt").setStyle({visibility: 'hidden'});
	}
	else 
	{
		$("contentGalleryLt").setStyle({visibility: 'visible'});
		$("contentGalleryRt").setStyle({visibility: 'visible'});
	}
}
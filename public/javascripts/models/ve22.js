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
  $("dotAlphaZ").observe('mouseover', function(event) {
  	featureRollover("/boatfeatures/tower/22ve");
  }).observe('click', function(event) {
  	featureRollover("/boatfeatures/tower/22ve");
  });

  $("dotTouch").observe('mouseover', function(event) {
  	featureRollover("/boatfeatures/touch/22ve");
  }).observe('click', function(event) {
  	featureRollover("/boatfeatures/touch/22ve");
  });

  $("dotTAC").observe('mouseover', function(event) {
  	featureRollover("/boatfeatures/transomactivitycenter/22ve");
  }).observe('click', function(event) {
  	featureRollover("/boatfeatures/transomactivitycenter/22ve");
  });

  $("dotWalkOverTran").observe('mouseover', function(event) {
  	featureRollover("/boatfeatures/walkovertransom/22ve");
  }).observe('click', function(event) {
  	featureRollover("/boatfeatures/walkovertransom/22ve");
  });

  $("dotPcm").observe('mouseover', function(event) {
  	featureRollover("/boatfeatures/engine/22ve");
  }).observe('click', function(event) {
  	featureRollover("/boatfeatures/engine/22ve");
  });

  $("dotSidePockets").observe('mouseover', function(event) {
  	featureRollover("/boatfeatures/sidepockets/22ve");
  }).observe('click', function(event) {
  	featureRollover("/boatfeatures/sidepockets/22ve");
  });

  $("dotCarpet").observe('mouseover', function(event) {
  	featureRollover("/boatfeatures/carpet/22ve");
  }).observe('click', function(event) {
  	featureRollover("/boatfeatures/carpet/22ve");
  });

  $("dotAudio").observe('mouseover', function(event) {
  	featureRollover("/boatfeatures/audio/22ve");
  }).observe('click', function(event) {
  	featureRollover("/boatfeatures/audio/22ve");
  });

  $("dotDesign").observe('mouseover', function(event) {
  	featureRollover("/boatfeatures/design/22ve");
  }).observe('click', function(event) {
  	featureRollover("/boatfeatures/design/22ve");
  });

  $("dotSwimPlatform").observe('mouseover', function(event) {
  	featureRollover("/boatfeatures/swimplatform/22ve");
  }).observe('click', function(event) {
  	featureRollover("/boatfeatures/swimplatform/22ve");
  });
});

function Images() 
{
  var dir = "/public/images/models/";

	this.images = new Array();
	this.images[0] = dir +"ve22/main/1.jpg";
	this.images[1] = dir +"ve22/main/2.jpg";
	//this.images[2] = dir +"ve22/main/3.jpg";
}

function showHideArrows() {
  galleryLeft = $("contentGallery").select(".galleryWrapper ul")[0].getStyle('left');
  var patt = /[\W]?[\d]+/;
  galleryLeft = patt.exec(galleryLeft);
  
  if(Number(galleryLeft) == 0) 
	{
		$("contentGalleryPg1").setStyle({backgroundPosition: "0 -7px"});
		$("contentGalleryPg2").setStyle({backgroundPosition: "0 0"});
	} 
	else if(Number(galleryLeft) == -464)
	{
	  $("contentGalleryPg1").setStyle({backgroundPosition: "0 0"});
		$("contentGalleryPg2").setStyle({backgroundPosition: "0 -7px"});
	}
  
  if(Number(galleryLeft) >= 0) 
	{
		$("contentGalleryLt").setStyle({visibility: 'hidden'});
		$("contentGalleryRt").setStyle({visibility: 'visible'});
	} 
	else if(Number(galleryLeft) <= -464) 
	{
		$("contentGalleryLt").setStyle({visibility: 'visible'});
		$("contentGalleryRt").setStyle({visibility: 'hidden'});
	}
}
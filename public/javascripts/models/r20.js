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
  $("dotDash").observe('mouseover', function() {
  	featureRollover("/boatfeatures/dash/r20");
  }).observe('click', function() {
  	featureRollover("/boatfeatures/dash/r20");
  });

  $("dotTAC").observe('mouseover', function(event) {
  	featureRollover("/boatfeatures/transomactivitycenter/r20");
  }).observe('click', function(event) {
  	featureRollover("/boatfeatures/transomactivitycenter/r20");
  });

  $("dotStorage").observe('mouseover', function() {
  	featureRollover("/boatfeatures/storage/r20");
  }).observe('click', function() {
  	featureRollover("/boatfeatures/storage/r20");
  });

  $("dotPcm").observe('mouseover', function(event) {
  	featureRollover("/boatfeatures/engine/r20");
  }).observe('click', function(event) {
  	featureRollover("/boatfeatures/engine/r20");
  });
  
  $("dotBow").observe('mouseover', function(event) {
  	featureRollover("/boatfeatures/bow/r20");
  }).observe('click', function(event) {
  	featureRollover("/boatfeatures/bow/r20");
  });
  
  $("dotDesign").observe('mouseover', function(event) {
  	featureRollover("/boatfeatures/design/r20");
  }).observe('click', function(event) {
  	featureRollover("/boatfeatures/design/r20");
  });
  
  $("dotWalkOverTran").observe('mouseover', function(event) {
  	featureRollover("/boatfeatures/walkovertransom/r20");
  }).observe('click', function(event) {
  	featureRollover("/boatfeatures/walkovertransom/r20");
  });
});

function Images() {
  var dir = "/public/images/models/";

	this.images = new Array();
	this.images[0] = dir +"r20/main/1.jpg";
	this.images[1] = dir +"r20/main/2.jpg";
	//this.images[2] = dir +"r20/main/3.jpg";
}

function showHideArrows() {
  galleryLeft = $("contentGallery").select(".galleryWrapper ul")[0].getStyle('left');
  var patt = /[\W]?[\d]+/;
  galleryLeft = patt.exec(galleryLeft);
  
  //alert(Number(galleryLeft));
  
  /*if(Number(galleryLeft) == 0) 
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
	}*/
}
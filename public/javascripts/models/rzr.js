var mainImages = new Images();
var contentGallery = new ContentGallery();
var num = Math.floor(Math.random() * 3);
var galleryLeft;

document.observe('dom:loaded', function() {
  mainImgUpdate();
  
  $("mainimg-nav").select("ul .previmg")[0].observe('click', function(event) {
  	if(num == 0) {
  		num = 2;
  	} else {
  		num = num - 1;
  	}

  	mainImgUpdate();
  });
  $("mainimg-nav").select("ul .nextimg")[0].observe('click', function(event) {
  	if(num == 2) {
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
  	featureRollover("/boatfeatures/tower/rzr");
  }).observe('click', function(event) {
  	featureRollover("/boatfeatures/tower/rzr");
  });

  $("dotTouch").observe('mouseover', function(event) {
  	featureRollover("/boatfeatures/touch/rzr");
  }).observe('click', function(event) {
  	featureRollover("/boatfeatures/touch/rzr");
  });

  $("dotTAC").observe('mouseover', function(event) {
  	featureRollover("/boatfeatures/transomactivitycenter/rzr");
  }).observe('click', function(event) {
  	featureRollover("/boatfeatures/transomactivitycenter/rzr");
  });

  $("dotStorage").observe('mouseover', function() {
  	featureRollover("/boatfeatures/storage/rzr");
  }).observe('click', function() {
  	featureRollover("/boatfeatures/storage/rzr");
  });

  $("dotPcm").observe('mouseover', function(event) {
  	featureRollover("/boatfeatures/engine/rzr");
  }).observe('click', function(event) {
  	featureRollover("/boatfeatures/engine/rzr");
  });
  
  $("dotAudio").observe('mouseover', function(event) {
  	featureRollover("/boatfeatures/audio/rzr");
  }).observe('click', function(event) {
  	featureRollover("/boatfeatures/audio/rzr");
  });
  
  $("dotBow").observe('mouseover', function(event) {
  	featureRollover("/boatfeatures/bow/rzr");
  }).observe('click', function(event) {
  	featureRollover("/boatfeatures/bow/rzr");
  });

  $("dotCarpet").observe('mouseover', function(event) {
  	featureRollover("/boatfeatures/carpet/rzr");
  }).observe('click', function(event) {
  	featureRollover("/boatfeatures/carpet/rzr");
  });
  
  $("dotDesign").observe('mouseover', function(event) {
  	featureRollover("/boatfeatures/design/rzr");
  }).observe('click', function(event) {
  	featureRollover("/boatfeatures/design/rzr");
  });
  
  $("dotIceChest").observe('mouseover', function(event) {
  	featureRollover("/boatfeatures/icechest/rzr");
  }).observe('click', function(event) {
  	featureRollover("/boatfeatures/icechest/rzr");
  });
  
  $("dotSidePockets").observe('mouseover', function(event) {
  	featureRollover("/boatfeatures/sidepockets/rzr");
  }).observe('click', function(event) {
  	featureRollover("/boatfeatures/sidepockets/rzr");
  });
  
  $("dotWalkOverTran").observe('mouseover', function(event) {
  	featureRollover("/boatfeatures/walkovertransom/rzr");
  }).observe('click', function(event) {
  	featureRollover("/boatfeatures/walkovertransom/rzr");
  });
});

function Images() {
  var dir = "/public/images/models/";

	this.images = new Array();
	this.images[0] = dir +"rzr/main/1.jpg";
	this.images[1] = dir +"rzr/main/2.jpg";
	this.images[2] = dir +"rzr/main/3.jpg";
	//this.images[3] = dir +"rzr/main/4.jpg";
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
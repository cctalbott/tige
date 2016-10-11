var mainImages = new Images();
var contentGallery = new ContentGallery();
var num = Math.floor(Math.random() * 2);
var galleryLeft;

document.observe("dom:loaded", function() {
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
  	featureRollover("/boatfeatures/tower/rz4");
  }).observe('click', function(event) {
  	featureRollover("/boatfeatures/tower/rz4");
  });

  $("dotTouch").observe('mouseover', function(event) {
  	featureRollover("/boatfeatures/touch/rz4");
  }).observe('click', function(event) {
  	featureRollover("/boatfeatures/touch/rz4");
  });

  $("dotTAC").observe('mouseover', function(event) {
  	featureRollover("/boatfeatures/transomactivitycenter/rz4");
  }).observe('click', function(event) {
  	featureRollover("/boatfeatures/transomactivitycenter/rz4");
  });

  $("dotWalkOverTran").observe('mouseover', function(event) {
  	featureRollover("/boatfeatures/walkovertransom/rz4");
  }).observe('click', function(event) {
  	featureRollover("/boatfeatures/walkovertransom/rz4");
  });

  $("dotPcm").observe('mouseover', function(event) {
  	featureRollover("/boatfeatures/engine/rz4");
  }).observe('click', function(event) {
  	featureRollover("/boatfeatures/engine/rz4");
  });

  $("dotSidePockets").observe('mouseover', function(event) {
  	featureRollover("/boatfeatures/sidepockets/rz4");
  }).observe('click', function(event) {
  	featureRollover("/boatfeatures/sidepockets/rz4");
  });

  $("dotBow").observe('mouseover', function(event) {
  	featureRollover("/boatfeatures/bow/rz4");
  }).observe('click', function(event) {
  	featureRollover("/boatfeatures/bow/rz4");
  });

  $("dotObservSeat").observe('mouseover', function(event) {
  	featureRollover("/boatfeatures/observersseat/rz4");
  }).observe('click', function(event) {
  	featureRollover("/boatfeatures/observersseat/rz4");
  });

  $("dotCarpet").observe('mouseover', function(event) {
  	featureRollover("/boatfeatures/carpet/rz4");
  }).observe('click', function(event) {
  	featureRollover("/boatfeatures/carpet/rz4");
  });

  $("dotAudio").observe('mouseover', function(event) {
  	featureRollover("/boatfeatures/audio/rz4");
  }).observe('click', function(event) {
  	featureRollover("/boatfeatures/audio/rz4");
  });

  $("dotDesign").observe('mouseover', function(event) {
  	featureRollover("/boatfeatures/design/rz4");
  }).observe('click', function(event) {
  	featureRollover("/boatfeatures/design/rz4");
  });

  $("dotSwimPlatform").observe('mouseover', function(event) {
  	featureRollover("/boatfeatures/swimplatform/rz4");
  }).observe('click', function(event) {
  	featureRollover("/boatfeatures/swimplatform/rz4");
  });
});

function Images() {
  var dir = "/public/images/models/";

	this.images = new Array();
	this.images[0] = dir +"rz4/main/1.jpg";
	this.images[1] = dir +"rz4/main/2.jpg";
	//this.images[2] = dir +"rz4/main/3.jpg";
	//this.images[3] = dir +"rz4/main/4.jpg";
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
		$("contentGalleryPg5").setStyle({backgroundPosition: "0 0"});
	} 
	else if(Number(galleryLeft) == -464)
	{
	  $("contentGalleryPg1").setStyle({backgroundPosition: "0 0"});
		$("contentGalleryPg2").setStyle({backgroundPosition: "0 -7px"});
		$("contentGalleryPg3").setStyle({backgroundPosition: "0 0"});
		$("contentGalleryPg4").setStyle({backgroundPosition: "0 0"});
		$("contentGalleryPg5").setStyle({backgroundPosition: "0 0"});
	}
	else if(Number(galleryLeft) == -928)
	{
	  $("contentGalleryPg1").setStyle({backgroundPosition: "0 0"});
		$("contentGalleryPg2").setStyle({backgroundPosition: "0 0"});
		$("contentGalleryPg3").setStyle({backgroundPosition: "0 -7px"});
		$("contentGalleryPg4").setStyle({backgroundPosition: "0 0"});
		$("contentGalleryPg5").setStyle({backgroundPosition: "0 0"});
	}
	else if(Number(galleryLeft) == -1392)
	{
	  $("contentGalleryPg1").setStyle({backgroundPosition: "0 0"});
		$("contentGalleryPg2").setStyle({backgroundPosition: "0 0"});
		$("contentGalleryPg3").setStyle({backgroundPosition: "0 0"});
		$("contentGalleryPg4").setStyle({backgroundPosition: "0 -7px"});
		$("contentGalleryPg5").setStyle({backgroundPosition: "0 0"});
	}
	else if(Number(galleryLeft) == -1856)
	{
	  $("contentGalleryPg1").setStyle({backgroundPosition: "0 0"});
		$("contentGalleryPg2").setStyle({backgroundPosition: "0 0"});
		$("contentGalleryPg3").setStyle({backgroundPosition: "0 0"});
		$("contentGalleryPg4").setStyle({backgroundPosition: "0 0"});
		$("contentGalleryPg5").setStyle({backgroundPosition: "0 -7px"});
	}
	
	if(Number(galleryLeft) >= 0) 
	{
	  $("contentGalleryLt").setStyle({visibility: 'hidden'});
		$("contentGalleryRt").setStyle({visibility: 'visible'});
	}
	else if(Number(galleryLeft) <= -1856)
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
var mainImages = new Images();
var contentGallery = new ContentGallery();
var num = Math.floor(Math.random() * 4);
var galleryLeft;

document.observe('dom:loaded', function() {
  mainImgUpdate();
  
  $("mainimg-nav").select("ul .previmg")[0].observe('click', function(event) {
  	if(num == 0) 
  	{
  		num = 3;
  	} 
  	else 
  	{
  		num = num - 1;
  	}

  	mainImgUpdate();
  });
  $("mainimg-nav").select("ul .nextimg")[0].observe('click', function(event) {
  	if(num == 3) 
  	{
  		num = 0;
  	} 
  	else 
  	{
  		num = num + 1;
  	}

  	mainImgUpdate();
  });
  
  $("dotPcm").observe('mouseover', function(event) {
  	featureRollover("/boatfeatures/engine/22i");
  }).observe('click', function(event) {
  	featureRollover("/boatfeatures/engine/22i");
  });
  
  $("dotAlphaZ").observe('mouseover', function(event) {
  	featureRollover("/boatfeatures/tower/22i");
  }).observe('click', function(event) {
  	featureRollover("/boatfeatures/tower/22i");
  });
  
  $("dotRevSeat").observe('mouseover', function() {
  	featureRollover("/boatfeatures/reverseseat/22i");
  }).observe('click', function() {
  	featureRollover("/boatfeatures/reverseseat/22i");
  });
  
  $("dotSwimPlatform").observe('mouseover', function(event) {
  	featureRollover("/boatfeatures/swimplatform/22i");
  }).observe('click', function(event) {
  	featureRollover("/boatfeatures/swimplatform/22i");
  });
  
  $("dotStorage").observe('mouseover', function() {
  	featureRollover("/boatfeatures/sidestorage/22i");
  }).observe('click', function() {
  	featureRollover("/boatfeatures/sidestorage/22i");
  });
});

function Images() 
{
  var dir = "/public/images/models/";

	this.images = new Array();
	this.images[0] = dir +"22i/main/1.jpg";
	this.images[1] = dir +"22i/main/2.jpg";
	this.images[2] = dir +"22i/main/3.jpg";
	this.images[3] = dir +"22i/main/4.jpg";
}

function showHideArrows() {
  galleryLeft = $("contentGallery").select(".galleryWrapper ul")[0].getStyle('left');
  var patt = /[\W]?[\d]+/;
  galleryLeft = patt.exec(galleryLeft);
  
  if(Number(galleryLeft) == 0) 
	{
		$("contentGalleryPg1").setStyle({backgroundPosition: "0 -7px"});
		$("contentGalleryPg2").setStyle({backgroundPosition: "0 0"});
		$("contentGalleryPg3").setStyle({backgroundPosition: "0 0"});
	} 
	else if(Number(galleryLeft) == -464)
	{
	  $("contentGalleryPg1").setStyle({backgroundPosition: "0 0"});
		$("contentGalleryPg2").setStyle({backgroundPosition: "0 -7px"});
		$("contentGalleryPg3").setStyle({backgroundPosition: "0 0"});
	}
	else if(Number(galleryLeft) == -928)
	{
	  $("contentGalleryPg1").setStyle({backgroundPosition: "0 0"});
		$("contentGalleryPg2").setStyle({backgroundPosition: "0 0"});
		$("contentGalleryPg3").setStyle({backgroundPosition: "0 -7px"});
	}
  
  if(Number(galleryLeft) >= 0) 
	{
		$("contentGalleryLt").setStyle({visibility: 'hidden'});
		$("contentGalleryRt").setStyle({visibility: 'visible'});
	} 
	else if(Number(galleryLeft) <= -928) 
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
var mainImages = new Images();
var contentGallery = new ContentGallery();
var num = Math.floor(Math.random() * 3);
var galleryLeft;

document.observe('dom:loaded', function() {
  mainImgUpdate();
  
  $("mainimg-nav").select("ul .previmg")[0].observe('click', function(event) {
  	if(num == 0) 
  	{
  		num = 2;
  	} 
  	else 
  	{
  		num = num - 1;
  	}

  	mainImgUpdate();
  });
  $("mainimg-nav").select("ul .nextimg")[0].observe('click', function(event) {
  	if(num == 2) 
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
  	featureRollover("/boatfeatures/engine/20i");
  }).observe('click', function(event) {
  	featureRollover("/boatfeatures/engine/20i");
  });
  
  $("dotStorage").observe('mouseover', function() {
  	featureRollover("/boatfeatures/sidestorage/20i");
  }).observe('click', function() {
  	featureRollover("/boatfeatures/sidestorage/20i");
  });
  
  $("dotFreeboard").observe('mouseover', function() {
  	featureRollover("/boatfeatures/freeboard/20i");
  }).observe('click', function() {
  	featureRollover("/boatfeatures/freeboard/20i");
  });
});

function Images() {
  var dir = "/public/images/models/";

	this.images = new Array();
	this.images[0] = dir +"i20/main/1.jpg";
	this.images[1] = dir +"i20/main/2.jpg";
	this.images[2] = dir +"i20/main/3.jpg";
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
	else
	{
		$("contentGalleryLt").setStyle({visibility: 'visible'});
		$("contentGalleryRt").setStyle({visibility: 'hidden'});
	}
}
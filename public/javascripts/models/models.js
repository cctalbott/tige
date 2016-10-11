function ContentGallery() 
{
  document.observe('dom:loaded', function() {
    $("contentGalleryLt").setStyle({visibility: "hidden"});

  	$("contentGalleryLt").observe('click', function(event) {
  		galleryBack();
  	});
  	$("contentGalleryRt").observe('click', function(event) {
  		galleryForward();
  	});
  });
}

function ScrollOffset() {
  this.scrollTop = 0;
  this.scrollLeft = 0;
  
  if(window.pageYOffset)
  {
    this.scrollTop = window.pageYOffset;
  }
  else if(document.documentElement.scrollTop)
  {
    this.scrollTop = document.documentElement.scrollTop;
  }
  else if(document.body.scrollTop)
  {
    this.scrollTop = document.body.scrollTop;
  }
  
  if(window.pageXOffset)
  {
    this.scrollLeft = window.pageXOffset;
  }
  else if(document.documentElement.scrollLeft)
  {
    this.scrollLeft = document.documentElement.scrollLeft;
  }
  else if(document.body.scrollLeft)
  {
    this.scrollLeft = document.body.scrollLeft;
  }
}

function mainImgUpdate() {
	with(mainImages) {
		$("mainimg").setStyle({
		  background: "url("+ images[num] +") no-repeat"
		});
	}

	$$("#mainimg-nav ul .imgdot").each(function(element) {
	  element.setStyle({backgroundPosition: "0 0"});
	});
	$$("#mainimg-nav ul .imgdot")[num].setStyle({backgroundPosition: "0 -6px"});
}

function featureRollover(feature) {
  new Ajax.Updater('boatFeature', feature);
}

function galleryBack() {
  new Effect.Move($("contentGallery").select(".galleryWrapper ul")[0], {
	  x: 464, 
	  y: 0, 
	  mode: 'relative',
	  queue: {
	    position: 'end',
	    scope: 'galleryxscope',
	    limit: 1
	  },
	  afterFinish: showHideArrows
	});
}

function galleryForward() {
  new Effect.Move($("contentGallery").select(".galleryWrapper ul")[0], {
	  x: -464, 
	  y: 0, 
	  mode: 'relative',
	  queue: {
	    position: 'end',
	    scope: 'galleryxscope',
	    limit: 1
	  },
	  afterFinish: showHideArrows
	});
}
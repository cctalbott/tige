function Gallery2pages() 
{ 
  var galleryLeft;
   
  $$(".galleryLtArrow")[0].setStyle({visibility: "hidden"});
  
	$$(".galleryLtArrow")[0].observe('click', function(event) {
		galleryLeft = $$(".gallery-4img .galleryWrapper ul")[0].getStyle('left');
	  var patt = /[\W]?[\d]+/;
	  galleryLeft = patt.exec(galleryLeft);
		
		if(galleryLeft == -465) 
		{
		  Effect.Queue.each(function(effect) {
  		  effect.cancel();
  		});
  		
			new Effect.Move($$(".gallery-4img .galleryWrapper ul")[0], {
			  x: 465, 
			  y: 0, 
			  mode: 'relative',
			  afterFinish: showHideArrows
			});
			
			$$(".pg1")[0].setStyle({backgroundPosition: "0 -7px"});
			$$(".pg2")[0].setStyle({backgroundPosition: "0 0"});
		}
	});
	
	$$(".galleryRtArrow")[0].observe('click', function(event) {
	  galleryLeft = $$(".gallery-4img .galleryWrapper ul")[0].getStyle('left');
	  var patt = /[\W]?[\d]+/;
	  galleryLeft = patt.exec(galleryLeft);
		
		if(galleryLeft == 0) 
		{
		  Effect.Queue.each(function(effect) {
  		  effect.cancel();
  		});
  		
			new Effect.Move($$(".gallery-4img .galleryWrapper ul")[0], {
			  x: -465, 
			  y: 0, 
			  mode: 'relative',
			  afterFinish: showHideArrows
			});
			
			$$(".pg1")[0].setStyle({backgroundPosition: "0 0"});
			$$(".pg2")[0].setStyle({backgroundPosition: "0 -7px"});
		}
	});
	
	function showHideArrows() 
  {
    galleryLeft = $$(".gallery-4img .galleryWrapper ul")[0].getStyle('left');
	  var patt = /[\W]?[\d]+/;
	  galleryLeft = patt.exec(galleryLeft);
    
  	if(galleryLeft >= 0) 
  	{
  		$$(".galleryLtArrow")[0].setStyle({visibility: "hidden"});
  		$$(".galleryRtArrow")[0].setStyle({visibility: "visible"});
  	} 
  	else if(galleryLeft <= -465) 
  	{
  		$$(".galleryLtArrow")[0].setStyle({visibility: "visible"});
  		$$(".galleryRtArrow")[0].setStyle({visibility: "hidden"});
  	}
  	
  	if(galleryLeft >= 1)
  	{
  	  $$(".gallery-4img .galleryWrapper ul")[0].setStyle({left: '0px'});
  	}
  	else if(galleryLeft <= -466)
  	{
  	  $$(".gallery-4img .galleryWrapper ul")[0].setStyle({left: '-465px'});
  	}
  }
}

function ScrollOffset() 
{ 
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
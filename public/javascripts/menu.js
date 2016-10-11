document.observe("dom:loaded", function() 
{
  // get current page address path
  var currentPage = window.location.pathname;
  
  // hide quicknav
  $('quicknav-btn').getElementsByTagName('ul')[0].setStyle({
    opacity: 0.0,
    display: 'none'
  })
  
  // if quicknav visible observe clicks off quicknav list
  if($('quicknav-btn').getElementsByTagName('ul')[0].visible())
  {
    document.observe('click', offQuicknavClick);
  }
  // observe quicknav clicks
  $('quicknav-btn').getElementsByTagName('h2')[0].observe('click', quicknavClick);
});

function quicknavClick(event) 
{
  // if quicknav hidden show it, else hide it.
  if($('quicknav-btn').getElementsByTagName('ul')[0].visible())
  {
    // stop observing clicks off quicknav
    document.stopObserving('click', offQuicknavClick);
    
    // hide quicknav
    $$('#quicknav-btn ul').each(function(element) {
      element.fade({ duration: 0.4, from: 1, to: 0 });
    });
  }
  else
  {
    // observe clicks off quicknav
    document.observe('click', offQuicknavClick);
    
    // show quicknav
    $$('#quicknav-btn ul').each(function(element) {
      element.setStyle({
        opacity: 0.0, 
        display: 'block' 
      }).fade({ duration: 0.4, from: 0, to: 1 });
    });
  }
}

function offQuicknavClick(event)
{ 
  // get x coordinates of click 
 	var x = event.pageX - $$("#quicknav-btn ul")[0].viewportOffset()[0];
 	//var y = event.pageY - $$("#quicknav-btn ul")[0].viewportOffset()[1];
 	
 	// if the click is outside quicknav box hide quicknav box
 	if(x < 0 || x > 175) 
 	{
 	  // stop observing clicks off quicknav
    document.stopObserving('click', offQuicknavClick);
    
 		$$('#quicknav-btn ul').each(function(element) {
      element.fade({ duration: 0.4, from: 1, to: 0 });
    });	
 	}
}
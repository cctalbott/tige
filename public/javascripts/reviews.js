document.observe("dom:loaded", function() {
  $$(".more").each(function(element) {
    element.observe('click', function(event) {
      var element = event.element();

    	if(element.up('h3').up('li').select(".moreinfo")[0].getStyle("display") == "none") 
    	{
    		element.setStyle({backgroundPosition: "right -13px"});
    		element.up('h3').up('li').select(".moreinfo")[0].setStyle({display: "block"});
    	} 
    	else 
    	{
    		element.setStyle({backgroundPosition: "right 2px"});
    		element.up('h3').up('li').select(".moreinfo")[0].setStyle({display: "none"});
    	}
    });
  });
});
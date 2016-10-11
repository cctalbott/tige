var originalSection = 0;
var currentSection = 0;
var par1 = "Located in Abilene Texas, Tig&eacute; headquarters houses the world&rsquo;s most advanced inboard manufacturing facility. This 130,000 square&ndash;foot, three&ndash;building complex was designed and built specifically for state&ndash;of&ndash;the&ndash;art, high&ndash;quality inboard boat production.";
var par2 = "Each Tig&eacute; model consists of a hull component and a deck component which are fabricated in separate molds. After each mold is meticulously cleaned and polished it is carefully masked to create precise in&ndash;the&ndash;mold gel coat lines and color combinations which will become the outside finish of the boat. Gel coat is applied in our state&ndash;of&ndash;the&ndash;art spray room. The result is a flawless and durable finish.";
var par3 = "Tig&eacute; builds the strongest inboard hull in the industry, the result of a state&ndash;of&ndash;the&ndash;art composite engineering and proven hand&ndash;laid lamination techniques aimed at enhancing performance and long&ndash;term durability.  Hull and deck units are laminated with several layers of high&ndash;quality fiberglass and resin.  Laminators then install the innovative Tig&eacute; LifePlus core stringer system, which serves as the hefty foundation of the advanced Tig&eacute; all&ndash;composite hull. Tig&eacute; engine mount beams and floor systems advanced Penske Extreme composite panel for superior strength and durability.";
var par4 = "After lamination, the hull and deck components are joined together. Tig&eacute; boats are engineered for advanced monocoque construction that fuses the hull and deck into a single, solid fiberglass unit. Seat bases are engineered as a solid, integrated part of this unit, contributing to the structural and functional superiority of Tig&eacute; boats.  Other manufacturers install seat bases separately using screws and L&ndash;brackets that can work loose over time.";
var par5 = "Ready to be rigged with running gear and other components, boats are flipped upside down. This allows precise positioning and alignment of the triple tracking fins, strut and rudder for optimum performance and handling. With the underwater gear in place, boats are righted for installation of carpet, control cables and electrical systems. The Tig&eacute; Electronic Control system features advanced Medallion gauges and engine monitoring systems; throttle&ndash;by&ndash;wire technology and Tig&eacute; SpeedSet, the most advanced and easy to use precision digital speed control in the marine industry.";
var par6 = "PCM engines are installed using advanced PCM Adjust&ndash;a&ndash;flex engine mounts through&ndash;bolted with aircraft&ndash;quality fasteners then precisely aligned for optimum performance.  Tig&eacute; offers a variety of PCM engine power options, all featuring E&ndash;control electronic technology that integrates seamlessly with the Tig&eacute; Electronic Control system for unmatched performance, reliability and user convenience. The advanced Tig&eacute;/PCM dual exhaust system is also installed for super&ndash;quiet operation.";
var par7 = "Tig&eacute; furnishings and other interior components are fabricated in&ndash;house using 36 oz. premium grade marine vinyl, triple&ndash;density foam and stainless steel fasteners and staples. Seat backs and other components are fabricated from high&ndash;quality virgin Proboard for long&ndash;lasting strength and durability. Tig&eacute; windshields are through&ndash;bolted to the deck for a solid and lasting fit. Tig&eacute; towers are designed and engineered to integrate seamlessly with the overall form of our boats.";
var par8 = "When the manufacturing process is complete, each and every new Tig&eacute; must go through a thorough and grueling on&ndash;water performance test. While other manufacturers check only random boats or perform simple leak tests in float tanks, every Tig&eacute; produced is given a rigorous, real&ndash;world performance test for a minimum of one hour. After passing the lake test, boats are returned for final detailing, graphics application and preparation for shipment to Tig&eacute; owners throughout the world.";

document.observe("dom:loaded", function() {
  $('tourList').setStyle({display: 'none'});
  
  $("moreblock").select("h3")[0].observe('click', function() {
  	Effect.toggle('tourList', 'slide', {duration: 0.1});
  });

  $("blueprintblock").observe('mousemove', function(e) {
    var scrollOffset = new ScrollOffset();
  	var x = e.pageX - $(this).viewportOffset().left - scrollOffset.scrollLeft;
  	var y = e.pageY - $(this).viewportOffset().top - scrollOffset.scrollTop;
  	
  	if(x < 574 && x > 404 && y < 70 && y > 30) 
  	{
  		currentSection = 0;
  		currentSwitch();
  	} 
  	else if(x < 177 && x > 90 && y < 139 && y > 87) 
  	{
  		currentSection = 1;
  		currentSwitch();
  	} 
  	else if(x < 317 && x > 177 && y < 139 && y > 87) 
  	{
  		currentSection = 2;
  		currentSwitch();
  	} 
  	else if(x < 416 && x > 317 && y < 115 && y > 87) 
  	{
  		currentSection = 3;
  		currentSwitch();
  	} 
  	else if(x < 518 && x > 452 && y < 125 && y > 87) 
  	{
  		currentSection = 4;
  		currentSwitch();
  	} 
  	else if(x < 582 && x > 518 && y < 125 && y > 87) 
  	{
  		currentSection = 5;
  		currentSwitch();
  	} 
  	else if(x < 663 && x > 582 && y < 161 && y > 87) 
  	{
  		currentSection = 6;
  		currentSwitch();
  	} 
  	else if(x < 692 && x > 663 && y < 161 && y > 87) 
  	{
  		currentSection = 7;
  		currentSwitch();
  	} 
  	else 
  	{
  		originalReturn();	
  	}
  });

  $("blueprintblock").observe('click', function(e) {
    var scrollOffset = new ScrollOffset();
  	var x = e.pageX - $(this).viewportOffset().left - scrollOffset.scrollLeft;
  	var y = e.pageY - $(this).viewportOffset().top - scrollOffset.scrollTop;
  	
  	if(x < 574 && x > 404 && y < 70 && y > 30) 
  	{
  		originalSection = 0;
  		originalReturn();
  		swapMovie("../../video/tour/headquarters.flv");
  	} 
  	else if(x < 177 && x > 90 && y < 139 && y > 87) 
  	{
  		originalSection = 1;
  		originalReturn();
  		swapMovie("../../video/tour/molds.flv");
  	} 
  	else if(x < 317 && x > 177 && y < 139 && y > 87) 
  	{
  		originalSection = 2;
  		originalReturn();
  		swapMovie("../../video/tour/composites.flv");
  	} 
  	else if(x < 416 && x > 317 && y < 115 && y > 87) 
  	{
  		originalSection = 3;
  		originalReturn();
  		swapMovie("../../video/tour/fused.flv");
  	} 
  	else if(x < 518 && x > 452 && y < 125 && y > 87) 
  	{
  		originalSection = 4;
  		originalReturn();
  		swapMovie("../../video/tour/electronics.flv");
  	} 
  	else if(x < 582 && x > 518 && y < 125 && y > 87) 
  	{
  		originalSection = 5;
  		originalReturn();
  		swapMovie("../../video/tour/powerplant.flv");
  	} 
  	else if(x < 663 && x > 582 && y < 161 && y > 87) 
  	{
  		originalSection = 6;
  		originalReturn();
  		swapMovie("../../video/tour/interiors.flv");
  	} 
  	else if(x < 692 && x > 663 && y < 161 && y > 87) 
  	{
  		originalSection = 7;
  		originalReturn();
  		swapMovie("../../video/tour/testing.flv");
  	} 
  	else 
  	{
  		originalReturn();
  	}
  });

  $("more1").observe('click', function() {
  	originalSection = 0;
  	originalReturn();
  	swapMovie("../../video/tour/headquarters.flv");
  });

  $("more2").observe('click', function() {
  	originalSection = 1;
  	originalReturn();
  	swapMovie("../../video/tour/molds.flv");
  });

  $("more3").observe('click', function() {
  	originalSection = 2;
  	originalReturn();
  	swapMovie("../../video/tour/composites.flv");
  });

  $("more4").observe('click', function() {
  	originalSection = 3;
  	originalReturn();
  	swapMovie("../../video/tour/fused.flv");
  });

  $("more5").observe('click', function() {
  	originalSection = 4;
  	originalReturn();
  	swapMovie("../../video/tour/electronics.flv");
  });

  $("more6").observe('click', function() {
  	originalSection = 5;
  	originalReturn();
  	swapMovie("../../video/tour/powerplant.flv");
  });

  $("more7").observe('click', function() {
  	originalSection = 6;
  	originalReturn();
  	swapMovie("../../video/tour/interiors.flv");
  });

  $("more8").observe('click', function() {
  	originalSection = 7;
  	originalReturn();
  	swapMovie("../../video/tour/testing.flv");
  });

  $$(".nextlink")[0].observe('click', function() {
  	if(originalSection < 8) 
  	{
  		originalSection = originalSection + 1;
  	} 
  	else 
  	{
  		originalSection = 0;
  	}
  	
  	originalReturn();
  	
  	switch(originalSection) {
  		case 0:
  			swapMovie("../../video/tour/headquarters.flv");
  			break;
  		case 1:
  			swapMovie("../../video/tour/molds.flv");
  			break;
  		case 2:
  			swapMovie("../../video/tour/composites.flv");
  			break;
  		case 3:
  			swapMovie("../../video/tour/fused.flv");
  			break;
  		case 4:
  			swapMovie("../../video/tour/electronics.flv");
  			break;
  		case 5:
  			swapMovie("../../video/tour/powerplant.flv");
  			break;
  		case 6:
  			swapMovie("../../video/tour/interiors.flv");
  			break;
  		case 7:
  			swapMovie("../../video/tour/testing.flv");
  			break;
  	}
  });
});

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

function swapMovie(_swapVideo) 
{
	var flashvars = {};
	var params = {};
	var attributes = {};
	
	flashvars.theVideo = _swapVideo;
	
	params.quality = "autohigh";
	params.bgcolor = "000000";
	params.allowscriptaccess = "always";
	
	swfobject.embedSWF("/public/swfs/tour/video.swf", "thevideo", "453", "323", "9.0.0", "/public/swfs/expressInstall.swf", flashvars, params, attributes);
}

function currentSwitch() 
{
	switch(currentSection) {
		case 0:
			$("blueprintblock").setStyle({backgroundPosition: "-0px -0px"});
			break;
		case 1:
			$("blueprintblock").setStyle({backgroundPosition: "-0px -208px"});
			break;
		case 2:
			$("blueprintblock").setStyle({backgroundPosition: "-0px -416px"});
			break;
		case 3:
			$("blueprintblock").setStyle({backgroundPosition: "-0px -624px"});
			break;
		case 4:
			$("blueprintblock").setStyle({backgroundPosition: "-0px -832px"});
			break;
		case 5:
			$("blueprintblock").setStyle({backgroundPosition: "-0px -1040px"});
			break;
		case 6:
			$("blueprintblock").setStyle({backgroundPosition: "-0px -1248px"});
			break;
		case 7:
			$("blueprintblock").setStyle({backgroundPosition: "-0px -1456px"});
			break;
	}
}

function originalReturn() 
{
	switch(originalSection) {
		case 0:
			$("blueprintblock").setStyle({backgroundPosition: "-0px -0px"});
			$("tourcontentblock").select("h3")[0].update("STATE&ndash;OF&ndash;THE&ndash;ART TIG&Eacute; HEADQUARTERS");
			$("tourcontentblock").select("p")[0].update(par1);
			$$(".nextlink")[0].update("Meticulous Molds/Flawless Finish >");
			break;
		case 1:
			$("blueprintblock").setStyle({backgroundPosition: "-0px -208px"});
			$("tourcontentblock").select("h3")[0].update("METICULOUS MOLDS/FLAWLESS FINISH");
			$("tourcontentblock").select("p")[0].update(par2);
			$$(".nextlink")[0].update("Advanced Composites Tig&eacute;&ndash;Tough Lamination >");
			break;
		case 2:
			$("blueprintblock").setStyle({backgroundPosition: "-0px -416px"});
			$("tourcontentblock").select("h3")[0].update("ADVANCED COMPOSITES/TIG&Eacute;&ndash;TOUGH LAMINATION");
			$("tourcontentblock").select("p")[0].update(par3);
			$$(".nextlink")[0].update("Hull &amp; Deck Fused As Solid Fiberglass Unit >");
			break;
		case 3:
			$("blueprintblock").setStyle({backgroundPosition: "-0px -624px"});
			$("tourcontentblock").select("h3")[0].update("HULL&amp;DECK FUSED AS SOLID FIBERGLASS UNIT");
			$("tourcontentblock").select("p")[0].update(par4);
			$$(".nextlink")[0].update("Precision Rigging Advanced Electronics >");
			break;
		case 4:
			$("blueprintblock").setStyle({backgroundPosition: "-0px -832px"});
			$("tourcontentblock").select("h3")[0].update("PRECISION RIGGING/ADVANCED ELECTRONICS");
			$("tourcontentblock").select("p")[0].update(par5);
			$$(".nextlink")[0].update("Tig&eacute; PCM Powerplant Installation >");
			break;
		case 5:
			$("blueprintblock").setStyle({backgroundPosition: "-0px -1040px"});
			$("tourcontentblock").select("h3")[0].update("TIG&Eacute; PCM POWERPLANT INSTALLATION");
			$("tourcontentblock").select("p")[0].update(par6);
			$$(".nextlink")[0].update("Functional Interiors/Solid Tig&eacute; Towers >");
			break;
		case 6:
			$("blueprintblock").setStyle({backgroundPosition: "-0px -1248px"});
			$("tourcontentblock").select("h3")[0].update("FUNCTIONAL INTERIORS/SOLID TIG&Eacute; TOWERS");
			$("tourcontentblock").select("p")[0].update(par7);
			$$(".nextlink")[0].update("Rigorous On&ndash;Water Testing >");
			break;
		case 7:
			$("blueprintblock").setStyle({backgroundPosition: "-0px -1456px"});
			$("tourcontentblock").select("h3")[0].update("RIGOROUS ON&ndash;WATER TESTING");
			$("tourcontentblock").select("p")[0].update(par8);
			$$(".nextlink")[0].update("State&ndash;Of&ndash;The&ndash;Art Tig&eacute; Headquarters >");
			break;
	}
}
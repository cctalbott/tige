document.observe("dom:loaded", function() {
  var current_rider = 'beauchesne';
  
  var beauchesne = new Rider();
  var rossi = new Rider();
  var errington = new Rider();
  var watkins = new Rider();
  var ruck = new Rider();
  var santori = new Rider();
  var weinacker = new Rider();
  var broome = new Rider();
  var williams = new Rider();
  
  riderSwitch();
  
  $("ridersMenu").select('li').each(function(element) {
    element.observe('click', function(event) {
      $("ridersMenu").select('li').each(function(element) {
        element.setStyle({backgroundColor: '#1a1a1a', color: '#666'});
      });
      
      current_rider = '';
    });
  });
  
  $("beauchesneBtn").observe('click', function(event) {
    current_rider = 'beauchesne';
    this.setStyle({backgroundColor: '#4d4d4d', color: '#fff'});
    $("imgthumbs").update("<li id='thumb1'></li><li id='thumb2'></li><li id='thumb3'></li><li id='thumb4'></li><li id='thumb5' class='lastlink'></li>");
  	riderSwitch();
  });
  
  $("rossiBtn").observe('click', function(event) {
    current_rider = 'rossi';
    this.setStyle({backgroundColor: '#4d4d4d', color: '#fff'});
    $("imgthumbs").update("<li id='thumb1'></li><li id='thumb2'></li><li id='thumb3'></li><li id='thumb4'></li><li id='thumb5' class='lastlink'></li>");
  	riderSwitch();
  });
  
  $("erringtonBtn").observe('click', function(event) {
    current_rider = 'errington';
    this.setStyle({backgroundColor: '#4d4d4d', color: '#fff'});
    $("imgthumbs").update("<li id='thumb1'></li><li id='thumb2'></li><li id='thumb3'></li><li id='thumb4'></li><li id='thumb5'></li><li id='thumb6'></li><li class='next'></li><li class='previous'></li><li id='thumb7'></li><li id='thumb8' class='lastlink'></li>");
  	riderSwitch();
  });
  
  $("watkinsBtn").observe('click', function(event) {
    current_rider = 'watkins';
    this.setStyle({backgroundColor: '#4d4d4d', color: '#fff'});
    $("imgthumbs").update("<li id='thumb1'></li><li id='thumb2'></li><li id='thumb3'></li><li id='thumb4'></li><li id='thumb5'></li><li id='thumb6'></li><li class='next'></li><li class='previous'></li><li id='thumb7'></li><li id='thumb8' class='lastlink'></li>");
  	riderSwitch();
  });
  
  $("ruckBtn").observe('click', function(event) {
    current_rider = 'ruck';
    this.setStyle({backgroundColor: '#4d4d4d', color: '#fff'});
    $("imgthumbs").update("<li id='thumb1'></li><li id='thumb2'></li><li id='thumb3'></li><li id='thumb4'></li><li id='thumb5'></li><li id='thumb6'></li><li id='thumb7' class='lastlink'></li>");
  	riderSwitch();
  });
  
  $("santoriBtn").observe('click', function(event) {
    current_rider = 'santori';
    this.setStyle({backgroundColor: '#4d4d4d', color: '#fff'});
    $("imgthumbs").update("<li id='thumb1'></li><li id='thumb2'></li><li id='thumb3'></li><li id='thumb4'></li><li id='thumb5'></li><li id='thumb6'></li><li id='thumb7' class='lastlink'></li>");
  	riderSwitch();
  });
  
  $("nicBtn").observe('click', function(event) {
    current_rider = 'weinacker';
    this.setStyle({backgroundColor: '#4d4d4d', color: '#fff'});
    $("imgthumbs").update("<li id='thumb1'></li><li id='thumb2'></li><li id='thumb3'></li><li id='thumb4'></li><li id='thumb5'></li><li id='thumb6'></li><li class='next'></li><li class='previous'></li><li id='thumb7'></li><li id='thumb8'></li><li id='thumb9' class='lastlink'></li>");
  	riderSwitch();
  });
  
  $("broomeBtn").observe('click', function(event) {
    current_rider = 'broome';
    this.setStyle({backgroundColor: '#4d4d4d', color: '#fff'});
    $("imgthumbs").update("<li id='thumb1'></li><li id='thumb2'></li><li id='thumb3'></li><li id='thumb4'></li><li id='thumb5'></li><li id='thumb6'></li><li id='thumb7' class='lastlink'></li>");
  	riderSwitch();
  });
  
  $("williamsBtn").observe('click', function(event) {
    current_rider = 'williams';
    this.setStyle({backgroundColor: '#4d4d4d', color: '#fff'});
    $("imgthumbs").update("<li id='thumb1'></li><li id='thumb2'></li><li id='thumb3'></li><li id='thumb4'></li><li id='thumb5'></li><li id='thumb6'></li><li id='thumb7' class='lastlink'></li>");
  	riderSwitch();
  });
  
  function Rider() 
  { 
    this.rollovers = function() {
      new Effect.Move('imgthumbs', {
        x: 0,
        y: 0,
        mode: 'absolute',
        queue: 'end',
        duration: 0.2
      });
      
      $("riderimg").setStyle({backgroundImage: "url("+$('htmldom').href+"public/images/team/riders/"+ current_rider + "/main/"+ current_rider + "0.jpg)"});
      
      $("imgthumbs").select('li').each(function(element, index) {
        if(element.match('.next')) 
        {
          element.observe('click', function(event) {
            new Effect.Move('imgthumbs', {
              x: -730,
              y: 0,
              mode: 'absolute',
              transition: Effect.Transitions.sinoidal,
              queue: 'end'
            });
          });
        }
        else if(element.match('.previous')) 
        {
          element.observe('click', function(event) {
            new Effect.Move('imgthumbs', {
              x: 0,
              y: 0,
              mode: 'absolute',
              transition: Effect.Transitions.sinoidal,
              queue: 'end'
            });
          });
        }
        else
        {
          if(index < 6)
          {
            element.setStyle({backgroundImage: "url(" + $('htmldom').href + "public/images/team/riders/" + current_rider + "/thumbs/" + current_rider + index + ".jpg)"});
            element.observe('mouseover', function(event) {  
              $("riderimg").setStyle({backgroundImage: "url(" + $('htmldom').href + "public/images/team/riders/" + current_rider + "/main/" + current_rider + index + ".jpg)"});
            });
            element.observe('click', function(event) {  
              $("riderimg").setStyle({backgroundImage: "url(" + $('htmldom').href + "public/images/team/riders/" + current_rider + "/main/" + current_rider + index + ".jpg)"});
            });
          } 
          else
          {
            element.setStyle({backgroundImage: "url(" + $('htmldom').href + "public/images/team/riders/" + current_rider + "/thumbs/" + current_rider + (index - 2) + ".jpg)"});
            element.observe('mouseover', function(event) {  
              $("riderimg").setStyle({backgroundImage: "url(" + $('htmldom').href + "public/images/team/riders/" + current_rider + "/main/" + current_rider + (index - 2) + ".jpg)"});
            });
            element.observe('click', function(event) {  
              $("riderimg").setStyle({backgroundImage: "url(" + $('htmldom').href + "public/images/team/riders/" + current_rider + "/main/" + current_rider + (index - 2) + ".jpg)"});
            });
          }
        }
      });
    };
  }
  
  function riderSwitch() 
  {
  	switch(current_rider) {
  		case "beauchesne":
  		  beauchesne.rollovers();
  			break;
  		case "rossi":
  			rossi.rollovers();
  			break;
  		case "errington":
  			errington.rollovers();
  			break;
  		case "watkins":
  			watkins.rollovers();
  			break;
  		case "ruck":
  		  ruck.rollovers();
  			break;
  		case "santori":
  		  santori.rollovers();
  			break;
  		case "weinacker":
  		  weinacker.rollovers();
  			break;
  		case "broome":
  			broome.rollovers();
  			break;
  		case "williams":
  		  williams.rollovers();
  			break;
  		default:
  			break;
  	}
  }
});
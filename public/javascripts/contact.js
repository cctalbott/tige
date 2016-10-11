// run jQuery with jQuery selector instead of $
if(typeof(jQuery) !== "undefined")
{
  jQuery.noConflict();
}

var tour_date_picker_present = 0;

document.observe("dom:loaded", function() {
  $$('.more').each(function(element) {
    var form = element.up('li').down('ul');
    
    form.setStyle({
      display: 'none'
    });
    
    element.observe('click', function(event) {
      var element = event.element();
      
      if(form.getStyle('display') == "none") 
      {
        form.setStyle({
          display: "block"
        });
        element.setStyle({
          backgroundPosition: "right -13px"
        });
        
        // TOUR DATE/TIME PICKER (uses jquery w/anytime plugin)
        if($("tourrequest").select("ul")[0].getStyle("display") != "none")
        {
          if(tour_date_picker_present != 1)
          {
            if(typeof(jQuery) !== "undefined")
            {
              jQuery("#tour_date").AnyTime_picker({
                format: "%e %M %Y", 
                firstDOW: 1
              });
              jQuery("#tour_time").AnyTime_picker({
                format: "%H:%i", 
                labelTitle: "Hour", 
                labelHour: "Hour", 
                labelMinute: "Minute"
              });
            }
          }
          tour_date_picker_present = 1;
        }
        
        form.observe('submit', function(event) {
          var element = event.element();
          
        	if(validate_form(element) == false) 
        	{
        	  event.stop();
        		return false;	
        	}
        });
      }
      else
      {
        form.setStyle({
          display: "none"
        });
        element.setStyle({
          backgroundPosition: "right 2px"
        });
      }
    });
  });
  
  if($('formconnect'))
  {
    $('formconnect').observe('submit', function(event) {
      var element = event.element();
      
    	if(validate_form(element) == false) 
    	{
    	  event.stop();
    		return false;	
    	}
    });
  }
});

function validate_form(thisform) 
{
  var notification = "";
  var validate_failed = 0;
  
	with(thisform) 
	{
	  // FNAME
	  if(thisform.readAttribute("name") == "form1" || thisform.readAttribute("name") == "form2" || thisform.readAttribute("name") == "form3" || thisform.readAttribute("name") == "form4" || thisform.readAttribute("name") == "form5" || thisform.readAttribute("name") == "formconnect")
	  {
		  if(!$$("form[name='"+ thisform.readAttribute("name") +"'] input[name='fname']")[0].present()) 
  		{
  		  notification += "First name must be filled out!\n";
  			validate_failed = 1;
  		}
  	}
  	// LNAME
  	if(thisform.readAttribute("name") == "form1" || thisform.readAttribute("name") == "form2" || thisform.readAttribute("name") == "form3" || thisform.readAttribute("name") == "form4" || thisform.readAttribute("name") == "form5" || thisform.readAttribute("name") == "formconnect")
	  { 
		  if(!$$("form[name='"+ thisform.readAttribute("name") +"'] input[name='lname']")[0].present()) 
  		{
  		  notification += "Last name must be filled out!\n";
  		  validate_failed = 1;
  		} 
	  }
	  //EMAIL
	  if(thisform.readAttribute("name") == "form1" || thisform.readAttribute("name") == "form2" || thisform.readAttribute("name") == "form3" || thisform.readAttribute("name") == "form4" || thisform.readAttribute("name") == "form5" || thisform.readAttribute("name") == "formconnect")
	  {
		  if(!$$("form[name='"+ thisform.readAttribute("name") +"'] input[name='email']")[0].present()) 
  		{
  		  notification += "Email must be filled out!\n";
  		  validate_failed = 1;
  		}
  	} 
  	// ADDRESS
		if(thisform.readAttribute("name") == "form1" || thisform.readAttribute("name") == "form2" || thisform.readAttribute("name") == "formconnect")
	  {
		  if(!$$("form[name='"+ thisform.readAttribute("name") +"'] input[name='address']")[0].present()) 
  		{
  		  notification += "Address must be filled out!\n";
  		  validate_failed = 1;
  		}
  	} 
  	// CITY
  	if(thisform.readAttribute("name") == "form1" || thisform.readAttribute("name") == "form2" || thisform.readAttribute("name") == "formconnect")
	  {
		  if(!$$("form[name='"+ thisform.readAttribute("name") +"'] input[name='city']")[0].present()) 
  		{
  		  notification += "City must be filled out!\n";
  		  validate_failed = 1;
  		} 
  	}
  	// STATE
  	if(thisform.readAttribute("name") == "form1" || thisform.readAttribute("name") == "form2" || thisform.readAttribute("name") == "formconnect")
	  {
		  if(!$$("form[name='"+ thisform.readAttribute("name") +"'] input[name='state']")[0].present()) 
  		{
  		  notification += "State must be filled out!\n";
  		  validate_failed = 1;
  		}
  	}
  	// ZIP
  	if(thisform.readAttribute("name") == "form1" || thisform.readAttribute("name") == "form2" || thisform.readAttribute("name") == "form3" || thisform.readAttribute("name") == "form4" || thisform.readAttribute("name") == "form5" || thisform.readAttribute("name") == "formconnect")
	  { 
		  if(!$$("form[name='"+ thisform.readAttribute("name") +"'] input[name='zip']")[0].present()) 
  		{
  		  notification += "Zip must be filled out!\n";
  		  validate_failed = 1;
  		}
  	}
  	// COUNTRY
  	if(thisform.readAttribute("name") == "form1" || thisform.readAttribute("name") == "form2")
	  { 
		  if(!$$("form[name='"+ thisform.readAttribute("name") +"'] input[name='country']")[0].present()) 
  		{
  		  notification += "Country must be filled out!\n";
  		  validate_failed = 1;
  		}
  	}
  	// PHONE
  	if(thisform.readAttribute("name") == "form2" || thisform.readAttribute("name") == "formconnect")
	  { 
		  if(!$$("form[name='" + thisform.readAttribute("name") + "'] input[name='phone']")[0].present()) 
  		{
  		  notification += "Phone must be filled out!\n";
  		  validate_failed = 1;
  		} 
  	}
  	// PURCHASEINTEREST
  	if(thisform.readAttribute("name") == "form1" || thisform.readAttribute("name") == "form2")
	  {
		  if(!$$("form[name='"+ thisform.readAttribute("name") +"'] select[name='purchaseinterest']")[0].present()) 
  		{
  		  notification += "Interest to purchase in: time period must be selected!\n";
  		  validate_failed = 1;
  		}
  	}
  	
  	if(validate_failed == 1)
  	{
  	  alert(notification);
  	  return false;
  	}
  	else
  	{
  	  return true;
  	}
	}
}
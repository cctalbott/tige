document.observe("dom:loaded", function() 
{
  setTimeout("hideConfirmation()", 5000);
});

function hideConfirmation() 
{
	$$(".confirmation").each(function(element) {
	  Effect.SlideUp(element, { scaleContent: false, duration: 0.5 });
	});
}
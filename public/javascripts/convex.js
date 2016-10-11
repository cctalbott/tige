document.observe('dom:loaded', function () {
  $("trimadvantages").select("ul li h4").each(function(element) {
    element.next().hide();
    
    element.observe('click', function(event) {
      var element = event.element();
      
      Effect.toggle(element.next().readAttribute('id'), 'slide', {duration: 0.1});
    });
  });
});
function WindowFactory(container, options) 
{  
  var window_header = new Element('div', {  
    className: 'window_header'  
  });  
  //var window_title = new Element('div', {  
  //  className: 'window_title'  
  //});  
  var window_close = new Element('div', {  
    'class': 'window_close'
  });  
  var window_contents = new Element('div', {  
    className: 'window_contents'  
  });
  var w = new Control.Window(container, Object.extend({  
    className: 'window',  
    closeOnClick: 'overlay',
    insertRemoteContentAt: window_contents
  }, options || {}));
  
  w.container.insert(window_header);  
  //window_header.insert(window_title);  
  window_header.insert(window_close);  
  w.container.insert(window_contents);
  return w;
}

function WindowOutput(element, insert)
{
  var the_window = new WindowFactory(element);
  
  $$('.window .window_close').each(function(element) {
    element.observe('click', function(event) {
      the_window.close();
    });
  });
  
  the_window.container.insert(insert);
}

function IframeWindowOutput(element)
{
  var the_window = new WindowFactory(element, {
    iframe: true,
    width: "500",
    height: "400"
  });
  
  $$('.window .window_close').each(function(element) {
    element.observe('click', function(event) {
      the_window.close();
    });
  });
}
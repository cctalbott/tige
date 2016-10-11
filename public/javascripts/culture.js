$("#dateinfo").css({"display": "block", "opacity": "0"});

var allDays = $("#calendarblock a:not(.submitEvent)");
for(var i = 2; i < allDays.length; i++) {
	allDays[i].onmouseover = dayover;
	allDays[i].onmouseout = dayout;
}

function dayover(evt) {
	var targ;
	if(!evt) { 
		var evt = window.event;
	}
	if(evt.target) {
		targ = evt.target;
	} else if(evt.srcElement) { 
		targ = evt.srcElement;
	}
	if (targ.nodeType == 3) { // defeat Safari bug
		targ = targ.parentNode;
	}

	var theDateInfo = $("#dateinfo");
	var theDay = evt;
	var theDayLink = "data/calEventsData.php" + targ.search;
	//alert(theDayLink);
	// ------<XY positions>------ \\
	// posx and posy contain the mouse position relative to the document
	// Do something with this information
	var offset = $(this).offset();
	var elementLeft = offset.left;
	var elementTop = offset.top;
	calTableId = $(this).parent().parent().parent().parent().get(0).id;
	// ------</XY positions>------ \\

	var opt = {
		type: "GET",
		url: theDayLink,
		success: function(t) {
			var response = t || 'nada';
			var theDateInfo = $("#dateinfo");
			theDateInfo.html(response);
			theDateInfo.stop(true, true).animate({opacity: 1}, 400);
			theDateInfo.css({top: (elementTop - theDateInfo.height() + 25) + "px"});
			if(calTableId == "calnextmonth") {
				theDateInfo.css({left: (elementLeft - 338) + "px"});
			} else {
				theDateInfo.css({left: (elementLeft + 25) + "px"});
			}
		},
		error: function(t) {
			alert('Error ' + t.status + ' -*- ' + t.statusText);
		}
	}
	$.ajax(opt);
}

function dayout(evt) {
	var theDateInfo = $("#dateinfo");
	theDateInfo.stop(true, true).animate({opacity: 0}, 400);
	theDateInfo.html("");
}
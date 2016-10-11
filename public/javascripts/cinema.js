// JavaScript Document
// ** remove qtsrcdontusebrowser from media params for public production version, it's for dealer version
//--------------------<video & list loading>--------------------\\
//include('javascripts/quicktime_detect.js');
$(document).ready(function() {
	$.get("data/xml/cinema.xml", {}, function(data) {
		$("#catmenu li").click(function() {
			clickedCategory = $(this).children("a").text();
			vidSrcClass = $("item[category='"+ clickedCategory +"']:eq(0)", data).find("thumb").attr("class");
			//------------------- /flash attempt
			var flashvars = {
				cinemaVideo: ""+ $("item[category='"+ clickedCategory +"']:eq(0)", data).attr("src") +""
			};
			var params = {};
			params.quality = "autohigh";
			params.bgcolor = "1A1A1A";
			params.allowscriptaccess = "always";
			var attributes = {};
			swfobject.embedSWF("cinema/cinema_oct28.swf", "flashReplace", "464", "277", "9.0.0", "expressInstall.swf", flashvars, params, attributes);
			//------------------- /flash attempt
			$("#cinemaInfo h5").text($("movies item thumb[class='"+ vidSrcClass +"']", data).parent("item").attr("title"));
			$("#cinemaInfo p").text($("movies item thumb[class='"+ vidSrcClass +"']", data).parent("item").children("description").text());
			relatedOutput();
			thumbOutput();
			removeCategoryClass();
			$("#catmenu li a:contains('"+ clickedCategory +"')").parent().addClass("activeCategory");
			featuredOutput();
			removeCategoryClass();
			$(this).addClass("activeCategory");
		});
		//------------------- flash attempt
		var flashvars = {
			cinemaVideo: ""+ $("item:eq(0)", data).attr("src") +""
		};
		var params = {};
		params.quality = "autohigh";
		params.bgcolor = "1A1A1A";
		params.allowscriptaccess = "always";
		var attributes = {};
		swfobject.embedSWF("cinema/cinema_oct28.swf", "flashReplace", "464", "277", "9.0.0", "expressInstall.swf", flashvars, params, attributes);
		//------------------- /flash attempt
		$("#cinemaInfo h5").text($("movies item:eq(0)", data).attr("title"));
		$("#cinemaInfo p").text($("movies item:eq(0) description", data).text());
		function relatedOutput() {
			currentVideoSrc = $("#stage object param[name='flashvars']").attr("value");
			currentVideoSrc = currentVideoSrc.replace(/cinemaVideo=/, "");
			currentVideoCategory = $("item[src='"+ currentVideoSrc +"']:first", data).attr("category");
			currentVideoRelated = $("item[src='"+ currentVideoSrc +"']:first related", data);
			relatedHTMLOutput = "";
			x = 0;
			($("item[src='"+ currentVideoSrc +"']:first related", data) || $("item[src='"+ currentVideoSrc +"']:first related", data)).each(function() {
				theRelatedId = $(this).text();
				theItem = $(this).parent().parent().find("item").find("id:contains('"+ theRelatedId +"')").filter(function(index) {
					return $(this).text() == theRelatedId;
				});
				if(x < currentVideoRelated.length) {
					videoThumb = theItem.parent().find("thumb").text();
					videoThumbClass = theItem.parent().find("thumb").attr("class");
					videoThumbImg = theItem.parent().find("thumb").attr("img");
					relatedData = BuildRelatedHTML(videoThumbClass, videoThumbImg, videoThumb);
					relatedHTMLOutput = relatedHTMLOutput + relatedData;
					x++;
				}
			});
			relatedHTMLOutput += "";
			$("#cinemaRelated ul li").remove();
			$("#cinemaRelated ul").prepend(relatedHTMLOutput);
			$("item", data).each(function() {
				$("."+ $(this).find("thumb").attr("class") +"").click(function () {
					vidSrcClass = $(this).attr("class");
					vidSrcClass = vidSrcClass.replace(/ fourththumb/, "");
					//------------------- /flash attempt
					var flashvars = {
						cinemaVideo: ""+ $("item thumb[class='"+ vidSrcClass +"']", data).parent("item").attr("src") +""
					};
					var params = {};
					params.quality = "autohigh";
					params.bgcolor = "1A1A1A";
					params.allowscriptaccess = "always";
					var attributes = {};
					swfobject.embedSWF("cinema/cinema_oct28.swf", "flashReplace", "464", "277", "9.0.0", "expressInstall.swf", flashvars, params, attributes);
					//------------------- /flash attempt
					$("#cinemaInfo h5").text($("movies item thumb[class='"+ vidSrcClass +"']", data).parent("item").attr("title"));
					$("#cinemaInfo p").text($("movies item thumb[class='"+ vidSrcClass +"']", data).parent("item").children("description").text());
					relatedOutput();
					thumbOutput();
					removeCategoryClass();
					$("#catmenu li a:contains('"+ currentVideoCategory +"')").parent().addClass("activeCategory");
					featuredOutput();
				});
			});
		}
		currentVideoSrc = $("#stage object param[name='flashvars']").attr("value");
		currentVideoSrc = currentVideoSrc.replace(/cinemaVideo=/, "");
		currentVideoCategory = $("item[src='"+ currentVideoSrc +"']:first", data).attr("category");
		$("#categoryindex .paginate").pagination($("item[category='"+ currentVideoCategory +"']", data).not($("item[src='"+ currentVideoSrc +"']", data)).length, {
			items_per_page: 8,
			num_display_entries: 8,
			prev_text: "&lt; ",
			next_text: " &gt;",
			callback: LoadNextThumbs			   
		});
		function thumbOutput() {
			currentVideoSrc = $("#stage object param[name='flashvars']").attr("value");
			currentVideoSrc = currentVideoSrc.replace(/cinemaVideo=/, "");
			currentVideoCategory = $("item[src='"+ currentVideoSrc +"']:first", data).attr("category");
			$("#categoryindex h4").html(currentVideoCategory);
			currentPage = $("#categoryindex .paginate span").not(".next, .prev").text();
			thumbHTMLOutput = "";
			categoryCount = $("item[category='"+ currentVideoCategory +"']", data).not($("item[src='"+ currentVideoSrc +"']"), data);
			if(categoryCount.length > 8) {
				y = (currentPage * 8) - 9;
				x = (currentPage * 8) - 1;
				z = (currentPage * 8) - 9;
				$("item[category='"+ currentVideoCategory +"']:gt("+ z +")", data).not($("item[src='"+ currentVideoSrc +"']", data)).each(function() {
					if(y < x) {
						videoThumb = $(this).find("thumb").text();
						videoThumbClass = $(this).find("thumb").attr("class");
						videoThumbImg = $(this).find("thumb").attr("img");
						thumbData = BuildThumbsHTML(videoThumbClass, videoThumbImg, videoThumb);
						thumbHTMLOutput = thumbHTMLOutput + thumbData;
						y++;
					}
				});
			} else {
				y = 0;
				x = categoryCount.length;
				$("item[category='"+ currentVideoCategory +"']", data).not($("item[src='"+ currentVideoSrc +"']", data)).each(function() {
					if(y < x) {
						videoThumb = $(this).find("thumb").text();
						videoThumbClass = $(this).find("thumb").attr("class");
						videoThumbImg = $(this).find("thumb").attr("img");
						thumbData = BuildThumbsHTML(videoThumbClass, videoThumbImg, videoThumb);
						thumbHTMLOutput = thumbHTMLOutput + thumbData;
						y++;
					}
				});
			}
			thumbHTMLOutput += "";
			$("#categoryindex ul").html(thumbHTMLOutput);
			$("#categoryindex ul li:eq(3)").addClass("fourththumb");
			$("#categoryindex ul li:eq(7)").addClass("fourththumb");
			$("item", data).each(function() {
				$("."+ $(this).find("thumb").attr("class") +"").click(function () {
					vidSrcClass = $(this).attr("class");
					vidSrcClass = vidSrcClass.replace(/ fourththumb/, "");
					//------------------- /flash attempt
					var flashvars = {
						cinemaVideo: ""+ $("item thumb[class='"+ vidSrcClass +"']", data).parent("item").attr("src") +""
					};
					var params = {};
					params.quality = "autohigh";
					params.bgcolor = "1A1A1A";
					params.allowscriptaccess = "always";
					var attributes = {};
					swfobject.embedSWF("cinema/cinema_oct28.swf", "flashReplace", "464", "277", "9.0.0", "expressInstall.swf", flashvars, params, attributes);
					//------------------- /flash attempt
					$("#cinemaInfo h5").text($("movies item thumb[class='"+ vidSrcClass +"']", data).parent("item").attr("title"));
					$("#cinemaInfo p").text($("movies item thumb[class='"+ vidSrcClass +"']", data).parent("item").children("description").text());
					relatedOutput();
					thumbOutput();
					removeCategoryClass();
					$("#catmenu li a:contains('"+ currentVideoCategory +"')").parent().addClass("activeCategory");
					featuredOutput();
				});
			});
		}
		relatedOutput();
		thumbOutput();
		function LoadNextThumbs() {
			thumbOutput();
		}
		function featuredOutput() {
			featuredHTMLOutput = "";
			x = 0;
			$("item featured", data).each(function() {
				if(x < 3) {
					videoFeatured = $(this).parent().find("thumb").text();
					videoFeaturedClass = $(this).parent().find("thumb").attr("class");
					videoFeaturedImg = $(this).parent().find("thumb").attr("img");
					featuredData = BuildFeaturedHTML(videoFeaturedClass, videoFeaturedImg, videoFeatured);
					featuredHTMLOutput = featuredHTMLOutput + featuredData;
					x++;
				}
			});
			featuredHTMLOutput += "";
			$("#cinemaFeatured ul").html(featuredHTMLOutput);
			$("#cinemaFeatured ul li:eq(2)").addClass("thirdfeatured");
			$("item featured", data).each(function() {
				$("."+ $(this).parent().find("thumb").attr("class") +"").click(function () {
					vidSrcClass = $(this).attr("class");
					vidSrcClass = vidSrcClass.replace(/ thirdfeatured/, "");
					//------------------- /flash attempt
					var flashvars = {
						cinemaVideo: ""+ $("item thumb[class='"+ vidSrcClass +"']", data).parent("item").attr("src") +""
					};
					var params = {};
					params.quality = "autohigh";
					params.bgcolor = "1A1A1A";
					params.allowscriptaccess = "always";
					var attributes = {};
					swfobject.embedSWF("cinema/cinema_oct28.swf", "flashReplace", "464", "277", "9.0.0", "expressInstall.swf", flashvars, params, attributes);
					//------------------- /flash attempt
					$("#cinemaInfo h5").text($("movies item thumb[class='"+ vidSrcClass +"']", data).parent("item").attr("title"));
					$("#cinemaInfo p").text($("movies item thumb[class='"+ vidSrcClass +"']", data).parent("item").children("description").text());
					relatedOutput();
					thumbOutput();
					removeCategoryClass();
					$("#catmenu li a:contains('"+ currentVideoCategory +"')").parent().addClass("activeCategory");
					featuredOutput();
				});
			});
		}
		removeCategoryClass();
		$("#catmenu li a:contains('"+ currentVideoCategory +"')").parent().addClass("activeCategory");
		featuredOutput();
	});
});
function BuildRelatedHTML(videoThumbClass, videoThumbImg, videoThumb) {
	output = "<li class='"+ videoThumbClass +"'>";
	//output += "<img src='"+ videoThumbImg +"' width='119' height='75' />";
	//output += "<h5>"+ videoThumb +"</h5>";
	output += "<a>"+ videoThumb +"</a>";
	output += "</li>";
	return output;
}
function BuildThumbsHTML(videoThumbClass, videoThumbImg, videoThumb) {
	output = "<li class='"+ videoThumbClass +"'>";
	//output += "<img src='"+ videoThumbImg +"' width='119' height='75' />";
	output += "<div></div>";
	output += "<h5>"+ videoThumb +"</h5>";
	output += "</li>";
	return output;
}
function BuildFeaturedHTML(videoFeaturedClass, videoFeaturedImg, videoFeatured) {
	output = "<li class='"+ videoFeaturedClass +"'>";
	//output += "<img src='"+ videoThumbImg +"' width='119' height='75' />";
	output += "<div class='thumb'></div>";
	output += "<h5>"+ videoFeatured +"</h5>";
	output += "<div class='drop'></div>";
	output += "</li>";
	return output;
}
function removeCategoryClass() {
	$("#catmenu li").each(function() {
		if($(this).hasClass("activeCategory")) {
			$(this).removeClass("activeCategory");
		}
	});
}
//--------------------</video & list loading>--------------------\\
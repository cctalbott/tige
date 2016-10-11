document.observe('dom:loaded', function() {
  function gaugesGallery() {
  	$("touchscreenContentGalleryLt").setStyle({visibility: "hidden"});
  	
  	$("touchscreenContentGalleryLt").observe('click', function() {
  		$("#touchscreenContentGallery .galleryWrapper ul").stop(true, true);
  		if($("#touchscreenContentGallery .galleryWrapper ul").position().left <= 1) {
  			$("#touchscreenContentGallery .galleryWrapper ul").animate({"left": "+=465px"}, "slow", showHideArrows);
  			$("#contentGalleryPg1").css({"background-position": "0 -7px"});
  			$("#contentGalleryPg2").css({"background-position": "0 0"});
  		}
  	});
  	
  	$("touchscreenContentGalleryRt").observe('click', function() {
  		$("#touchscreenContentGallery .galleryWrapper ul").stop(true, true);
  		if($("#touchscreenContentGallery .galleryWrapper ul").position().left >= -462) {
  			$("#touchscreenContentGallery .galleryWrapper ul").animate({"left": "-=465px"}, "slow", showHideArrows);
  			$("#contentGalleryPg1").css({"background-position": "0 0"});
  			$("#contentGalleryPg2").css({"background-position": "0 -7px"});
  		}
  	});
  }

  function depthGallery() {
  	$("#touchscreenContentGalleryLt").css({"visibility": "hidden"});
  	$("#touchscreenContentGalleryLt").click(function() {
  		$("#touchscreenContentGallery .galleryWrapper ul").stop(true, true);
  		if($("#touchscreenContentGallery .galleryWrapper ul").position().left <= 1) {
  			$("#touchscreenContentGallery .galleryWrapper ul").animate({"left": "+=465px"}, "slow", showHideArrows);
  			$("#contentGalleryPg1").css({"background-position": "0 -7px"});
  			$("#contentGalleryPg2").css({"background-position": "0 0"});
  		}
  	});
  	$("#touchscreenContentGalleryRt").click(function() {
  		$("#touchscreenContentGallery .galleryWrapper ul").stop(true, true);
  		if($("#touchscreenContentGallery .galleryWrapper ul").position().left >= -462) {
  			$("#touchscreenContentGallery .galleryWrapper ul").animate({"left": "-=465px"}, "slow", showHideArrows);
  			$("#contentGalleryPg1").css({"background-position": "0 0"});
  			$("#contentGalleryPg2").css({"background-position": "0 -7px"});
  		}
  	});
  }

  function profilesGallery() {
  	$("#touchscreenContentGalleryLt").css({"visibility": "hidden"});
  	$("#touchscreenContentGalleryLt").click(function() {
  		$("#touchscreenContentGallery .galleryWrapper ul").stop(true, true);
  		if($("#touchscreenContentGallery .galleryWrapper ul").position().left <= 1) {
  			$("#touchscreenContentGallery .galleryWrapper ul").animate({"left": "+=465px"}, "slow", showHideArrows);
  			$("#contentGalleryPg1").css({"background-position": "0 -7px"});
  			$("#contentGalleryPg2").css({"background-position": "0 0"});
  		}
  	});
  	$("#touchscreenContentGalleryRt").click(function() {
  		$("#touchscreenContentGallery .galleryWrapper ul").stop(true, true);
  		if($("#touchscreenContentGallery .galleryWrapper ul").position().left >= -462) {
  			$("#touchscreenContentGallery .galleryWrapper ul").animate({"left": "-=465px"}, "slow", showHideArrows);
  			$("#contentGalleryPg1").css({"background-position": "0 0"});
  			$("#contentGalleryPg2").css({"background-position": "0 -7px"});
  		}
  	});
  }

  function lightsGallery() {
  	$("#touchscreenContentGalleryLt").css({"visibility": "hidden"});
  	$("#touchscreenContentGalleryLt").click(function() {
  		$("#touchscreenContentGallery .galleryWrapper ul").stop(true, true);
  		if($("#touchscreenContentGallery .galleryWrapper ul").position().left <= 1) {
  			$("#touchscreenContentGallery .galleryWrapper ul").animate({"left": "+=465px"}, "slow", showHideArrows);
  			$("#contentGalleryPg1").css({"background-position": "0 -7px"});
  			$("#contentGalleryPg2").css({"background-position": "0 0"});
  		}
  	});
  	$("#touchscreenContentGalleryRt").click(function() {
  		$("#touchscreenContentGallery .galleryWrapper ul").stop(true, true);
  		if($("#touchscreenContentGallery .galleryWrapper ul").position().left >= -462) {
  			$("#touchscreenContentGallery .galleryWrapper ul").animate({"left": "-=465px"}, "slow", showHideArrows);
  			$("#contentGalleryPg1").css({"background-position": "0 0"});
  			$("#contentGalleryPg2").css({"background-position": "0 -7px"});
  		}
  	});
  }

  function switchesGallery() {
  	$("#touchscreenContentGalleryLt").css({"visibility": "hidden"});
  	$("#touchscreenContentGalleryLt").click(function() {
  		$("#touchscreenContentGallery .galleryWrapper ul").stop(true, true);
  		if($("#touchscreenContentGallery .galleryWrapper ul").position().left <= 1) {
  			$("#touchscreenContentGallery .galleryWrapper ul").animate({"left": "+=465px"}, "slow", showHideArrows);
  			$("#contentGalleryPg1").css({"background-position": "0 -7px"});
  			$("#contentGalleryPg2").css({"background-position": "0 0"});
  		}
  	});
  	$("#touchscreenContentGalleryRt").click(function() {
  		$("#touchscreenContentGallery .galleryWrapper ul").stop(true, true);
  		if($("#touchscreenContentGallery .galleryWrapper ul").position().left >= -462) {
  			$("#touchscreenContentGallery .galleryWrapper ul").animate({"left": "-=465px"}, "slow", showHideArrows);
  			$("#contentGalleryPg1").css({"background-position": "0 0"});
  			$("#contentGalleryPg2").css({"background-position": "0 -7px"});
  		}
  	});
  }

  function speedsetGallery() {
  	$("#touchscreenContentGalleryLt").css({"visibility": "hidden"});
  	$("#touchscreenContentGalleryLt").click(function() {
  		$("#touchscreenContentGallery .galleryWrapper ul").stop(true, true);
  		if($("#touchscreenContentGallery .galleryWrapper ul").position().left <= 1) {
  			$("#touchscreenContentGallery .galleryWrapper ul").animate({"left": "+=465px"}, "slow", showHideArrows);
  			$("#contentGalleryPg1").css({"background-position": "0 -7px"});
  			$("#contentGalleryPg2").css({"background-position": "0 0"});
  		}
  	});
  	$("#touchscreenContentGalleryRt").click(function() {
  		$("#touchscreenContentGallery .galleryWrapper ul").stop(true, true);
  		if($("#touchscreenContentGallery .galleryWrapper ul").position().left >= -462) {
  			$("#touchscreenContentGallery .galleryWrapper ul").animate({"left": "-=465px"}, "slow", showHideArrows);
  			$("#contentGalleryPg1").css({"background-position": "0 0"});
  			$("#contentGalleryPg2").css({"background-position": "0 -7px"});
  		}
  	});
  }

  function audioGallery() {
  	$("#touchscreenContentGalleryLt").css({"visibility": "hidden"});
  	$("#touchscreenContentGalleryLt").click(function() {
  		$("#touchscreenContentGallery .galleryWrapper ul").stop(true, true);
  		if($("#touchscreenContentGallery .galleryWrapper ul").position().left <= 1) {
  			$("#touchscreenContentGallery .galleryWrapper ul").animate({"left": "+=465px"}, "slow", showHideArrows);
  			$("#contentGalleryPg1").css({"background-position": "0 -7px"});
  			$("#contentGalleryPg2").css({"background-position": "0 0"});
  		}
  	});
  	$("#touchscreenContentGalleryRt").click(function() {
  		$("#touchscreenContentGallery .galleryWrapper ul").stop(true, true);
  		if($("#touchscreenContentGallery .galleryWrapper ul").position().left >= -462) {
  			$("#touchscreenContentGallery .galleryWrapper ul").animate({"left": "-=465px"}, "slow", showHideArrows);
  			$("#contentGalleryPg1").css({"background-position": "0 0"});
  			$("#contentGalleryPg2").css({"background-position": "0 -7px"});
  		}
  	});
  }

  function showHideArrows() {
  	if($("#touchscreenContentGallery .galleryWrapper ul").position().left >= -462) {
  		$("#touchscreenContentGalleryLt").css({"visibility": "hidden"});
  		if(vars["sect"] == "gauges" || vars["sect"] == "depth" || vars["sect"] == "profiles" || vars["sect"] == "lights" || vars["sect"] == "switches" || vars["sect"] == "speedset" || vars["sect"] == "audio") {
  			$("#touchscreenContentGalleryRt").css({"visibility": "visible"});
  		}
  	} else {
  		$("#touchscreenContentGalleryLt").css({"visibility": "visible"});
  		if(vars["sect"] == "gauges" || vars["sect"] == "depth" || vars["sect"] == "profiles" || vars["sect"] == "lights" || vars["sect"] == "switches" || vars["sect"] == "speedset" || vars["sect"] == "audio") {
  			$("#touchscreenContentGalleryRt").css({"visibility": "hidden"});
  		}
  	}
  }
});
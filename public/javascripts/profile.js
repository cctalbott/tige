// JavaScript Document

function removeActiveYr() {
	$("#btn91").removeClass("activeyr");
	$("#btn94").removeClass("activeyr");
	$("#btn95").removeClass("activeyr");
	$("#btn97").removeClass("activeyr");
	$("#btn98").removeClass("activeyr");
	$("#btn00").removeClass("activeyr");
	$("#btn02").removeClass("activeyr");
	$("#btn03").removeClass("activeyr");
	$("#btn04").removeClass("activeyr");
	$("#btn05").removeClass("activeyr");
	$("#btn06").removeClass("activeyr");
	$("#btn07").removeClass("activeyr");
	$("#btn08").removeClass("activeyr");
}

$("#profilenavblock li").click(function() {
	$("#profileinfoblock p").eq(1).remove();									
});
$("#btn91").click(function() {
	$("#profilenavblock li.activeyr").removeClass("activeyr");
	$(this).addClass("activeyr");
	//if($.browser.msie && $.browser.version < "8") {
		$("#profileimgblock").html("<img src='images/profile/yrimgs/1991.jpg' width='655' height='290' />");	
	/*} else {
		$("#profileimgblock").css({backgroundImage: "url(../images/profile/yrimgs/1991.jpg)"});
	}*/
	$("#profileinfoblock h3").html("1991 TIG&Eacute; FOUNDED");
	$("#profileinfoblock p").html("Founded in California, Tig&eacute; enters market with first model the Tig&eacute; 2000slm an innovative tournament&ndash;type inboard that boasted a legendary slalom wake. Tig&eacute; was named &ldquo;Rookie of the Year&rdquo; by WaterSki Magazine for its innovative approach to ski boat design.");
});
$("#btn94").click(function() {
	$("#profilenavblock li.activeyr").removeClass("activeyr");
	$(this).addClass("activeyr");
	//if($.browser.msie && $.browser.version < "8") {
		$("#profileimgblock").html("<img src='images/profile/yrimgs/1994.jpg' width='655' height='290' />");	
	/*} else {
		$("#profileimgblock").css({backgroundImage: "url(../images/profile/yrimgs/1994.jpg)"});
	}*/
	$("#profileinfoblock h3").html("1994 TIG&Eacute; RELOCATES HEADQUARTERS AND MANUFACTURING FACILITY");
	$("#profileinfoblock p").html("Tig&eacute; relocates headquarters and manufacturing facility to Abilene, Texas.");
});
$("#btn95").click(function() {
	$("#profilenavblock li.activeyr").removeClass("activeyr");
	$(this).addClass("activeyr");
	//if($.browser.msie && $.browser.version < "8") {
		$("#profileimgblock").html("<img src='images/profile/yrimgs/1995.jpg' width='655' height='290' />");	
	/*} else {
		$("#profileimgblock").css({backgroundImage: "url(../images/profile/yrimgs/1995.jpg)"});
	}*/
	$("#profileinfoblock h3").html("1995 TIG&Eacute; INTRODUCES TAPS TECHNOLOGY AND RECIEVES U.S. PATENT");
	$("#profileinfoblock p").html("Tig&eacute; Introduces innovative TAPS technology and receives U.S. Patent. TAPS revolutionizes the inboard industry by dramatically boosting watersport versatility and performance. TAPS is later named &ldquo;Best Innovation of the Decade&rdquo; by WaterSki Magazine.");
});
$("#btn97").click(function() {
	$("#profilenavblock li.activeyr").removeClass("activeyr");
	$(this).addClass("activeyr");
	//if($.browser.msie && $.browser.version < "8") {
		$("#profileimgblock").html("<img src='images/profile/yrimgs/1997.jpg' width='655' height='290' />");	
	/*} else {
		$("#profileimgblock").css({backgroundImage: "url(../images/profile/yrimgs/1997.jpg)"});
	}*/
	$("#profileinfoblock h3").html("1997 TIG&Eacute; BUILD INDUSTRY&rsquo;S FIRST 100\" BEAM WIDE BODY DIRECT&ndash;DRIVE INBOARD");
	$("#profileinfoblock p").html("Tig&eacute; builds the industry&rsquo;s first 100\" beam wide body direct&ndash;drive inboard&hellip;the 2200i&hellip;tagged &ldquo;The World&rsquo;s First Precision Watersport Family Room.&rdquo;");
	$("#profileinfoblock").append("<p>Tig&eacute; 2200V is named &ldquo;Wakeboard Boat of the Year&rdquo; by L10 Magazine.</p>");
});
$("#btn98").click(function() {
	$("#profilenavblock li.activeyr").removeClass("activeyr");
	$(this).addClass("activeyr");
	//if($.browser.msie && $.browser.version < "8") {
		$("#profileimgblock").html("<img src='images/profile/yrimgs/1998.jpg' width='655' height='290' />");	
	/*} else {
		$("#profileimgblock").css({backgroundImage: "url(../images/profile/yrimgs/1998.jpg)"});
	}*/
	$("#profileinfoblock h3").html("1998 TIG&Eacute; LAUNCHES 21V RIDERS EDITION");
	$("#profileinfoblock p").html("Tig&eacute; launches the 21V Riders Edition, the first boat designed and built specifically for wakeboarding. The breakthrough model earns Tig&eacute; its second &ldquo;Wakeboard Boat of the Year&rdquo; honor.");
});
$("#btn00").click(function() {
	$("#profilenavblock li.activeyr").removeClass("activeyr");
	$(this).addClass("activeyr");
	//if($.browser.msie && $.browser.version < "8") {
		$("#profileimgblock").html("<img src='images/profile/yrimgs/2000.jpg' width='655' height='290' />");	
	/*} else {
		$("#profileimgblock").css({backgroundImage: "url(../images/profile/yrimgs/2000.jpg)"});
	}*/
	$("#profileinfoblock h3").html("2000 TIG&Eacute; HOSTS IWSF WORLD WAKEBOARD CHAMPIONSHIPS");
	$("#profileinfoblock p").html("Tig&eacute; hosts the IWSF World Wakeboard Championships in Southern France, the first of four international WWC events which are held the following years in South Africa, Brazil and Australia.");
});
$("#btn02").click(function() {
	$("#profilenavblock li.activeyr").removeClass("activeyr");
	$(this).addClass("activeyr");
	//if($.browser.msie && $.browser.version < "8") {
		$("#profileimgblock").html("<img src='images/profile/yrimgs/2002.jpg' width='655' height='290' />");	
	/*} else {
		$("#profileimgblock").css({backgroundImage: "url(../images/profile/yrimgs/2002.jpg)"});
	}*/
	$("#profileinfoblock h3").html("2002 TIG&Eacute; U.S. OPEN");
	$("#profileinfoblock p").html("Tig&eacute; U.S. Open staged in Florida. TeamTig&eacute; amateur rider Tino Santori outshines world&rsquo;s best riders to win it.");
});
$("#btn03").click(function() {
	$("#profilenavblock li.activeyr").removeClass("activeyr");
	$(this).addClass("activeyr");
	//if($.browser.msie && $.browser.version < "8") {
		$("#profileimgblock").html("<img src='images/profile/yrimgs/2003.jpg' width='655' height='290' />");	
	/*} else {
		$("#profileimgblock").css({backgroundImage: "url(../images/profile/yrimgs/2003.jpg)"});
	}*/
	$("#profileinfoblock h3").html("2003 CONVEX V HULL AND TAPS<sup>2</sup> INTRODUCED");
	$("#profileinfoblock p").html("Breakthrough Tig&eacute; ConvexV hull is introduced along with next&ndash;generation TAPS technology. The ConvexV hull design is so innovative it is later awarded two U.S. Patents for design and application.");
	$("#profileinfoblock").append("<p>Tig&eacute; also introduces revolutionary LifePlus Core all&ndash;composite hull construction backed by LifePlus Lifetime Replacement Warranty&hellip;the only replacement warranty in the industry.</p>");
});
$("#btn04").click(function() {
	$("#profilenavblock li.activeyr").removeClass("activeyr");
	$(this).addClass("activeyr");
	//if($.browser.msie && $.browser.version < "8") {
		$("#profileimgblock").html("<img src='images/profile/yrimgs/2004.jpg' width='655' height='290' />");	
	/*} else {
		$("#profileimgblock").css({backgroundImage: "url(../images/profile/yrimgs/2004.jpg)"});
	}*/
	$("#profileinfoblock h3").html("2004 TIG&Eacute; U.S. OPEN WAKEBOARDING CHAMPIONSHIP");
	$("#profileinfoblock p").html("Tig&eacute; hosts the 2004 Tig&eacute; U.S. Open Wakeboarding Championship in Kauai, Hawaii, the birthplace of wakeboarding.");
});
$("#btn05").click(function() {
	$("#profilenavblock li.activeyr").removeClass("activeyr");
	$(this).addClass("activeyr");
	//if($.browser.msie && $.browser.version < "8") {
		$("#profileimgblock").html("<img src='images/profile/yrimgs/2005.jpg' width='655' height='290' />");	
	/*} else {
		$("#profileimgblock").css({backgroundImage: "url(../images/profile/yrimgs/2005.jpg)"});
	}*/
	$("#profileinfoblock h3").html("2005 TIG&Eacute; INTRODUCES V&eacute; SERIES");
	$("#profileinfoblock p").html("Tig&eacute; introduces the breakthrough Tig&eacute; V&eacute; Series, setting a new inboard standard for performance, comfort and convenience. The 2005 Tig&eacute; U.S. Pro&ndash;Am Wakeboarding Championship is hosted in Florida Keys. ");
});
$("#btn06").click(function() {
	$("#profilenavblock li.activeyr").removeClass("activeyr");
	$(this).addClass("activeyr");
	//if($.browser.msie && $.browser.version < "8") {
		$("#profileimgblock").html("<img src='images/profile/yrimgs/2006.jpg' width='655' height='290' />");	
	/*} else {
		$("#profileimgblock").css({backgroundImage: "url(../images/profile/yrimgs/2006.jpg)"});
	}*/
	$("#profileinfoblock h3").html("2006 TIG&Eacute; OPENS NEW HEADQUARTERS AND MANUFACTURING FACILITY");
	$("#profileinfoblock p").html("Tig&eacute; opens its new 130,000 square&ndash;foot headquarters and manufacturing facility in Abilene, Texas. Designed specifically for inboard manufacturing, the state&ndash;of&ndash;the&ndash;art facility triples Tig&eacute;&rsquo;s production capacity.");
});
$("#btn07").click(function() {
	$("#profilenavblock li.activeyr").removeClass("activeyr");
	$(this).addClass("activeyr");
	//if($.browser.msie && $.browser.version < "8") {
		$("#profileimgblock").html("<img src='images/profile/yrimgs/2007.jpg' width='655' height='290' />");	
	/*} else {
		$("#profileimgblock").css({backgroundImage: "url(../images/profile/yrimgs/2007.jpg)"});
	}*/
	$("#profileinfoblock h3").html("2007 TIG&Eacute; LAUNCHES RZ SERIES");
	$("#profileinfoblock p").html("Tig&eacute; launches RZ series and the 21&ndash;foot Tig&eacute; Z1, all delivering top performance and offering bold new styling options. Tig&eacute; also introduces Tig&eacute; SpeedSet and the state&ndash;of&ndash;the&ndash;art Tig&eacute; Electronic Control system featuring superior functionality, reliability.  The 2008 Tig&eacute; Pro&ndash;Am Wakeboarding Championship travels south of the border to Canc&uacute;n, Mexico.");
});
$("#btn08").click(function() {
	$("#profilenavblock li.activeyr").removeClass("activeyr");
	$(this).addClass("activeyr");
	//if($.browser.msie && $.browser.version < "8") {
		$("#profileimgblock").html("<img src='images/profile/yrimgs/2008.jpg' width='655' height='290' />");	
	/*} else {
		$("#profileimgblock").css({backgroundImage: "url(../images/profile/yrimgs/2008.jpg)"});
	}*/
	$("#profileinfoblock h3").html("2008 TIG&Eacute; INTRODUCES ALPHAZ TOWER AND TEAMS WITH PCM ENGINES");
	$("#profileinfoblock p").html("Tig&eacute; creates and introduces the AlphaZ Tower, a new standard in tower design and functionality that fully integrates with advanced Tig&eacute; styling and structural superiority. Tig&eacute; teams with PCM Marine Engines, the most elite, fuel efficient and reliable power plant in the industry. Exciting new 2009 Tig&eacute; line is introduced at Tig&eacute; Pro&ndash;Am Wakeboarding Championship in Portland, Oregon. Tige.com is named Best Marine Manufacturer Website by NMMA.");
});
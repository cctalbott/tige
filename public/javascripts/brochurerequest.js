/*jQuery.each($(".more").parent().parent().children("ul").children("li"), function() {
	$(this).css({"display": "none"});
});
$(".more:eq(0)").parent().parent().children("ul").children("li").css({"display": "block"});
$(".more:eq(0)").css({"background-position": "right -13px"});
$(".more").click(function() {
	if($(this).parent().parent().children("ul").children("li").css("display") == "none") {
		$(this).css({"background-position": "right -13px"});
		$(this).parent().parent().children("ul").children("li").css({"display": "block"});
	} else {
		$(this).css({"background-position": "right 2px"});
		$(this).parent().parent().children("ul").children("li").css({"display": "none"});
	}
});*/

function validate_required(field, alerttxt) {
	with(field) {
		if (field.attr("value") == null || field.attr("value") == "") {
			alert(alerttxt);
			return false;
		} else {
			return true;
		}
	}
}
function validate_form1(thisform) {
	with(thisform) {
		if(validate_required($("form[name='" + thisform.attr("name") + "'] input[name='fname']"), "First name must be filled out!") == false) {
			$("form[name='" + thisform.attr("name") + "'] input[name='fname']").focus();
			return false;
		} else if(validate_required($("form[name='" + thisform.attr("name") + "'] input[name='lname']"), "Last name must be filled out!") == false) {
			$("form[name='" + thisform.attr("name") + "'] input[name='lname']").focus();
			return false;
		} else if(validate_required($("form[name='" + thisform.attr("name") + "'] input[name='email']"), "Email must be filled out!") == false) {
			$("form[name='" + thisform.attr("name") + "'] input[name='email']").focus();
			return false;
		} else if(validate_required($("form[name='" + thisform.attr("name") + "'] input[name='address']"), "Address must be filled out!") == false) {
			$("form[name='" + thisform.attr("name") + "'] input[name='address']").focus();
			return false;
		} else if(validate_required($("form[name='" + thisform.attr("name") + "'] input[name='city']"), "City must be filled out!") == false) {
			$("form[name='" + thisform.attr("name") + "'] input[name='city']").focus();
			return false;
		} else if(validate_required($("form[name='" + thisform.attr("name") + "'] input[name='state']"), "State must be filled out!") == false) {
			$("form[name='" + thisform.attr("name") + "'] input[name='state']").focus();
			return false;
		} else if(validate_required($("form[name='" + thisform.attr("name") + "'] input[name='zip']"), "Zip must be filled out!") == false) {
			$("form[name='" + thisform.attr("name") + "'] input[name='zip']").focus();
			return false;
		} else if(validate_required($("form[name='" + thisform.attr("name") + "'] input[name='country']"), "Country must be filled out!") == false) {
			$("form[name='" + thisform.attr("name") + "'] input[name='country']").focus();
			return false;
		} else if(validate_required($("form[name='" + thisform.attr("name") + "'] select[name='purchaseinterest']"), "Interest to purchase in: time period must be selected!") == false) {
			$("form[name='" + thisform.attr("name") + "'] select[name='purchaseinterest']").focus();
			return false;
		}
	}
}


$("form[name='form1']").submit(function() {
	if(validate_form1($("form[name='form1']")) == false) {
		return false;	
	} else {
		return true;
	}
});
// JavaScript Document
/*$("#printlistlink").click(function() {
	$("#demoblock").window.print();								   
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
function validate_form2(thisform) {
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
		} else if(validate_required($("form[name='" + thisform.attr("name") + "'] input[name='phone']"), "Phone must be filled out!") == false) {
			$("form[name='" + thisform.attr("name") + "'] input[name='phone']").focus();
			return false;
		}
	}
}


$("form[name='form2']").submit(function() {
	if(validate_form2($("form[name='form2']")) == false) {
		return false;	
	} else {
		return true;
	}
});
function validation()

{

  var a = document.getElementById("password");
  var b = document.getElementById("conpass");

  var myInput = document.getElementById("password");
    var lowerCaseLetters = /[a-z]/g;
      var upperCaseLetters = /[A-Z]/g;
        var numbers = /[0-9]/g;


if ($("#name").val()=="")
	{
		alert("Name cannot be empty");
		$("#name").focus();
		return false;
	}
	else if($("#email").val()=="")
{
	alert("email cant be empty");
	$("#email").focus();
		return false;
}

else if (!isValidEmailAddress($("#email").val()))
{
	alert("Enter a valid email  ID");
	$("#email").focus();
		return false;
}
	
else if($("#mob").val()=="")

{
	alert("mob cant be empty");
	$("#mob").focus();
		return false;
}	

else if($("#add").val()=="")
{
	alert("add can be empty");
	$("#add").focus();
		return false;
}	

else if($("#passsword").val()=="" || !myInput.value.match(lowerCaseLetters) || !myInput.value.match(upperCaseLetters) || !myInput.value.match(numbers) ) {
alert("Password must not be empty and should be aplha numneric with at least one capital letter");
}

	else if($("#conpass").val()=="")
{
	alert("confirm your passsword");
$("#conpass").focus();
		return false;
}	

else if(a.value != b.value)
{
	alert("passsword dont match");
$("#passsword").focus();
		return false;
}





}


function isValidEmailAddress(emailAddress) {
	var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
	return pattern.test(emailAddress)
}

jQuery(document).ready(function($) {

	$('#mob').on('change keydown', function(e){
        	var key = e.charCode || e.keyCode;
  if (key == 38|| key== 40 || key == 109 || key== 107 || key == 190 || key == 69) 
  { 
     e.preventDefault();
  }    
});

});

jQuery(document).ready(function($) {

	$('#mob').on('change keydown', function(e){
        	var key = e.charCode || e.keyCode;
  if (key == 17 || key == 17) 
  { 
     e.preventDefault();
  }    
});

});















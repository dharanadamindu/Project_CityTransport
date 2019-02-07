function abc() { //external java script

var num = document.forms["inform"]["mobile"];
var fname = document.forms["inform"]["fname"];
var pass = document.forms["inform"]["pass"];
var repass = document.forms["inform"]["re_pass"];

if(num.value == "") {
	document.getElementById('mobile_no_error').innerHTML='please enter your number';
	return false;
}
else if(num.value.length != 10 || isNaN(num.value)){
	document.getElementById('mobile_no_error').innerHTML='Enter Valid Mobile Number here';
	document.getElementById('fname_error').innerHTML='';
	document.getElementById('re_pass_error').innerHTML='';
	document.getElementById('pass_error').innerHTML='';
	return false;

}
else if(fname.value==""){
	document.getElementById('fname_error').innerHTML='Enter your Full Name please';
	document.getElementById('mobile_no_error').innerHTML='';
	document.getElementById('re_pass_error').innerHTML='';
	document.getElementById('pass_error').innerHTML='';

	return false;

}else if(pass.value==""){
	document.getElementById('pass_error').innerHTML='Enter new password Here';
	document.getElementById('mobile_no_error').innerHTML='';
	document.getElementById('fname_error').innerHTML='';
	document.getElementById('re_pass_error').innerHTML='';
	return false;

}else if(repass.value==""){
	document.getElementById('re_pass_error').innerHTML='Re type password here';
	document.getElementById('mobile_no_error').innerHTML='';
	document.getElementById('fname_error').innerHTML='';
	document.getElementById('pass_error').innerHTML='';
	return false;
}

else if(pass.value!=repass.value){
	document.getElementById('re_pass_error').innerHTML='password not matched, type again';
	document.getElementById('mobile_no_error').innerHTML='';
	document.getElementById('pass_error').innerHTML='';
	document.getElementById('fname_error').innerHTML='';
	return false;
}


else{
	alert("successfull")
	return true;

}

}
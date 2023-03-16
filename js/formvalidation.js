var fullnameError=document.getElementById('fullname-error');
var phonenumberError=document.getElementById('phonenumber-error');
var emailError=document.getElementById('email-error');
var genderError=document.getElementById('gender-error');
var countyError=document.getElementById('county-eror');
var townError=document.getElementById('town-error');
var passwordError=document.getElementById('password-error');
var conpasswordError=document.getElementById('conpassword-error');
var submitError=document.getElementById('submit-error');

function validateFullname(){
	var fullname=document.getElementById('fname').value;

	if(fullname.length==0){
		fullnameError.innerHTML='Fullname is required';
		return false;
	}
	if(!fullname.match(/^[A-Za-z*\s{1}[A-Za-z]*$/)){
		fullnameError.innerHTML='Provide fullname in required format';
		return false;
	}
	fullnameError.innerHTML='valid';
	return true;
}

function validatePhonenumber(){
	var phonenumber=document.getElementById('phonenumber').value;

	if(phonenumber.length==0){
		phonenumberError.innerHTML='Phone number is required';
		return false;
	}
	if(phonenumber.length !==10){
		phonenumberError.innerHTML='Phone number should be 10 digits';
		return false;
	}
	if(!phonenumber.match(/^[0-9]{10}$/)){
		phonenumberError.innerHTML='Phonenumber should be in digits only';
		return false;
	}
	phonenumberError.innerHTML='valid';
	return true;
}

function validateEmail(){
	var email=document.getElementById('email').value;

	if(email.length==0){
		emailError.innerHTML='Email is required';
		return false;
	}
	if(!email.match(/^[A-Za-z\._\-[0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)){
		emailError.innerHTML='Email is invalid';
		return false;
	}
	emailError.innerHTML='email is valid';
	return true;
}

function validateTown(){
	var town=document.getElementById('town').value;

	if(town.length==0){
		townError.innerHTML='Town is required';
		return false;
	}
	if(!town.match(/^[a-zA-Z0-9\s,.'-]{5,}$/)){
		townError.innerHTML='Enter a valid town';
		return false;
	}
	townError.innerHTML='valid';
	return true;
}

function validatePassword(){
	var password=document.getElementById('password').value;

	if(password.length==0){
		passwordError.innerHTML='password is required';
		return false;
	}
	if(!password.match(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/)){
		passwordError.innerHTML='password must contain one uppercase, one lowercase, special character and one numeric digit and between 8-15 characters';
		return false;
	}
	passwordError.innerHTML='valid';
	return true;
}

function validateConpassword(){
	var conpassword=document.getElementById('conpassword').value;
	var password=document.getElementById('password').value;

}
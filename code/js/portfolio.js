function loginValidate(){
	alert('hi');

	var name= document.getElementById('user').value;
	var password= document.getElementById('password').value;

	if(name=='' || password==''){
		alert('All fields required');
		return false;
	}
	else if (name.length <3){
		alert('Name should be greater than 3');
		return false;
	}
	else if (password.length <6){
		alert('Password is short');
		return false;
	}

	else{
		return true;
	}

}

function sign(){
	
	var name= document.getElementById('name').value;
	var lname= document.getElementById('lname').value;
	var email= document.getElementById('email').value;
	var user= document.getElementById('user').value;
	var password= document.getElementById('password').value;
	var repassword=document.getElementById('repassword').value;

	if(name=='' || password=='' || email=='' ||repassword ==''){
		alert('All fields required');
		return false;
	}

	if (password != repassword) {
		alert('passwords do not match');
		return false;
	}

	if (password.length <6) {
		alert('password is short');
		return false;
	}

}


function contactval(){
    
    var name= document.getElementById('name').value;
    var email= document.getElementById('email').value;
    var phone= document.getElementById('phone').value;
    var message=document.getElementById('message').value;

    if (name==''|| phone=='' || message==''||email=='') {
      alert('All fields required');
      return false;
    }

  }

/*
function signUpValidate(){
	var name= document.getElementById('name').value;
	var lname= document.getElementById('lname').value;
	var email= document.getElementById('email').value;
	var user= document.getElementById('user').value;
	var password= document.getElementById('password').value;
	var repassword=document.getElementById('repassword').value;

	if(name.value='' || password.value='' || email.value='' || user.value='' || repassword=''){
		alert('All fields required');
		return false;
	}
	else if (name.value<3){
		alert('Name should be greater than 3');
		return false;
	}
	else if (user.value<3){
		alert('User should be greater than 3');
		return false;
	}
	else if (password.value <6){
		alert('Password is short');
		return false;
	}

	else if (repassword !== password){
		alert('passwords do not match');
		return false;
	}


	else{
		alert('hi');
		return true;
	}

}

*/
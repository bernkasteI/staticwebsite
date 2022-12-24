function checkName(nameValue, nameId) {
	var pattern=/[a-zA-Z]+$/;
	var msg;
	
	
	if(nameValue.match(pattern)) {
		msg='Data is valid';
	}
	else {
		msg='Invalid data entered';
	}
	document.getElementById(nameId+'Help').innerHTML=msg;
}

function checkEmail(emailValue)
{
	var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
	var msg;
	if(emailValue.match(mailformat))
	{
		msg="Email is valid";
		console.log("Valid");
	}
	else
	{
		msg="Email is invalid";
		console.log("invalid");
	}
	document.getElementById('emailHelp').innerHTML=msg;
}

function checkUsername(usernameValue)
{
	var pattern = /[A-Za-z\d]{8,}$/; // only letters and digits
	var msg;
	if(usernameValue.match(pattern))
	{
		msg="Username is valid";
		console.log("Valid");
	}
	else
	{
		msg="Username is invalid";
		console.log("invalid");
	}
	document.getElementById('usernameHelp').innerHTML=msg;
}

function checkComments(commentValue)
{
	var pattern = /^(?!.*[!@#$%^&*]).*$/; 
	var msg;
	if(commentValue.match(pattern))
	{
		msg="Comment is valid";
		console.log("Valid");
	}
	else
	{
		msg="Comment is invalid";
		console.log("invalid");
	}
	document.getElementById('commentHelp').innerHTML=msg;
}


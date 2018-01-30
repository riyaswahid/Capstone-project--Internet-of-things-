// JavaScript Documentfunction formValidator(){
	// Make quick references to our fields
		function formValidator(){

	var UserName = document.getElementById('Username');
	var Password = document.getElementById('password');
	
	// Check each input in the order that it appears in the form!

		if(isAlphanumeric(UserName, "Please entre your user Name"))
		{if(isPassword(Password, "Please entre your password"))
				{
					
						{
							
						return true;
					
					
				}
			}
	
	
	return false;
	
}
	

function isAlphanumeric(elem, helperMsg){
	var alphaExp = /^[0-9a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}


function isPassword(elem, helperMsg){
	var  passwordExp= /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^\da-zA-Z]).{6,20}$/;
	if(elem.value.match(passwordExp)){
		return true;
	}else{
		alert("please enter valid password");
		elem.focus();
		return false;
	}
}



		}

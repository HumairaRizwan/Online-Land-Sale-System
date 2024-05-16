function loadRegister() {


location.replace("register.html");
}

function LoadProfilepage(){
	location.replace("User Profile.html");
}

function enableLog(){
	if(document.getElementById("buyer").checked){
	 document.getElementById("login").disabled=false;
	}
	else if(document.getElementById("seller").checked){
		document.getElementById("login").disabled=false;
		 
	}
	else{
		document.getElementById("login").disabled=true;
		
	}
}


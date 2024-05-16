function UpdateProfilepage(){
	location.replace("Update Profile.html");
}

function updatedsusscefull(){
	alert("Update Successful!");
	location.replace("User Profile.html");
}

function logout(){
	
	var r=confirm("Do you want to Logout");
	
	if(r == true){
		location.replace("Loging.html");
	}
	
}
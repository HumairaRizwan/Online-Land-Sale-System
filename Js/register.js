function enableButton(){

		if(document.getElementById("policy").checked){

			document.getElementById("btn2").disabled= false;//this means it is enabled
		}
		else{
			document.getElementById("btn2").disabled= true;
		
		}

} 

function checkPassword(){

	if(document.getElementById("pwd").value != document.getElementById("rpwd").value ){

		alert("password are mismatched!!");
		return false;
	}
	else{
		alert("password matched");
		return true;

	}
}

function ValidatinLDetailsP1() {
  var Address,City,District,Province,Numberofperches,PriceperperchLKR,message;
  
  Address = document.getElementById("Address").value;
  City = document.getElementById("City").value;
  District = document.getElementById("District").value;
  Province = document.getElementById("Province").value;
  Numberofperches = document.getElementById("Numberofperches").value;
  PriceperperchLKR = document.getElementById("PriceperperchLKR").value;
  message = document.getElementById("message").value;
  
	if(Address == "")
	{
		alert("Fill the Address Line");
	}else if(Address = "")
	{
		alert("Write a Description about the land");
	}
	else if(City == "")
	{
		alert("Fill the City Line");
	}
	else if(District == "")
	{
		alert("Choose a District");
	}
	else if(Province == "")
	{
		alert("Choose a Province");
	}
	else if(Numberofperches == "")
	{
		alert("Enter Number of perches");
	}
	else if(PriceperperchLKR == "")
	{
		alert("Enter Price per perch (LKR)");
	}
	else if(message == "")
	{
		alert("Write a Description about the land");
	}
	else
	{
		alert("Land details successfull !!");
		location.replace("Sell a land 2nd part .html");
	}
	
		
	
}

function enableButton1(){
	if(document.getElementById("checkBox").checked){
	 document.getElementById("subBtn").disabled=false;
	}
	else{
		 document.getElementById("subBtn").disabled=true;
	}
}

function enableButton2(){
	if(document.getElementById("checkBox2").checked){
		document.getElementById("submitBtn").disabled=false;
	}
	else{
		 document.getElementById("submitBtn").disabled=true;
	}
}

function ValidatinLDetailsP2() {
  var name,email,Phone,cname,ccnum,expdate,cvv;
  
  name = document.getElementById("name").value;
  email = document.getElementById("email").value;
  Phone = document.getElementById("Phone").value;
  cname = document.getElementById("cname").value;
  ccnum = document.getElementById("ccnum").value;
  cvv = document.getElementById("cvv").value;
  expdate = document.getElementById("expdate").value;
  
	if(name == "")
	{
		alert("Fill the Name Line");
	}
	else if(email == "")
	{
		alert("Fill the Email Line");
	}
	else if(Phone == "")
	{
		alert("Add a Phone Number");
	}
	else if(cname == "")
	{
		alert("Enter the Name on card");
	}
	else if(ccnum== "")
	{
		alert("Enter Card number");
	}
	else if(cvv == "")
	{
		alert("");
	}
	else if(expdate == "Enter CVV")
	{
		alert("Enter Expire Date");
	}
	else
	{
		alert("Submit successfull !!");
	}
}

function GoToPrev(){
	location.replace("Sell a land 1st part.html");
}
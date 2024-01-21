<?php
    include_once 'config.php';
?>

<?php
if (isset($_POST['register'])) {
	// Escape user inputs for security
	$CEmail = $_POST["emailAdd"];
	$CPassword = $_POST["pwd"];
	$CFName = $_POST["fname"];
	$CLName = $_POST["lname"];
	$CMNumber = $_POST["mobile"];
	$CAddress = $_POST["addr"];
	$CDOB = $_POST["day"];
	
  	// Attempt insert query execution
	$sql = "INSERT INTO customer(CID,CEmail,CPassword,CFName,CLName,CMNumber,CAddress,CDOB) VALUES ('','$CEmail', '$CPassword','$CFName','$CLName','$CMNumber','$CAddress','$CDOB')";
  	// execute query
  		
	if(mysqli_query($conn, $sql)){

		header("Location:Loging.php");
	} 
	else{
		echo "<script> alert('ERROR: Could not able to execute $sql. ')</script>" ;
	}

	// Close connection
	mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
<head>
<script src="..\Js\JavaScript.js"></script>
<script src="..\Js\register.js"></script>
<link rel="stylesheet" type="text/css" href="../CSS/Styles.css">
<link rel="stylesheet" type="text/css" href="../CSS/register.css">
 <title>Register</title>
 <div>
	<header id="mainHeader">
			
			<div  class="logo">
				<a href="Home.php">
				<img src="../Images/Logo 2.png" alt="Lanka Lands Logo">
				</a>
			</div>
			
			<div class="SearchPadding">  
				<form action="" class="searchForm">
				<input class="searchTxt" type="text" placeholder="Search.." name="search" >
				<button type="submit" class="searchBT">Search</button>
				</form>
			</div>
			
			<div  class="Plogo">
				<a href="Loging.php">
				<img src="../Images/avatardefault_92824.png" alt="User Profile Logo">
				</a>
			</div>
	</header>
		<nav id="menu">
			<ul class="menu">
				<li class="menu1"><a href="Home.php">Home</a></li>
				<li class="menu1"><a href="Lands.php">Lands</a></li>
				<li class="menu1"><a href="SellALandPart1.php">Sell Your Lands</a></li>
				<li class="menu1"><a href="PaymentPlans.php">Payment plans</a></li>
			
				<li class="menu2"><a href="FAQa.php">FAQs</a></li>
				<li class="menu2"><a href="ContactUs.php">Contact</a></li>
				<li class="menu2"><a href="AboutUs.php">About us</a></li>
			</ul>
		</nav>
		
	
	</div>
 
</head>
<body>
<br><br>
    	<center><h1 class="Ttxtstyle">Registeration Form</h1></center>
<div class="RegisterBody">
<section style="width:100%">
	<div id="formStyle1">
		<form action="register.php" target="_self" method="POST" onsubmit="return checkPassword()">
		<fieldset>
			<label for="fname">First name:</label>
  			<input type="text" id="fname" name="fname" placeholder="enter your first name" required>
			
  			<label for="lname">Last name:</label>
  			<input type="text" id="lname" name="lname" placeholder="enter your last name" required>
			
			<label for="MobileNumber">Mobile Number</label>
			<input type="text" id="mobile" name="mobile"  pattern="[0-9]{10}" required>
			
			<label for="EmailAddress">Email Address</label>
			<input type="email" id="emailAdd" name="emailAdd" pattern="[a-zA-Z0-9._%+-]+@[a-z0-9]+\.[a-z]{2,3}" required>
			
			<label for="Address">Address</label>
			<textarea id="addr" name="addr" rows="10" columns="50" required></textarea>
			
			<label for="ChooseYourDOB">Choose Your DOB</label>
			<input type ="date" name ="day" required>  
			
			<label for="Password">Password</label>
			<input type="password" id="pwd" name="pwd"  required >
			
			<label for="rePassword">Re-enter Password</label>
			<input type="password" id="rpwd" name="rpwd" required>
			
			<br><br>
			
			 
			<input type="checkbox" id="policy" name="policy" required onclick ="enableButton()">Accept privacy policy terms 
			<br><br>
			<input name="register" class="Btn1" type="submit" id="btn2" name="btn2" disabled value="submit" ><br>
	</fieldset>
		</form>
        </div>
		</section>
</div>
</body>
<div class="Bfooter">
	<footer>
	<div id="Footer2">
			<div>
				<ul class="style">
					<li class="Txtstyle">Quick Links<li>
					<li class="style"><a href="Home.php">Home</a></li>
					<li class="style"><a href="PaymentPlans.php">Payment Plans</a></li>
					<li class="style"><a href="AboutUs.php">About Us</a></li>
					<li class="style"><a href="ContactUs.php">Contact</a></li>
					<li class="style"><a href="News&Events.php">News & Events</a></li>
					<li class="style"><a href="Careers.php">Careers</a></li>
					<li class="style"><a href="BranchNetworks.php">Branch Networks</a></li>
					<li class="style"><a href="PrivacyPolicy.php">Privacy Policy</a></li>
					<li class="style"><a href="FAQa.php">FAQs</a></li>	
				</ul>	
			</div>
			<div class="btpadding">
				<ul class="proFBBt">
					<li class="proFBBt"><a href="FAQa.php">Provide Feedback</a></li>
				</ul>
			</div>
			<div>
				<ul class="style">
					<li class="Txtstyle2">Contact Details<li>
					<li class="style">Telephone: +94123456789</li>
					<li class="style">Email: lankalands@gmail.com</li>
				</ul>	
			</div>
		</div>
		
		<div id="mainFooter">
			<div class="FtopPadding">
				<p class="DateandTime" id="time"></p>
				<p class="DateandTime" id="Date"></p>
			</div>
			
			<div class="FtopPadding">
				<p class="copyRSing">Copyright &#169; 2020 - Lanka Lands - All Right Reserved</p>
			</div>	
			
			<div>
				<ul class="SocialLogos">
					<li class="SocialLogos"><a href="www.Facebook.com"><img src="../Images/FBLogo.png" alt="Facebook"></a></li>
					<li class="SocialLogos"><a href="www.instagram.com"><img src="../Images/InstaLogo.png" alt="Instagram"></a></li>
					<li class="SocialLogos"><a href="www.Twitter.com"><img src="../Images/TwitterLogo.png" alt="Twitter"></a></li>
					<li class="SocialLogos"><a href="www.Google+.com"><img src="../Images/G+Logo.png" alt="GooglePlus"></a></li>
				
				</ul>	
			</div>
		</div>		
	</footer>
</div>	


<script>
function clock(){
	
	var h = new Date().getHours();
	var m = new Date().getMinutes();
	var s = new Date().getSeconds();
	
	if(h==0){
		h=12;
	}
	if(h>12){
		h=h-12;
	}
	if(h<10){
		h="0"+h;
	}
	if(m<10){
		m="0"+m;
	}
	if(s<10){
		s="0"+s;
	}
	
	Dtime=document.getElementById('time').innerHTML = h + ":" + m + ":" + s;
	
	
}
var interval = setInterval(clock, 1000);
</script>
<script>
var d = new Date().getDate();
var m = new Date().getMonth() + 1;
var y = new Date().getFullYear();
document.getElementById("Date").innerHTML = d + "/" + m + "/" + y;
</script>

</html>

</html>

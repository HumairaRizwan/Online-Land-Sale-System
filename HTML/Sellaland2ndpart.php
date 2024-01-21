<?php
    include_once 'config.php';
?>

<?php
if (isset($_POST['PayDSub'])) {
	// Escape user inputs for security
	$cardname = $_POST["cardname"];
	$cardnumber = $_POST["cardnumber"];
	$expdate = $_POST["expdate"];
	$cvv = $_POST["cvv"];
	$Email = $_POST["email"];
	
	
  	// Attempt insert query execution
	$sql = "INSERT INTO payment_details(Payment_ID,Name_on_Card,Credit_card_number,Exp_Date,CVV,Email) VALUES ('','$cardname','$cardnumber','$expdate','$cvv','$Email')";
  	// execute query
  		
	if(mysqli_query($conn, $sql)){
		header("Location:SellALandDetails.php");
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
<script src="..\Js\sellaland.js"></script>
<link rel="stylesheet" type="text/css" href="../CSS/Styles.css">
<link rel="stylesheet" type="text/css" href="../CSS/sellaland.css">
 <title>Sell a Land</title>
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
<Body>
<br><br>
<center><h1 class="Ttxtstyle">Sell a Land</h1></center>
<div class="SellALandBody">
	<section style="width:70%">
	<div id="formStyle1">
				
		<form method="POST" action="Sellaland2ndpart.php">
			<fieldset>
                <legend>Payment Details</legend><br>
                <h4> Your Advertising cost is 1000LKR </h4>
					<div class="col-50">
						<label for="email">Email Address:</label>
						<input type="email" id="email" name="email" placeholder="abc@gamil.com" required>
						<label for="cname">Name on Card:</label>
						<input type="text" id="cname" name="cardname" placeholder="John More Doe" required>
						<label for="ccnum">Credit card number:</label>
						<input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required>
						
							<div class="row">
								<div class="col-50">
									<label for="expDate">Exp Date:</label>
									<input type="month" id="expdate" name="expdate" placeholder="September" required>
								</div>
								<div class="col-50">
									<label for="cvv">CVV:</label>
									<input type="text" id="cvv" name="cvv" placeholder="352" required>
								</div>
							</div>
					</div>	
			
					<br><input type="checkbox" id="checkBox" onclick="enableButton1()"></input>  <i>Accept the privacy policy</i><br>
					<br><button name="PayDSub" value="submit" id="subBtn" type="submit" class="Btn1" disabled>Submit</button><br>
					</fieldset>
		</form>
	</div>
	</section>
	<section style="width:30%" >
	<div id="formStyle2">
		<form>
			<fieldset>
                <center><h1 class="style2">Fill the Form Step by step</h1></center><br><br>
				<label for="step1"><img src="../Images/checkmark.png" style="width:20px; height:20px;">Fill kind Land information</label><br><br><br>
				<label for="step2"><img src="../Images/checkmark.png" style="width:20px; height:20px;">Click next button</label><br><br><br>
				<label for="step3"><img src="../Images/checkmark.png" style="width:20px; height:20px;">Confirm the all the details are true</label><br><br><br>
				<label for="step5"><img src="../Images/checkmark.png" style="width:20px; height:20px;">Fill payment details Form</label><br><br><br>
				<label for="step6"><img src="../Images/checkmark.png" style="width:20px; height:20px;">Accept Licence Agreement</label><br><br><br>
				<label for="step7"><img src="../Images/checkmark.png" style="width:20px; height:20px;">Click submit button</label><br><br><br>
				<img src="../Images/new-visa-mastercard-logo-695x237.png" style="width:100%;">
			</fieldset>
		</form>
	</div>
	</section>
</div>

</Body>
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

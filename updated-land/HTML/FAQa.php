<?php
    include_once 'config.php';
    session_start(); 
    if($_SESSION['CID']=='')
    {
    	echo "<script> alert('You have to Loging First')</script>" ;
    	header("Location:Loging.php");
    }
    $CID=$_SESSION['CID'];
?>

<?php
if (isset($_POST['submit'])) {
	// Escape user inputs for security
	
	$Name = $_POST["name"];
	$Telephone = $_POST["tel"];
	$Email = $_POST["email"];
	$Subject = $_POST["subj"];
	$Massage= $_POST["mess"];
	
	
  	// Attempt insert query execution
	$sql = "INSERT INTO faq(FAQID,Name,Telephone,Email,Subject,Massages,CID) VALUES ('','$Name', '$Telephone','$Email','$Subject','$Massage','$CID')";
  	// execute query
  		
	if(mysqli_query($conn, $sql)){

		header("Location:UserProfile.php");
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
<link rel="stylesheet" type="text/css" href="../CSS/FAQs.css">
<link rel="stylesheet" type="text/css" href="../CSS/Styles.css">
 <title>FAQs</title>
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
	<center><h1 class="Ttxtstyle">FAQs</h1></center>

<section >
<div id="FAQsBody">
		<div style="width:50%">
		<div class="FAQsForm">
		<h1>FAQs</h1> <br><br>
		
			
            <h3 class="text-center">HOW TO SEND AN INQUIRY</h3>
           
                <p>As with most business emails, strive to be clear, polite, and concise in your job inquiry email. Your future employer should be able to understand the purpose of the email in the subject line and in the first sentence. Make it clear who you are and which position you're applying for.</p><br>
            
                <br>
            

            <h3 class="text-center">HOW TO DISABLE COOKIES</h3>
            
                <p>To disable or enable Cookies on Chrome, click the Tools button > Settings.Under History, from the drop-down menu, select Use custom settings for history.Under Cookies you will see the options to manage your Cookie settings and choose which kind of Cookies you wish to allow or disallow on your Windows computer..</p><br>
                
           <br>

            <h3 class="text-center">HOW TO CHECK THE WEBSITE IS SECURE</h3>
            
                <p>Look at the URL of the website. If it begins with “https” instead of “http” it means the site is secured using an SSL Certificate (the s stands for secure). SSL Certificates secure all of your data as it is passed from your browser to the website's server.</p><br>
               
            <br>

            <h3 class="text-center">WHY DO WE USE COMPLEX PASSWORD</h3>
           
                <p>Keeping your data safe and private is of utmost concern to us. We've utilized a range of security and encryption techniques to ensure that your data is secure.Passwords stored locally and in the Cloud are always encrypted, and your data at rest is encrypted while stored in Egnyte's servers. can I use information on this website for my private work</p><br>
                
            <br>

            <h3 class="text-center">IF MY DATA IS SECURE</h3>
            
                <p>As with most business emails, strive to be clear, polite, and concise in your job inquiry email. Your future employer should be able to understand the purpose of the email in the subject line and in the first sentence. Make it clear who you are and which position you're applying for.</p><br>
                
            <br>
			
            <h3 class="text-center">WHAT HAPPENED TO GOOGLE+?</h3>
            
                <p>In December 2018, we announced our decision to shut down Google+ for consumers in April 2019. Other Google products (such as Gmail, Google Photos, Google Drive and YouTube) were not shut down as part of the consumer Google+ shutdown and you can continue using these products. The Google Account that you use to sign in to these services will remain. Please note that photos and videos already backed up in Google Photos will not be deleted.</p><br>
                <br>
            </div>
        </div>

	<div style="width:45%">
		
		
		

		<h2>  </h2>

		<div class="fiex">
			<div id="formStyle1">
				<form action="FAQa.php" method="POST">
				<fieldset>
				<legend>FEEDBACK</legend>
					<label for="name">Name</label>
					<input name="name" type="text" id="name" required>

					<label for="Telephone">Telephone</label>
					<input name="tel" type="text" id="Telephone" required>

					<label for="email">email</label>
					<input name="email" type="email" id="email" required>		

					<label for="Subject">Subject</label>
					<input name="subj" type="text" id="Subject" required>

					<label for="Message">Message</label>
					<textarea name="mess" type="text" id="Message" required></textarea>
					
					<button name="submit" class="Btn1" >Submit</button>
				</fieldset>
				</form>
			</div>
		</div>
	</div>
</div>	
</section>


	


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

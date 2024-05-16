<!DOCTYPE html>
<html>
<head>
<script src="..\Js\JavaScript.js"></script>
<script src="..\Js\Home.js"></script>
<link rel="stylesheet" type="text/css" href="../CSS/Styles.css">
<link rel="stylesheet" type="text/css" href="../CSS/Home.css">
 <title>Home</title>
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
<div>
<div class="slideshow-container">
	<div id="SSimg">
	<div class="mySlides fade">
		<img src="../Images/100.jpg">
	</div>

	<div class="mySlides fade">
	  <img src="../Images/101.jpg">
	</div>

	<div class="mySlides fade">
	  <img src="../Images/105.jpg">
	</div>
	
	<div class="mySlides fade">
	  <img src="../Images/102.jpg">  
	</div>
	
	<div class="mySlides fade">
	  <img src="../Images/103.jpg">
	</div>
	
	<div class="mySlides fade">
	  <img src="../Images/104.jpg">
	</div>
	</div>
	</div>
</div>
	<br>
	<div style="text-align:center">
	  <span class="dot"></span> 
	  <span class="dot"></span> 
	  <span class="dot"></span>
	  <span class="dot"></span>
	  <span class="dot"></span>
	  <span class="dot"></span>
	</div>
</div>

<section id="mainbtnSec">
	<h2 class="Htxt">Choose What do you want</h2>
	<div id="btsection">
		
		<center>
		<button class="mbutton" onclick="loadbuyaland()">Buy a land</button>
		<button class="mbutton1" onclick="loadSellaland()">Sell a land</button>
		</center>
	</div>

</section>


<section>
	<h2 class="Htxt">Recent Lands</h2>
	
	<div id="Lccard">
	
	<div class ="Lcard">
		<div class= "Lcard-image"></div>
			<div class="Lcard-text">
				<h2>LKR 100 000</h2>
				<p>Purchase a land for your dream home from urban and sub urban areas of Colombo District. Lands starting from 85,000 LKR onwards. We have a detailed land database containing over hundreds of land blocks spread over 60 locations in Colombo District for you to choose from.</p>
				<button href="Land.html" class="Btn4" onclick="loadland1()">Show more</button>
			</div>
			</div>

		

		
		<div class ="Lcard">
		<div class= "Lcard-image1"></div>
			<div class="Lcard-text">
				<h2>LKR 120 000</h2>
				<p>Buy land for your dream home in urban and suburban areas of Kalutara District. Lands starting from LKR 120,000. Land is limited.</p><br><br><br><br>
				<button href="Land.html" class="Btn4" onclick="loadland2()">Show more</button>
			</div>
		</div>
		

		
		<div class ="Lcard">
		<div class= "Lcard-image2"></div>
			<div class="Lcard-text">
				<h2>LKR 110 000</h2>
				<p>163, Piliyandala - Residential and commercial land from Piliyandala in Madapatha facing the Kahapola bus route Less than 5 km to Piliyandala town and all facilities are within reach. Buy now for your dream home.</p><br><br>
				<button href="Land.html" class="Btn4" onclick="loadland3()">Show more</button>
			</div>
		</div>
		</center>

	</div>
					
			<div class ="btn">
		<button href="Land.html" class="Btn1" onclick="loadbuyaland()">See more</button>
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

<script>
var slideIndex = 0;
showSlides();
</script>
</html>

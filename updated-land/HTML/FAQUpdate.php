<?php
    include_once 'config.php';
    session_start(); 
    if($_SESSION['CID']=='')
    {
    	echo "<script> alert('You have to Loging First')</script>" ;
    	header("Location:Loging.php");
    }
    $CID=$_SESSION['CID'];

	global $con;
    $FID = $_GET['FID'];
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
	<div class="FAQsForm">
		
	<div style="width:100%">
		
	<h2>  </h2>

		<div class="fiex">
			<div id="formStyle1">
				<form action="FAQa.php?FID=<?php echo $FAQID ?>" method="POST">
				<fieldset>
				<legend>FEEDBACK</legend>
				<?php
                	$sql = "SELECT * FROM faq WHERE FAQID =$FID";
				    $result = $conn->query($sql);	
					while ($row = $result->fetch_assoc())
				   {
				       	$FAQID  = $row['FAQID'];
						$Name = $row['Name'];
						$Telephone = $row['Telephone'];
						$Email = $row['Email'];
						$Subject = $row['Subject'];
						$Massages = $row['Massages'];
				   }?>
					<label for="name">Name</label>
					<input name="name" type="text" value="<?php echo $Name; ?>" id="name" required>

					<label for="Telephone">Telephone</label>
					<input name="tel" value="<?php echo $Telephone; ?>" type="text" id="Telephone" required>

					<label for="email">email</label>
					<input name="email" value="<?php echo $Email; ?>" type="email" id="email" required>		

					<label for="Subject">Subject</label>
					<input name="subj" value="<?php echo $Subject; ?>" type="text" id="Subject" required>

					<label for="Message">Message</label>
					<textarea name="mess" type="text" id="Message" required><?php echo $Massages; ?></textarea>
					
					<button name="Update" class="Btn1" >Update</button>
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

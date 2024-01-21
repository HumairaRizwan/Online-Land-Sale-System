<!DOCTYPE html>
<?php
    include_once 'config.php';
    session_start(); 
    global $con;
	$CEMAIL=$_SESSION['C_email'];
?>

<!DOCTYPE html>
<html>
<head>
<script src="..\Js\JavaScript.js"></script>
<link rel="stylesheet" type="text/css" href="../CSS/BranchNetworks.css">
<link rel="stylesheet" type="text/css" href="../CSS/Styles.css">
 <title>Branch Networks</title>
 
<style>
	.branchData{

		background-color: rgba(255, 255, 255,0.4);
		border: 3px solid green;
		padding:0px;
		box-shadow:1px 1px 2px black, 0 0 25px black, 0 0 5px black;
	}
	#tbl2{
  		margin-top: 20px;
  		margin-bottom: 10px;
  		margin-right: 20px;
  		margin-left: 20px;
		
	}



	td,th{border: 2px solid green;}
	
</style>
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
			<div style="margin-top:20px; float: right;">
				<a href="UserProfile.php" style="text-decoration: none;"><p style="padding:10px 10px; background: #0073e6;"><?php echo $_SESSION['CFName']; ?> <?php echo $_SESSION['CLName']; ?></p></a>
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
<center><h1 class="Ttxtstyle">Branch Networks</h1></center>
<div class="branchData" id="tbl2" >
<table border = 1 width="100%">

	<tr>
		<th>Head Office</th>
		<th>Kandy Branch</th>
		<th>Ragama Branch</th>
	</tr>

	<tr>
		<td>
			<img src="../Images/user.png" class="bicon" alt="Logo"><b>Branch Manager :</b><br>
			&emsp;&emsp;&emsp;&emsp;Mr.Nimal Dissanayaka<br><br>
			<img src="../Images/building.png" class="bicon" alt="Logo"><b>Address :</b><br>
			&emsp;&emsp;&emsp;&emsp;no 567, Park rd, Colombo <br><br>
			<img src="../Images/clock.png" class="bicon" alt="Logo"><b>Open Hours:</b> <br>
			&emsp;&emsp;&emsp;&emsp;8:00 a.m - 5:30 p.m<br><br>
			<img src="../Images/phone.png" class="bicon" alt="Logo"><b>Contact No : </b><br>
			&emsp;&emsp;&emsp;&emsp;+94772980374<br><br>
			<img src="../Images/fax.png" class="bicon" alt="Logo"><b>Fax :</b><br> 
			&emsp;&emsp;&emsp;&emsp;0118683667<br><br>
			<img src="../Images/mail.png" class="bicon" alt="Logo"></i><b>Email :</b><br>
			&emsp;&emsp;&emsp;&emsp;info@lankalands.com<br><br>
		</td>
		<td >
			<img src="../Images/user.png" class="bicon" alt="Logo"><b>Branch Manager :</b><br>
			&emsp;&emsp;&emsp;&emsp;Mr.Kamal Koralage<br><br>
			<img src="../Images/building.png" class="bicon" alt="Logo"><b>Address :</b><br>
			&emsp;&emsp;&emsp;&emsp;no 160,Riverdale rd,Kandy<br><br>
			<img src="../Images/clock.png" class="bicon" alt="Logo"><b>Open Hours:</b> <br>
			&emsp;&emsp;&emsp;&emsp;8:00 a.m - 5:30 p.m<br><br>
			<img src="../Images/phone.png" class="bicon" alt="Logo">Contact No : </b><br>
			&emsp;&emsp;&emsp;&emsp;+94754119773<br><br>
			<img src="../Images/fax.png" class="bicon" alt="Logo"><b>Fax :</b><br> 
			&emsp;&emsp;&emsp;&emsp;0117673335<br><br>
			<img src="../Images/mail.png" class="bicon" alt="Logo"><b>Email :</b><br>
			&emsp;&emsp;&emsp;&emsp;info@lankalands.com<br><br>
		</td>
		<td>
			<img src="../Images/user.png" class="bicon" alt="Logo"><b>Branch Manager :</b><br>
			&emsp;&emsp;&emsp;&emsp;Ms.Amali Gunasinha<br><br>
			<img src="../Images/building.png" class="bicon" alt="Logo"><b>Address :</b><br>
			&emsp;&emsp;&emsp;&emsp;no 16,kadawatha rd,Ragama<br><br>
			<img src="../Images/clock.png" class="bicon" alt="Logo"><b>Open Hours:</b> <br>
			&emsp;&emsp;&emsp;&emsp;8:00 a.m - 5:30 p.m<br><br>
			<img src="../Images/phone.png" class="bicon" alt="Logo"><b>Contact No : </b><br>
			&emsp;&emsp;&emsp;&emsp;+94776008922<br><br>
			<img src="../Images/fax.png" class="bicon" alt="Logo"><b>Fax :</b><br> 
			&emsp;&emsp;&emsp;&emsp;0112553321<br><br>
			<img src="../Images/mail.png" class="bicon" alt="Logo"><b>Email :</b><br>
			&emsp;&emsp;&emsp;&emsp;info@lankalands.com<br><br>
		</td>
	</tr>

	<tr>
		<th>Galle Branch</th>
		<th>Matara Branch</th>
		<th>Anuradapura Branch</th>
	</tr>
	<tr>
	<td>
			<img src="../Images/user.png" class="bicon" alt="Logo"><b>Branch Manager :</b><br>
			&emsp;&emsp;&emsp;&emsp;Mr.Sunil Jayathilaka<br><br>
			<img src="../Images/building.png" class="bicon" alt="Logo"><b>Address :</b><br>
			&emsp;&emsp;&emsp;&emsp;no 660,Eliot rd,Galle<br><br>
			<img src="../Images/clock.png" class="bicon" alt="Logo"><b>Open Hours:</b> <br>
			&emsp;&emsp;&emsp;&emsp;8:00 a.m - 5:30 p.m<br><br>
			<img src="../Images/phone.png" class="bicon" alt="Logo"><b>Contact No : </b><br>
			&emsp;&emsp;&emsp;&emsp;+94775589766<br><br>
			<img src="../Images/fax.png" class="bicon" alt="Logo"><b>Fax :</b><br> 
			&emsp;&emsp;&emsp;&emsp;0118009446<br><br>
			<img src="../Images/mail.png" class="bicon" alt="Logo"><b>Email :</b><br>
			&emsp;&emsp;&emsp;&emsp;info@lankalands.com<br><br>
		</td>
		<td>
			<img src="../Images/user.png" class="bicon" alt="Logo"><b>Branch Manager :</b><br>
			&emsp;&emsp;&emsp;&emsp;Ms.Sanaya Keeth<br><br>
			<img src="../Images/building.png" class="bicon" alt="Logo"><b>Address :</b><br>
			&emsp;&emsp;&emsp;&emsp;no 10,Rahula rd,Matara<br><br>
			<img src="../Images/clock.png" class="bicon" alt="Logo"><b>Open Hours:</b> <br>
			&emsp;&emsp;&emsp;&emsp;8:00 a.m - 5:30 p.m<br><br>
			<img src="../Images/phone.png" class="bicon" alt="Logo"><b>Contact No : </b><br>
			&emsp;&emsp;&emsp;&emsp;+94772980335<br><br>
			<img src="../Images/fax.png" class="bicon" alt="Logo"><b>Fax :</b><br> 
			&emsp;&emsp;&emsp;&emsp;0113321864<br><br>
			<img src="../Images/mail.png" class="bicon" alt="Logo"><b>Email :</b><br>
			&emsp;&emsp;&emsp;&emsp;info@lankalands.com<br><br>
		</td>
		<td>
			<img src="../Images/user.png" class="bicon" alt="Logo"><b>Branch Manager :</b><br>
			&emsp;&emsp;&emsp;&emsp;Mr.Mahesh Daias<br><br>
			<img src="../Images/building.png" class="bicon" alt="Logo"><b>Address :</b><br>
			&emsp;&emsp;&emsp;&emsp;no 33,ingiriya rd,Anuradapura<br><br>
			<img src="../Images/clock.png" class="bicon" alt="Logo"><b>Open Hours:</b> <br>
			&emsp;&emsp;&emsp;&emsp;8:00 a.m - 5:30 p.m<br><br>
			<img src="../Images/phone.png" class="bicon" alt="Logo"><b>Contact No : </b><br>
			&emsp;&emsp;&emsp;&emsp;+94765799331<br><br>
			<img src="../Images/fax.png" class="bicon" alt="Logo"><b>Fax :</b><br> 
			&emsp;&emsp;&emsp;&emsp;0119606733<br><br>
			<img src="../Images/mail.png" class="bicon" alt="Logo"><b>Email :</b><br>
			&emsp;&emsp;&emsp;&emsp;info@lankalands.com<br><br>
		</td>
	</tr>

</table>
</div>	
<hr/>
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

<?php
	include_once 'config.php';
	global $con;
    $LID = $_GET['GetLID'];
?>
<?php
                	$sql = "SELECT * FROM lands WHERE Land_Id=$LID";
				    $result = $conn->query($sql);	
					while ($row = $result->fetch_assoc())
				   {
				       	$Land_Id=$row['Land_Id'];
				       	$LName =  $row['LName'];
						$LAddress =  $row['LAddress'];
						$LCity =  $row['LCity'];
						$LDistrict =  $row['LDistrict'];
						$LProvince =  $row['LProvince'];
						$LPerches =  $row['LPerches'];
						$LPrice =  $row['LPrice'];
						$Lmessage =  $row['Lmessage'];
				   }?>






<!DOCTYPE html>
<html>
<head>
<script src="..\Js\JavaScript.js"></script>
<script src="..\Js\landscript.js"></script>
<script src="..\Js\LandsDetails.js"></script>

<link rel="stylesheet" type="text/css" href="../CSS/landstyles.css">
<link rel="stylesheet" type="text/css" href="../CSS/Styles.css">
 <title>Land Details</title>
 
 	<style> 
		td{
			border: 2px solid #305A72;
		}


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
				<li class="menu1"><a href="Sell a land 1st part.php">Sell Your Lands</a></li>
				<li class="menu1"><a href="Payment Plans.php">Payment plans</a></li>
			
				<li class="menu2"><a href="FAQa.php">FAQs</a></li>
				<li class="menu2"><a href="ContactUs.php">Contact</a></li>
				<li class="menu2"><a href="About Us.php">About us</a></li>
			</ul>
		</nav>
		
	
	</div>
 
</head>

<body>
	
<br><br>

<center><h1 class="Ttxtstyle">Land In Meepe</h1></center>
<div class="slideshow-container">
	
	<div class="mySlides">
  	<div class="numbertext">1 / 3</div>
  	<img src="../Images/h1.jpg" style="width:100%">

	</div>

	<div class="mySlides">
  	<div class="numbertext">2 / 3</div>
  	<img src="../Images/h2.jpg" style="width:100%">
 
	</div>

	<div class="mySlides">
 	<div class="numbertext">3 / 3</div>
 	<img src="../Images/h3.jpg" style="width:100%">
 
	</div>

	<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
	<a class="next" onclick="plusSlides(1)">&#10095;</a>


</div>

<div class="landData" id="tbl">
<table border="1" width="100%" height="150">

  <tr>
	<td align="left" style="padding:20px;">
	<b>Land for sale in <?php echo $LCity; ?></b><br><hr><br>
	<img src="../Images/map.png" class="dicon" alt="Logo">&nbsp;<?php echo $LCity ; ?> <?php echo $LDistrict ; ?> &emsp;&emsp;&emsp;
	<img src="../Images/off.png" class="dicon" alt="Logo">&nbsp; <?php echo $LPrice ; ?> LKR Per Perch Upwards <br><br>             
	<img src="../Images/available.png" class="dicon" alt="Logo">&emsp;Available for Reservation &emsp;&emsp;&emsp; 
	<a href="ReserveaLand.php?GetLID=<?php echo $Land_Id; ?>"><button class="Btn3" type="button" id="button1">Reserve Now</button></a><br><br>
	<hr>
	<b>Land Details</b><br>
	<?php echo $Lmessage ; ?>
	<br><br>
	<b>Payment plan:</b><br>
	Reservation - 100,00/-<br>
	40% down payment within 14 days (Including Reservation)<br>
	Balance - 6 months interest free or bank loan facilities or can arrange an easy payment method from Lanka Group.<br>
	</td>

	<td align="center" width="40%"><b><br>Send us an inquire</b><br><br>
	<div id="formStyle6">
	<form action="inquiry.php"  method="POST">
	<input type="text" id="fname" name="fname" style="width:500px; height:40px; margin:3px" placeholder="name" required><br>
	<input type="text" id="mobile" name="mobile" style="width:500px;  height:40px; margin:3px" pattern="[0-9]{10}" placeholder="phone" required><br>
	
	<input type="email" id="emailAdd" name="emailAdd" style="width:500px;  height:40px; margin:3px" pattern="[a-zA-Z0-9._%+-]+@[a-z0-9]+\.[a-z]{2,3}" placeholder="email" required><br>
	
	<textarea id="addr" name="addr" rows="10" columns="50" style="width:500px; margin:3px" placeholder="message" required></textarea><br>
	<input type="submit" class="Btn3" id="Btn1" name="Btn1" value="inquire now" align="center" ><br><br>
	</form><br>
	</div>
	</td>
  </tr>

  <tr>
	<td style="padding:20px;">
	<b>Location</b><br><br>
	<div class="mapouter"><div class="gmap_canvas">
	<iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Meepe%2Cwewalpanawa&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
	<a href="https://123movies-to.org">123movies unb</a></div>
	
	</td>

	<td style="padding:20px;">
	<hr><br>Facilities<br><br><hr>
	<br>
	<ul class="myDiv">
		<li style=" padding: 14px 16px;"><img src="../Images/current.png" class="dicon" alt="Logo">&nbsp;&nbsp; Electricity : &nbsp;&nbsp; Provided</li>
		<li style=" padding: 14px 16px;"><img src="../Images/road.png" class="dicon" alt="Logo">&nbsp;&nbsp; Wide Road : &nbsp;&nbsp; 30ft Carpeted Rd</li>
		<li style=" padding: 14px 16px;"><img src="../Images/building.png" class="dicon" alt="Logo">&nbsp;&nbsp; City Area : &nbsp;&nbsp; Meepe</li>
	</ul>
	<br><br>
	<hr>
	<br>Contact Our Agents<br><br>
	<hr>
	<img src="../Images/person.png" style="width:80px; height:80px;" alt="Logo4">&nbsp;CALL : 0771334599
	</td>
  </tr>

</table>
</div>


	<button class="Btn1" type="button" id="button3" onclick="location.href='land2.html'">next ></button>
	<script src="..\Js\JavaScript.js"></script>
	<script src="..\Js\landscript.js"></script>
</body>

<div class="Bfooter">
	<footer>
	
		<div id="Footer2">
			<div>
				<ul class="style">
					<li class="Txtstyle">Quick Links<li>
					<li class="style"><a href="Home.php">Home</a></li>
					<li class="style"><a href="Payment Plans.php">Payment Plans</a></li>
					<li class="style"><a href="About Us.php">About Us</a></li>
					<li class="style"><a href="ContactUs.php">Contact</a></li>
					<li class="style"><a href="News & Events.php">News & Events</a></li>
					<li class="style"><a href="Careers.php">Careers</a></li>
					<li class="style"><a href="BranchNetworks.php">Branch Networks</a></li>
					<li class="style"><a href="Privacy Policy.php">Privacy Policy</a></li>
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


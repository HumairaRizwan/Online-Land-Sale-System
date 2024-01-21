<!DOCTYPE html>
<?php
    include_once 'config.php';
    session_start(); 
    global $con;
	$CEMAIL=$_SESSION['C_email'];
?>
<html>
<head>
<script src="..\Js\JavaScript.js"></script>
<script src="..\Js\user profile.js"></script>
<link rel="stylesheet" type="text/css" href="../CSS/Styles.css">
<link rel="stylesheet" type="text/css" href="../CSS/User Profile.css">
 <title>User Profile</title>
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
	<div class="UPbody">
		<section style="width:70%">
			<div id="formStyle4">
			<?php
	
			global $con;
				$CEMAIL=$_SESSION['C_email'];
				$sql ="SELECT * FROM customer WHERE Cemail='$CEMAIL'";

				$result = $conn->query($sql);
				if($result->num_rows>0)
				{
					while ($row = $result->fetch_assoc()) 
					{
						$CID = $row['CID'];
						$CEmail = $row['CEmail'];
						$CPassword = $row['CPassword'];
						$CFName = $row['CFName'];
						$CLName = $row['CLName'];
						$CMNumber = $row['CMNumber'];
						$CAddress = $row['CAddress'];
						$CDOB = $row['CDOB'];
					}
				}
			
		?>

			<form action="#" >
				<center>
					<div id="profilepic">
						<img src="../Images/avatardefault_92824.png" alt="User Profile Logo">
					</div>
				</center>
			<fieldset>
		         <legend>Profile Details</legend><br>
		                    <div class="row">
								<div style="width:20%"> 
									<label for="id" class="m">First Name</label>
								</div>
								<div style="width:2%">
									<label>:</label>
								</div>
								<div style="width:78%">
									<label for="id" id="Uid"><?php echo $CFName ; ?></label>
								</div>
							</div>

							<div class="row">
								<div style="width:20%"> 
									<label for="id" class="m">Last Name</label>
								</div>
								<div style="width:2%">
									<label>:</label>
								</div>
								<div style="width:78%">
									<label for="id" id="Uid"><?php echo $CLName ; ?></label>
								</div>
							</div>


							<div class="row">
								<div style="width:20%">
									<label for="NIC" class="m">Email</label>
								</div>
								<div style="width:2%">
									<label>:</label>
								</div>
								<div style="width:78%">
									<label for="NIC" id="nic"><?php echo $CEmail ; ?></label>
								</div>
							</div>

							<div class="row">
								<div style="width:20%">
				        			<label for="Address" class="m">Mobile Number</label>
				        		</div>
				        		<div style="width:2%">
									<label>:</label>
								</div>
				        		<div style="width:78%">
				        			<label for="Address" id="address"><?php echo $CMNumber ; ?></label>
				        		</div>
							</div>

							<div class="row">
								<div style="width:20%">
				        			<label for="phone" class="m">Address</label>
				        		</div>
				        		<div style="width:2%">
									<label>:</label>
								</div>
				        		<div style="width:78%">
				        			<label for="phone" id="phone"><?php echo $CAddress ; ?></label>
				        		</div>
							</div>

							<div class="row">
								<div style="width:20%">
					    			<label for="Email" class="m">Birth Day</label>
					    		</div>
					    		<div style="width:2%">
									<label>:</label>
								</div>
					    		<div style="width:78%">
					    			<label for="Email" id="email"><?php echo $CDOB ; ?></label>
					    		</div>
							</div>

			        </fieldset>    	
	    		</form>
    		</div>
    			<a href="UpdateProfile.php"><button value="Ubtn" id="updateBtn" type="button" class="Btn2" onclick="UpdateProfilepage()">Update Profile</button></a>
    			<a href="ProfileDelete.php"><button value="Dbtn" id="updateBtn" type="button" class="Btn2">Delete Profile</button></a>
				<a href="logout.php"><button value="Logout" id="logoutBtn" type="submit" class="Btn1">Logout</button></a>
    	</section>
    	<section style="width:30%">
			<div id="formStyle2">
				<form>
					<fieldset>
		                <center><h1 class="style2">MY LINKS</h1></center><br><br>
		                <label></label><br><br>
						<a style="text-decoration: none;" href="SellALandDetails.php"><h2> My Selling Land Details</h2></a><br>
						<a style="text-decoration: none;" href="MyReservations.php"><h2>My Reservations</h2></a><br>
						<a style="text-decoration: none;" href="FAQmy.php"><h2>My FAQs</h2></a><br>
						<a style="text-decoration: none;" href="MyCareerDetails.php"><h2>My Careers</h2></a><br>
						
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

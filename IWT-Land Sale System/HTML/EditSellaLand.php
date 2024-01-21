<?php
	include_once 'config.php';
	global $con;
    $LID = $_GET['GetLID'];
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
<center><h1 class="Ttxtstyle">Edit Land Details</h1></center>

<div class="ESellALandBody">
	<section >
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
	<div id="formStyle1">
	<form  method="POST" action="LandDetailsUpdate.php?lID=<?php echo $LID; ?>">
<fieldset>
                <legend>Land Details </legend><br>
                <div class="col-50">
					<label for="LandName">Land Name:</label>
					<input type="text" name="Lname" id="name" placeholder="Enter the land name here..." value="<?php echo $LName ?>">

					<label for="Address">Address:</label>
					<input type="text" name="LAddress" id="Address" placeholder="Enter the land address here..." value="<?php echo $LAddress ?>">
					
					<label for="city">City:</label>
					<input type="text" name="LCity" id="City"  value="<?php echo $LCity ?>">
                    <div class="row">
							<div class="col-50">				
								<label for="options">District:</label>
								<select name="LDistrict" id="District" >
									<option selected><?php echo $LDistrict ?></option>
									<option value="Ampara">Ampara</option>
									<option value="Anuradhapura">Anuradhapura</option>
									<option value="Badulla">Badulla</option>
									<option value="Batticaloa">Batticaloa</option>
									<option value="Colombo">Colombo</option>
									<option value="Galle">Galle</option>
									<option value="Gampaha">Gampaha</option>
									<option value="Hambantota">Hambantota</option>
									<option value="Jaffna">Jaffna</option>
									<option value="Kalutara">Kalutara</option>
									<option value="Kandy">Kandy</option>
									<option value="Kilinochchi">Kilinochchi</option>
									<option value="Kurunegala">Kurunegala</option>
									<option value="Mannar">Mannar</option>
									<option value="Matale">Matale</option>
									<option value="Matara">Matara</option>
									<option value="Moneragala">Moneragala</option>
									<option value="Mullaitivu">Mullaitivu</option>
									<option value="Nuwara Eliya">Nuwara Eliya</option>
									<option value="Polonnaruwa">Polonnaruwa</option>
									<option value="Puttalam">Puttalam</option>
									<option value="Ratnapura">Ratnapura</option>
									<option value="Trincomalee">Trincomalee</option>
									<option value="Vavuniya">Vavuniya</option>
								</select>
							</div>
							<div class="col-50">
								<label for="options" >Province:</label>
								<select name="LProvince" id="Province">
									<option selected><?php echo $LProvince ?> </option>
									<option value="Central">Central</option>
									<option value="Eastern">Eastern</option>
									<option value="North Central">North Central</option>
									<option value="Northern">Northern</option>
									<option value="North Western">North Western</option>
									<option value="Sabaragamuwa">Sabaragamuwa</option>
									<option value="Southern">Southern</option>
									<option value="Uva">Uva</option>
									<option value="Western">Western</option>
								</select>
							</div>
					</div>	
					<label for="Number of perches">Number of perches:</label>
					<input type="Number" name="LPerches" id="Numberofperches" placeholder="Number of perches" min="1" value="<?php echo $LPerches ?>">
					
					<label for="Price per perch">Price per perch(LKR):</label>
					<input type="Number" name="LPrice" id="PriceperperchLKR" placeholder="Price per perch(LKR)" min="1" value="<?php echo $LPrice ?>">
					  
                    <label for="message">About your Land:</label>
                    <textarea name="Lmessage" id="message" placeholder="Write a description about your land" cols="50"  autofocus><?php echo $Lmessage ?></textarea>
				</div>
				<br><input type="checkbox" id="checkBox" onclick="enableButton1()"></input>  <i>I am not a ROBOT</i><br>
					<br><button name="Update" value="submit" id="subBtn" type="submit" class="Btn1" disabled>Update</button><br>
			</fieldset>
					
					
</form>	
</div>
</section>
</div>
<?php mysqli_close($conn); ?> 
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

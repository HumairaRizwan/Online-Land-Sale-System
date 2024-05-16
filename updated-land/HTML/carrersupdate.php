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
    $Carreer_ID = $_GET['GetCarreerID'];
?>

<!DOCTYPE html>
<html>
<head>
<script src="..\Js\JavaScript.js"></script>
<link rel="stylesheet" type="text/css" href="../CSS/Styles.css">
<link rel="stylesheet" type="text/css" href="../CSS/careers.css">
 <title>Careers</title>
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
<center><h1 class="Ttxtstyle">Careers</h1></center>
<div class="CareersBody">
	
	<section style="width:70%">
		<?php
                	$sql = "SELECT * FROM carrers WHERE carrers_ID=$Carreer_ID";
				    $result = $conn->query($sql);	
					while ($row = $result->fetch_assoc())
				   {
				       	$carrers_ID = $row['carrers_ID'];
						$JOB_Title = $row['JOB_Title'];
						$Employee_Name = $row['Employee_Name'];
						$Employee_Email = $row['Employee_Email'];
						$Employee_Mobile = $row['Employee_Mobile'];
						$Employee_Message = $row['Employee_Message'];
				   }?>
		
	<div id="formStyle1">

		<form action="UpdateCarrers.php?GetCarreerID=<?php echo $carrers_ID ?>" method="POST">
			<fieldset>
                <legend>Send Us Your CV</legend><br>
				<div class="col-50">
					<label for="options">Job:</label>
								<select name="job" id="job">
									<option selected><?php echo $JOB_Title; ?></option>
									<option value="AgentManager">Agent Manager</option>
									<option value="MarkertingManager">Markerting Manager</option>
								</select>
				
					<label for="Name">Employee Name:</label>
                    <input type="text" name="Name" id="Name" placeholder="Enter Employee Name here..." value="<?php echo $Employee_Name; ?>"required>
					
					<label for="Email">Employee Email:</label>
					<input type="text" name="Email" id="Email" placeholder="Enter Employee Email here..." value="<?php echo $Employee_Email; ?>" required>
                    
					
					<label for="Mobile">Mobile Number:</label>
					<input type="Number" name="Number" id="Number" placeholder="Enter Employee Mobile Number" value="<?php echo $Employee_Mobile; ?>" min="1" required>
					
					<label for="message">Message:</label>
                    <textarea name="message" id="message" placeholder="Write a status about employee" cols="50" autofocus><?php echo $Employee_Message; ?></textarea>
								
					<label for="Attach Pictures">Attach CV:</label>
					<input type="file" id="Pictures" name="Pictures">
  
                    
				</div>
				<br><input type="checkbox" id="checkBox1" onclick="enableButton1()"></input>  <i>I not a ROBOT</i>
					<br><button name="careersSubmit" value="submit" id="" type="submit" class="Btn1" onclick="" >Update</button>
			</fieldset>
					
					
		</form>
			<?php mysqli_close($conn); ?> 
			
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

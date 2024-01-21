<?php
    include_once 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
<script src="..\Js\JavaScript.js"></script>
<script src="..\Js\lands.js"></script>
<link rel="stylesheet" type="text/css" href="../CSS/Styles.css">
<link rel="stylesheet" type="text/css" href="../CSS/lands.css">
 <title>Lands</title>
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
<center><h1 class="Ttxtstyle">Lands</h1></center>
<section>
<div id="landsbody">
<div class="c1">
	<?php
	
	global $con;
	$sql ="SELECT * FROM lands";
	$result = $conn->query($sql);
		if($result->num_rows>0){	
	while ($row = $result->fetch_assoc()) {
		$Land_Id = $row['Land_Id'];
		echo"<div id='SellaLandbody'>";
		echo"<div class ='card'style='display:flex; width:60%; justify-content:left; background-color:white; width:100%;'>";
			echo"<div id='card-image'>";
				echo"<img src='../Images/Hills-and-clouds-landscape-vector.jpg' height='250px' alt=''>";
			echo"</div>";
				echo"<div id='DArea' style='padding:20px 20px;'>";
						echo"<h2> Land Name : ".$row['LName']."</h2>";
						echo"<h2> Location : ".$row['LCity']."</h2>";
						echo"<h2> Price(LKR) : ".$row['LPrice']."</h2>";
						echo"<br><p>".$row['Lmessage']."</p>
				</div>"; 
			echo"<div class='btndiv' style='float:right; margin-top:60px;'><a href='Land1.php?GetLID=$Land_Id'> <button name='edit' value='Edit' id='' type='button' class='Btn4'>See More</button></a>";
				echo"</div>";
		echo"</div>";

		echo"</div><br>";
		}
	}
	else{echo"No Result";}
	mysqli_close($conn);
	?>
	

</div>

<div  class="c2">
<div id="formStyle1">
		<form action="#">
			<fieldset>
                <legend>Advance Search</legend><br>
				<div class="col-50">
										
					<label for="city">City:</label>
					<input type="text" name="City" id="City" placeholder="Enter the land City here..." >
                    <div class="row">
							<div class="col-50">				
								<label for="options">District:</label>
								<select name="District" id="District">
									<option value="" disabled selected>-- Select --</option>
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
								<label for="options">Province:</label>
								<select name="Province" id="Province">
									<option value="" disabled selected>-- Select --</option>
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
					<div class="coll-50">
					<label for="Price per perch">Number of perches:</label>
					</div>
					<div class="row">
							<div class="col-50">
								<label for="min">Min:</label>
								<input type="Number" name="Number of perches" id="minNumberofperches" placeholder="Number of perches" min="1">
							</div>
													
							
							<div class="col-50">
								<label for="min">Max:</label>
								<input type="Number" name="Number of perches" id="maxNumberofperches" placeholder="Number of perches" min="2">
							</div>
					</div>
					<div class="coll-50">
					<label for="Price per perch">Price per perch(LKR):</label>
					</div>
					<div class="row">
							<div class="col-50">
								<label for="min">Min:</label>
								<input type="Number" name="Price per perch(LKR)" id="minPriceperperchLKR" placeholder="Price per perch(LKR)" min="10000">
							</div>
													
							
							<div class="col-50">
								<label for="min">Max:</label>
								<input type="Number" name="Price per perch(LKR)" id="maxPriceperperchLKR" placeholder="Price per perch(LKR)" min="10001">
							</div>
					</div>
					<button value="submit" id="search" type="submit" class="Btn1" onclick="ADsearch()" >Search</button>	
			</fieldset>
					
				
					
		</form>
			
			
	</div>

</div>

</div>
</section>





</Body>
</html>

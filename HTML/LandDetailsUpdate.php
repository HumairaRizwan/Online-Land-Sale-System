<?php
	include_once 'config.php';
	global $con;
    $lID = $_GET['lID'];
    echo $lID;
?>


<?php
if (isset($_POST['Update'])) {
	// Escape user inputs for security
	$LName = $_POST["Lname"];
	$LAddress = $_POST["LAddress"];
	$LCity = $_POST["LCity"];
	$LDistrict = $_POST["LDistrict"];
	$LProvince = $_POST["LProvince"];
	$LPerches = $_POST["LPerches"];
	$LPrice = $_POST["LPrice"];
	$Lmessage = $_POST["Lmessage"];
	
  	// Attempt insert query execution
  	
	$sql = "UPDATE lands SET LName ='$LName', LAddress = '$LAddress', LCity = '$LCity', LDistrict = '$LDistrict', LProvince = '$LProvince',LPerches = '$LPerches', LPrice = '$LPrice', Lmessage = '$Lmessage' WHERE Land_Id = '$lID'";
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
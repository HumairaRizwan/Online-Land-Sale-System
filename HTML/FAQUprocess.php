<?php
	include_once 'config.php';
	global $con;
    $FID = $_GET['FID'];
    echo $FID;
?>


<?php
if (isset($_POST['careersSubmit'])) {
	// Escape user inputs for security
	$Name = $_POST["name"];
	$Telephone = $_POST["tel"];
	$Email = $_POST["email"];
	$Subject = $_POST["subj"];
	$Massage= $_POST["mess"];
	
  	// Attempt insert query execution
	$sql = "UPDATE faq SET Name ='$Name', Telephone = '$Telephone', Email = '$Email', Subject = '$Subject', Massage = '$EMassage' WHERE FAQID   = '$FID'";
  	// execute query
  		
	if(mysqli_query($conn, $sql)){

		header("Location:MyCareerDetails.php");
	} 
	else{
		echo "<script> alert('ERROR: Could not able to execute $sql. ')</script>" ;
	}

	// Close connection
	mysqli_close($conn);
}
?>
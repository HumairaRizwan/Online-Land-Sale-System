<?php
	include_once 'config.php';
	global $con;
    $Carreer_ID = $_GET['GetCarreerID'];
    echo $Carreer_ID;
?>


<?php
if (isset($_POST['careersSubmit'])) {
	// Escape user inputs for security
	$JOB_Title = $_POST["job"];
	$Employee_Name = $_POST["Name"];
	$Employee_Email = $_POST["Email"];
	$Employee_Mobile = $_POST["Number"];
	$Employee_Message = $_POST["message"];
	
  	// Attempt insert query execution
	$sql = "UPDATE carrers SET JOB_Title ='$JOB_Title', Employee_Name = '$Employee_Name', Employee_Email = '$Employee_Email', Employee_Mobile = '$Employee_Mobile', Employee_Message = '$Employee_Message' WHERE carrers_ID  = '$Carreer_ID'";
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
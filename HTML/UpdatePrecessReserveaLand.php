<?php
	include_once 'config.php';
	global $con;
    $R_ID = $_GET['GetReID'];
    echo $R_ID;
?>


<?php
if (isset($_POST['RUpdate'])) {
	// Escape user inputs for security
	$RName = $_POST['Rname'];
	$RTEL = $_POST['Rtel'];
	$REmail = $_POST['Remail'];
	$RMassage = $_POST['Rmassage'];
	
  	// Attempt insert query execution
	$sql = "UPDATE reservation SET RName='$RName',RTEL='$RTEL',REmail='$REmail',RMassage = '$RMassage' WHERE RID ='$R_ID'";
  	// execute query
  		
	if(mysqli_query($conn, $sql)){

		header("Location:MyReservations.php");
	} 
	else{
		echo "<script> alert('ERROR: Could not able to execute $sql. ')</script>" ;
	}

	// Close connection
	mysqli_close($conn);
}
?>
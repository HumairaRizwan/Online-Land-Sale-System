<?php
    include_once 'config.php';
	global $con;
    $cID = $_GET['cID'];
    echo $cID;
?>


<?php
if (isset($_POST['Pupdate'])) {
	// Escape user inputs for security
	$CEmail = $_POST["emailAdd"];
	$CFName = $_POST["fname"];
	$CLName = $_POST["lname"];
	$CMNumber = $_POST["mobile"];
	$CAddress = $_POST["addr"];
	$CDOB = $_POST["day"];
	
  	// Attempt update query execution
  	$sql ="UPDATE customer SET CEmail = '$CEmail', CFName = '$CFName', CLName = '$CLName', CMNumber = '$CMNumber', CAddress = '$CAddress', CDOB = '$CDOB' WHERE CID = '$cID'";
	  	// execute query
  		
	if(mysqli_query($conn, $sql)){

		header("Location:Loging.php");
	} 
	else{
		echo "<script> alert('ERROR: Could not able to execute $sql. ')</script>" ;
	}

	// Close connection
	mysqli_close($conn);
}

?>
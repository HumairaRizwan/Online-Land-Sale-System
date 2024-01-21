<?php
    include_once 'config.php';
?>
<?php 

session_start(); 


if (isset($_POST['C_email']) && isset($_POST['C_password'])) {


	$C_email = $_POST['C_email'];
	$C_password =$_POST['C_password'];

	
		$sql = "SELECT * FROM customer WHERE Cemail='$C_email' AND CPassword='$C_password'";

		$result = $conn->query($sql);

		if (mysqli_num_rows($result) == 1) {
			$row = $result->fetch_assoc();
            if ($row['CEmail'] == $C_email && $row['CPassword'] == $C_password) {
            	$_SESSION['C_email'] = $row['CEmail'];
            	$_SESSION['CFName'] = $row['CFName'];
            	$_SESSION['CID'] = $row['CID'];
            	$_SESSION['CLName'] = $row['CLName'];
            	
            	header("Location:UserProfile.php");
		        exit();
            }else{
				header("Location:Loging.php?error=Incorrect User name or password");
		        exit();
			}
		}else{
			header("Location:Loging.php?error=Incorrect User name or password");
	        exit();
		}
	
	
}else{
	header("Location: Loging.php");
	exit();
}
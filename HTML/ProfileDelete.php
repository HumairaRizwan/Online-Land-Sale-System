<!DOCTYPE html>
<?php
    include_once 'config.php';
    session_start(); 
    global $con;
    $CID=$_SESSION['CID'];
?>
<?php
	include_once 'config.php';
	global $con;
    
              
            $sql = " DELETE FROM customer WHERE 	CID = '$CID'";
            $result = mysqli_query($conn, $sql);

            if($result)
            {
                header("location:Home.php");
            }
            else
            {
                echo ' Please Check Your Query ';
            }

        
        ?>
<?php
	include_once 'config.php';
	global $con;
    
         if(isset($_GET['GetLID']))
        {
            $LID = $_GET['GetLID'];
            $sql = " DELETE FROM lands WHERE 	Land_Id = '$LID'";
            $result = mysqli_query($conn, $sql);

            if($result)
            {
                header("location:SellALandDetails.php");
            }
            else
            {
                echo ' Please Check Your Query ';
            }
        }
        else
        {
            header("SellALandDetails.php");
        }
        

        ?>
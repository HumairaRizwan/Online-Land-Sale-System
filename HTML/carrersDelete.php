<?php
	include_once 'config.php';
	global $con;
    
         if(isset($_GET['GetCarreerID']))
        {
            $Carreer_ID = $_GET['GetCarreerID'];
            $sql = " DELETE FROM carrers WHERE 	carrers_ID = '$Carreer_ID'";
            $result = mysqli_query($conn, $sql);

            if($result)
            {
                header("location:MyCareerDetails.php");
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
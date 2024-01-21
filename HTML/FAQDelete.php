<?php
	include_once 'config.php';
	global $con;
    
         if(isset($_GET['FID']))
        {
            $FID = $_GET['FID'];
            $sql = " DELETE FROM faq WHERE 	FAQID = '$FID'";
            $result = mysqli_query($conn, $sql);

            if($result)
            {
                header("location:FAQmy.php");
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
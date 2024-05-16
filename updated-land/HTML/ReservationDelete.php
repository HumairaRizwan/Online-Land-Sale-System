<?php
	include_once 'config.php';
	global $con;
    
         if(isset($_GET['GetRID']))
        {
            $R_ID = $_GET['GetRID'];
            $sql = " DELETE FROM reservation WHERE 	RID = '$R_ID'";
            $result = mysqli_query($conn, $sql);

            if($result)
            {
                header("location:MyReservations.php");
            }
            else
            {
                echo ' Please Check Your Query ';
            }
        }
        else
        {
            header("location:MyReservations.php");
        }
        

        ?>
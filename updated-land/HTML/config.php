<?php 
$servername = "localhost";
$username = "root";
$password = "";
$db = "land_sale_system";

//create connection
$conn = new mysqli($servername,$username,$password,$db);

//check connection
if ($conn->connect_error)
{
	die("Connection failed:".$conn->connect_error());
}
echo "<script>alert('Connection Successfully!')</script>";

?>
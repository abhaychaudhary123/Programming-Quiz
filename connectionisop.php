<?php

$servername = "localhost";
$username = "id18948282_abhay";
$password = "#Kuldeeprenu02";
$dbname = "id18948282_quizsite";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
	//echo "Successfully connect";
}

else
{
	echo "Failed to connect due to Technical reasons".mysqli_connect_error();
}


?>

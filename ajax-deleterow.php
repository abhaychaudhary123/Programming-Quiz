<?php
include("connectionisop.php");
error_reporting(0);
?>
<?php


$did = $_POST["did"];






$del= "DELETE FROM `recentlive` WHERE qNO = $did ";
$suc = mysqli_query($conn,$del);

if($suc)
{
	echo "1";
}
else
{
	echo "2";
}
	







?>

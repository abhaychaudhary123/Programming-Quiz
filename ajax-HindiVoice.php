<?php
include('connectionisop.php');
error_reporting(0);
?>
<?php

$voiceID = $_POST['voiceID'];

	 $sql1=" SELECT * FROM `recentlive` WHERE `qNO`='$voiceID' ";
    $data11 = mysqli_query($conn,$sql1);
    
$row = mysqli_fetch_assoc($data11);
$qTitle1 = $row["qSUB1"];
$qOptionA1 = $row["optionA1"];
$qOptionB1 = $row["optionA2"];
$qOptionC1 = $row["optionA3"];
$qOptionD1 = $row["optionA4"];
   
	
$qTitle1 = htmlspecialchars($qTitle1);
$qTitle1 = rawurlencode($qTitle1);

$qOptionA1 = htmlspecialchars($qOptionA1);
$qOptionA1 = rawurlencode($qOptionA1);

$qOptionB1 = htmlspecialchars($qOptionB1);
$qOptionB1 = rawurlencode($qOptionB1);

$qOptionC1 = htmlspecialchars($qOptionC1);
$qOptionC1 = rawurlencode($qOptionC1);

$qOptionD1 = htmlspecialchars($qOptionD1);
$qOptionD1 = rawurlencode($qOptionD1);

$html = file_get_contents('https://translate.google.com/translate_tts?ie=UTF-8&client=gtx&q=' .$qTitle1.$qOptionA1.$qOptionB1.$qOptionC1.$qOptionD1. '&tl=en-IN');
$player = "<audio controls='controls' style='display:none;' autoplay>
  			<source src='data:audio/mpeg;base64,".base64_encode($html)."'>
		   </audio>";
		   
		   
echo "Daily Quiz  $player";


?>

<?php
include('connectionisop.php');
error_reporting(0);
?>
<?php

$voiceID = $_POST['voiceID'];

	 $sql1=" SELECT * FROM `recentlive` WHERE `qNO`='$voiceID' ";
    $data11 = mysqli_query($conn,$sql1);
    
$row = mysqli_fetch_assoc($data11);
$qTitle = $row["qSUB"];
$qOptionA = $row["optionA"];
$qOptionB = $row["optionB"];
$qOptionC = $row["optionC"];
$qOptionD = $row["optionD"];
   
	
$qTitle = htmlspecialchars($qTitle);
$qTitle = rawurlencode($qTitle);

$qOptionA = htmlspecialchars($qOptionA);
$qOptionA = rawurlencode($qOptionA);

$qOptionB = htmlspecialchars($qOptionB);
$qOptionB = rawurlencode($qOptionB);

$qOptionC = htmlspecialchars($qOptionC);
$qOptionC = rawurlencode($qOptionC);

$qOptionD = htmlspecialchars($qOptionD);
$qOptionD = rawurlencode($qOptionD);

$html = file_get_contents('https://translate.google.com/translate_tts?ie=UTF-8&client=gtx&q=' .$qTitle.$qOptionA.$qOptionB.$qOptionC.$qOptionD. '&tl=en-IN');
$player = "<audio controls='controls' style='display:none;' autoplay>
  			<source src='data:audio/mpeg;base64,".base64_encode($html)."'>
		   </audio>";
		   
		   
echo "Daily Quiz  $player";


?>

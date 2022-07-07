<?php
include('connectionisop.php');
error_reporting(0);
?>
<?php

$upid = $_POST['d0'];
$d1 = $_POST['d1'];
$d2 = $_POST['d2'];
$d3 = $_POST['d3'];
$d4 = $_POST['d4'];
$d5 = $_POST['d5'];
$d6 = $_POST['d6'];
$d7 = $_POST['d7'];

$d11 = $_POST['d11'];
$d21 = $_POST['d21'];
$d31 = $_POST['d31'];
$d41 = $_POST['d41'];
$d51 = $_POST['d51'];
$d61 = $_POST['d61'];
$d71 = $_POST['d71'];


	 $sql1="
UPDATE `recentlive` SET `qSUB`='$d1',`optionA`='$d2',
`optionB`='$d3',`optionC`='$d4',`optionD`='$d5',`correct`='$d6',`cOption`='$d7' 
,`qSUB1`='$d11',`optionA1`='$d21',`optionA2`='$d31',`optionA3`='$d41',`optionA4`='$d51',`correct1`='$d61',`cOption1`='$d71'
WHERE `qNO`='$upid'
	
	";
	
	
	
    $data11 = mysqli_query($conn,$sql1);

	if($data11)
	{
		echo 1;
		
	}
	else
	{
			echo 0;
	}
	
	






?>
<script>
    


</script>

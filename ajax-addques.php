<?php
include("connectionisop.php");
error_reporting(0);
?>
<?php



$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];
$q4 = $_POST["q4"];
$q5 = $_POST["q5"];
$q6 = $_POST["q6"];
$q7 = $_POST["q7"];
$q8 = $_POST["q8"];


$q21 = $_POST["q21"];
$q31 = $_POST["q31"];
$q41 = $_POST["q41"];
$q51 = $_POST["q51"];
$q61 = $_POST["q61"];
$q71 = $_POST["q71"];
$q81 = $_POST["q81"];
   



$sql= "

INSERT INTO `recentlive`(`qID`, `qNO`, `qSUB`, `optionA`, `optionB`, `optionC`, `optionD`, `correct`, `cOption`, `qSUB1`, `optionA1`, `optionA2`, `optionA3`, `optionA4`, `correct1`, `cOption1`) VALUES  ('UID00000','$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q21','$q31','$q41','$q51','$q61','$q71','$q81')

";
$data1 = mysqli_query($conn,$sql);


if($data1)
{
    echo "1";
}
else
{
    echo "0";
}




?>

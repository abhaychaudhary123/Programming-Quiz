<?php

include("connectionisop.php");
error_reporting(0);
?>

<?php

$search_value = $_POST["search"];




 $sql= "SELECT * FROM `recentlive` WHERE qSUB LIKE '%{$search_value}%' OR qNO LIKE '%{$search_value}%'
OR optionA LIKE '%{$search_value}%'
OR optionB LIKE '%{$search_value}%'
OR optionC LIKE '%{$search_value}%'
OR optionD LIKE '%{$search_value}%'

 ";
$data1 = mysqli_query($conn,$sql);


$totalselect = mysqli_num_rows($data1);
$output = "";



if($totalselect > 0)	
{
while($row=mysqli_fetch_assoc($data1))
	{
	$output .= "


	
<div class='ques-container' style='font-family:'Work Sans'; '>
 
  <div>Q{$row["qNO"]} :</div>
  <div  style='text-align:left';>{$row["qSUB"]}</div>
  
  <div>(a)</div> 
  <div style='text-align:left';>{$row["optionA"]}</div> 
  
  <div>(b)</div> 
  <div style='text-align:left';>{$row["optionB"]}</div> 
  
  <div>(c)</div> 
  <div style='text-align:left';>{$row["optionC"]}</div> 
  
 <div>(d)</div> 
 <div style='text-align:left';>{$row["optionD"]}</div> 

  <div></div> 
  <div><button id='view-answer' class='view'  data-answer='{$row["qNO"]}'>&nbsp;View Answer&nbsp;
  </button>&nbsp;<button id='voice' class='voice' style='border:none;'  data-answer='{$row["qNO"]}'>&nbsp;<i style='border:none;outline:none;color:lightseagreen;' class='fas'>&#xf04b;</i>&nbsp;
  </button>
  
  </div> 
  
  <div></div> 
  <div id='correct-{$row["qNO"]}' style='color:#009270;display:none;'>({$row["cOption"]}) {$row["correct"]}</div> 
  
  
</div>
		
		";
		
	}
	echo $output;	
}
else
{
	echo "<div style='text-align:center;'>No such question found</div>";
	echo "</br>";
	echo "<div style='text-align:center;'><div class='spinner-border text-warning' role='status'>
  <span class='visually-hidden'>Loading...</span>
</div></div>";
}



?>

<script>
    
$(document).ready(function(){
  $(".view").click(function(){
	  var id = $(this).data("answer");
      $("#correct-"+id).toggle();
  });
});

    
</script>
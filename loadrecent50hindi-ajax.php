<?php

include("connectionisop.php");
error_reporting(0);
?>
<?php


$sql= "SELECT * FROM `recentlive` ";
$data1 = mysqli_query($conn,$sql);


$totalselect = mysqli_num_rows($data1);
$output = "";

if($totalselect > 0)	
{
while($row=mysqli_fetch_assoc($data1))
	{
	$output .= "


	
<div class='ques-container'  '>
 
  <div>प्रश्न{$row["qNO"]} :</div>
  <div  style='text-align:left';>{$row["qSUB1"]}</div>
  
  <div>(क)</div> 
  <div style='text-align:left';>{$row["optionA1"]}</div> 
  
  <div>(ख)</div> 
  <div style='text-align:left';>{$row["optionA2"]}</div> 
  
  <div>(ग)</div> 
  <div style='text-align:left';>{$row["optionA3"]}</div> 
  
 <div>(घ)</div> 
 <div style='text-align:left';>{$row["optionA4"]}</div> 

  <div></div> 
  <div><button id='view-answer' class='view'  data-answer='{$row["qNO"]}'>&nbsp;View Answer&nbsp;
   </button>&nbsp;<button id='voice1' class='voice1' style='border:none;'  data-answer='{$row["qNO"]}'>&nbsp;<i style='border:none;outline:none;color:lightseagreen;' class='fas'>&#xf04b;</i>&nbsp;
  </button>
  </div> 
  
  <div></div> 
  <div id='correct-{$row["qNO"]}' style='color:#009270;display:none;'>({$row["cOption1"]}) {$row["correct1"]}</div> 
  
  
</div>
		
		";
		
	}
	echo $output;	
}
else
{
	echo "<div style='text-align:center;'>रुको दोस्तों, प्रश्न जल्द ही अपलोड किए जाएंगे</div>";
	echo "</br>";
	echo "<div style='text-align:center;'><div class='spinner-border text-warning' role='status'>
  <span class='visually-hidden'>Loading...</span>
</div>
</div>";
}





?>
<script>
    
$(document).ready(function(){
  $(".view").click(function(){
	  var id = $(this).data("answer");
      $("#correct-"+id).toggle();
  });
});

 
$(document).on("click",".voice1", function(){
	
	var voiceID = $(this).data("answer");
	$.ajax({
		url:"ajax-HindiVoice.php",
		type : "POST",
		data : {voiceID:voiceID},
		
		success : function(data){
				$(".content-head-item").html(data);
			
		}
		
	});
	
	
});


       
</script>

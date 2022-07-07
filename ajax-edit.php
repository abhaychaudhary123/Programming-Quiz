<?php
include('connectionisop.php');
error_reporting(0);
?>
<?php

$upid = $_POST['upid'];

$sql="SELECT * FROM `recentlive` WHERE qNO = '$upid' ";
$data1 = mysqli_query($conn,$sql);

$totalselect = mysqli_num_rows($data1);
$output = '';

if($totalselect > 0)	
{

	while($row=mysqli_fetch_assoc($data1))
	{
		$output .= "
	
        <div class='col-md-12 som' style='padding:10px;margin-top:0px;display:none;'>
    <textarea type='text' class='shadow-none form-control' id='d0' style=''  placeholder='Question Title'  value='' autocomplete='off'>{$row["qNO"]}</textarea>
  </div> 
		  
  <div class='col-md-12 som' style='padding:10px;margin-top:0px;'>
    <textarea type='text' class='shadow-none form-control' id='d1' style=''  placeholder='Question Title'  value='' autocomplete='off'>{$row["qSUB"]}</textarea>
  </div>
  
   <div class='col-md-12' style='padding:10px;margin-top:-15px;'>
    <input type='text' class='shadow-none form-control' id='d2' value='{$row["optionA"]}' placeholder='Option A' autocomplete='off'>
  </div>
  
   <div class='col-md-12' style='padding:10px;margin-top:-15px;'>
    <input type='text' class='shadow-none form-control'  id='d3' value='{$row["optionB"]}' placeholder='Option B' autocomplete='off'>
  </div>
  
 <div class='col-md-12' style='padding:10px;margin-top:-15px;'>
    <input type='text' class='shadow-none form-control' id='d4'  value='{$row["optionC"]}' placeholder='Option C' autocomplete='off'>
  </div>

<div class='col-md-12' style='padding:10px;margin-top:-15px;'>
    <input type='text' class='shadow-none form-control' id='d5' value='{$row["optionD"]}' placeholder='Option D' autocomplete='off'>
  </div>
  
  <div class='col-md-12' style='padding:10px;margin-top:-15px;'>
    <input type='text' class='shadow-none form-control' id='d6'  value='{$row["optionD"]}' placeholder='Correct Answer' autocomplete='off'>
  </div>
  
<div class='col-md-12' style='padding:10px;margin-top:-15px;'>
    <select id='d7' name='q8' class='shadow-none form-select'>
     <optgroup label='Selected Option : {$row["cOption"]}'>
      <option value='a'>a</option>
      <option value='b'>b</option>
      <option value='c'>c</option>
      <option value='d'>d</option>
    </select>
  </div>
  
  
		  
  <div class='col-md-12 som' style='padding:10px;margin-top:0px;'>
    <textarea type='text' class='shadow-none form-control' id='d11' style=''  placeholder='Question Title in Hindi'  value='' autocomplete='off'>{$row["qSUB1"]}</textarea>
  </div>
  
   <div class='col-md-12' style='padding:10px;margin-top:-15px;'>
    <input type='text' class='shadow-none form-control' id='d21' value='{$row["optionA1"]}' placeholder='Option A' autocomplete='off'>
  </div>
  
   <div class='col-md-12' style='padding:10px;margin-top:-15px;'>
    <input type='text' class='shadow-none form-control'  id='d31' value='{$row["optionA2"]}' placeholder='Option B' autocomplete='off'>
  </div>
  
 <div class='col-md-12' style='padding:10px;margin-top:-15px;'>
    <input type='text' class='shadow-none form-control' id='d41'  value='{$row["optionA3"]}' placeholder='Option C' autocomplete='off'>
  </div>

<div class='col-md-12' style='padding:10px;margin-top:-15px;'>
    <input type='text' class='shadow-none form-control' id='d51' value='{$row["optionA4"]}' placeholder='Option D' autocomplete='off'>
  </div>
  
  <div class='col-md-12' style='padding:10px;margin-top:-15px;'>
    <input type='text' class='shadow-none form-control' id='d61'  value='{$row["correct1"]}' placeholder='Correct Answer' autocomplete='off'>
  </div>
  
<div class='col-md-12' style='padding:10px;margin-top:-15px;'>
    <select id='d71' name='q8' class='shadow-none form-select'>
     <optgroup label='Selected Option : {$row["cOption1"]}'>
      <option value='क'>क</option>
      <option value='ख'>ख</option>
      <option value='ग'>ग</option>
      <option value='घ'>घ</option>
    </select>
  </div>
  
  
  
  
  
  
    <button type='button' id='save-changes'  data-bs-dismiss='modal' style='display:grid;justify-content:center;background-color:#F48024;border:none;font-family: 'Source Sans Pro';' class=' shadow-none mx-auto btn btn-primary '>Save Changes
        </button>
	
		
		";
		
	}
	echo $output;
	
	
}
else
{
	echo 'No data found';
}






?>

<script>
    
$(document).on("click","#save-changes", function(){
    
	var d0 = $("#d0").val();
	var d1 = $("#d1").val();
	var d2 = $("#d2").val();
	var d3 = $("#d3").val();
	var d4 = $("#d4").val();
	var d5 = $("#d5").val();
	var d6 = $("#d6").val();
	var d7 = $("#d7").val();
	
	var d11 = $("#d11").val();
	var d21 = $("#d21").val();
	var d31 = $("#d31").val();
	var d41 = $("#d41").val();
	var d51 = $("#d51").val();
	var d61 = $("#d61").val();
	var d71 = $("#d71").val();
	
	$.ajax({
		url:"ajax-save-changes.php",
		type : "POST",
		data : {d1:d1,
		d3:d3 , d2:d2 , 
		d4:d4, d5:d5, d6:d6, d7:d7,d0:d0,d11:d11,d21:d21,d31:d31,d41:d41,d51:d51,d61:d61,d71:d71
		
		},
		
		success : function(data){
			if(data!=0)
			{
				$(".content-head-item").html("Data updated");
				loadTable();
				
				
			}
			if(data==0)
			{
				$(".content-head-item").html("Failed to update Data");
					loadTable();
			}
		
		
			
			
		}
		
	});
	
	
});


</script>

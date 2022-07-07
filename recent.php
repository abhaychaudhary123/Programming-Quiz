<?php
error_reporting(0);
?>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css\recent-content\logo-bar.css">
  <link rel="stylesheet" href="css\recent-content\crousel-bar.css">
  <link rel="stylesheet" href="css\recent-content\menu-bar.css">
  <link rel="stylesheet" href="css\recent-content\responsive-menu-bar.css">
  <link rel="stylesheet" href="css\recent-content\content-header.css">
  <link rel="stylesheet" href="css\recent-content\search-lang.css">
  <link rel="stylesheet" href="css\recent-content\questions.css">
  <link rel="stylesheet" href="css\recent-content\question-pc-grid.css">
  <link rel="stylesheet" href="js\recent-content\uni-js.js">

  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu|Lora">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<style type="text/css">.disclaimer { display: none; }</style>
  <link href='https://fonts.googleapis.com/css?family=Roboto Condensed' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Work Sans' rel='stylesheet'>
<script src="js\nav-slider\nav-slider-for-mob.js"></script>
<script src="js\ques-toggle\ques-toggle.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Source Sans Pro' rel='stylesheet'>
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

<!-- Start of Logo Bar -->

<div class="logo-container">
  <div class="logo-item">
  Programming Quiz
  </div>
</div>

<!-- End of Logo Bar -->



<!-- Start of Quotes Crousel  -->

<div class="crousel-container">
  <div class="crousel-item">
  

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner" ">
    <div class="carousel-item active">
     <q id="quote"> 
    Together we Learn </q>
    </div>
    <div class="carousel-item">
       <q id="quote"> Together we Grow </q>
    </div>
    <div class="carousel-item">
       <q id="quote"> Together we win </q>
    </div>
  </div>
</div>
    
   
  </div>
</div>

<!-- End of Quotes Crousel  -->






<!-- Start of content Head  -->

<div class="content-head-container">
  <div class="content-head-item">
  
Daily Quiz
   
  </div>
</div>

<!-- End of content Head  -->




<!-- Start of content Head  -->

<div class="search-lang-container">
  <div class="search-lang-item-1">

<input type="text" id="search-bar" placeholder=" Search Question">
   
  </div>
  

</div>

<!-- End of content Head  -->




<!-- Start of questions content for pc/m  -->
<div class="p-grid-container">
  <div class="i-1"></div>
  
  <div class="i-1">

<div  id="ques" style="padding:10px;color:#57666F;font-family:'Source Sans Pro' ">

</div>
  
  </div>
  
  <div class="i-1"></div>  
</div>

<!-- End of question content for pc/m -->






<div class='modal fade' id='modal1' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' style="color:#57666F;font-family: 'Source Sans Pro';" id='exampleModalLabel'>
        Any queries related to this question ?
        </h5>
        <button type='button' class='shadow-none btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
      </div>
      <div class='modal-body' id="m1" style="font-family: 'Source Sans Pro';" >
        

		
      </div>
      <div class='modal-footer'>
        <button type='button' id="save-changes" data-bs-dismiss='modal' style="background-color:#F48024;border:none;font-family: 'Source Sans Pro';" class=' shadow-none mx-auto btn btn-primary'>Submit Query</button>
      </div>
    </div>
  </div>
</div>




<!-- Change Language  -->

<div class="change-language">

<button class="btnwork" id="fixedbutton">हिन्दी</button>

</div>

<!-- End of Change Language  -->

<!-- Change Language  -->

<div class="change-language-1" >

<button class="btnwork-1" id="fixedbutton-1">English</button>

</div>

<!-- End of Change Language  -->





</body>
</html>


<script type="text/javascript" src="js/jquery.js"></script>
<script src="js/recent-content/uni-js.js"></script>
<script src="js/recent-content/livesearch.js"></script>

<script>



$(document).on("click","#ask-query", function(){
	
	var QuesID = $(this).data("query");

	$.ajax({
		url:"query-submit.php",
		type : "POST",
		data : {QuesID:QuesID},
		
		success : function(data){
			$("#m1").html(data);
			
			
			
			
		}
		
	});
	
	
});




$("#fixedbutton-1").hide();

$(".btnwork").click(function(){

$(".btnwork").hide();

    

	$.ajax({
		url:"loadrecent50hindi-ajax.php",
		type : "POST",
		
		success : function(data){
			$("#ques").html(data);
			$("#fixedbutton-1").show();
		}
		
	});
    
    
	
    
    
});

/*  English   */	


$(".btnwork-1").click(function(){

$(".btnwork").show();

    

	$.ajax({
		url:"loadrecent50-ajax.php",
		type : "POST",
		
		success : function(data){
			$("#ques").html(data);
			$("#fixedbutton-1").hide();
		}
		
	});
	
    
    
});
	
	


</script>
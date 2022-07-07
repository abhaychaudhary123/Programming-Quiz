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
  
Add Quiz Questions
   
  </div>
</div>

<!-- End of content Head  -->



 <!-- create button-->

 <section class="my-5">
    <div class="container">
      <div class="p-4 text-white text-center" style="background-color:#F8F9FA;" id="main-items">
       
	   <form  class="row g-3">
	    
 <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="q1" name="q1" placeholder="Question No.">
  </div>
  
   <div class="col-md-10">
    <input type="text" class="shadow-none form-control" id="q2" name="q2" placeholder="Question Title">
  </div>
  
  <div class="col-md-3">
    <input type="text" class="shadow-none form-control" id="q3" name="q3" placeholder="Option A">
  </div>
  
   <div class="col-md-3">
    <input type="text" class="shadow-none form-control" id="q4" name="q4" placeholder="Option B">
  </div>
  
   <div class="col-md-3">
    <input type="text" class="shadow-none form-control" id="q5" name="q5" placeholder="Option C">
  </div>
  
   <div class="col-md-3">
    <input type="text" class="shadow-none form-control" id="q6" name="q6" placeholder="Option D">
  </div>
  
   <div class="col-md-3">
    <input type="text" class="shadow-none form-control" id="q7" name="q7" placeholder="Correct Answer">
  </div>
  
   <div class="col-md-3">
    <select id="q8" name="q8" class="shadow-none form-select">
      <option selected value="selected">Correct Option</option>
      <option value="a">a</option>
      <option value="b">b</option>
      <option value="c">c</option>
      <option value="d">d</option>
    </select>
  </div>
  

  
  
  
  
   <div class="col-md-10">
    <input type="text" class="shadow-none form-control" id="q21" name="q21" placeholder="Question Title">
  </div>
  
  <div class="col-md-3">
    <input type="text" class="shadow-none form-control" id="q31" name="q31" placeholder="Option A">
  </div>
  
   <div class="col-md-3">
    <input type="text" class="shadow-none form-control" id="q41" name="q41" placeholder="Option B">
  </div>
  
   <div class="col-md-3">
    <input type="text" class="shadow-none form-control" id="q51" name="q51" placeholder="Option C">
  </div>
  
   <div class="col-md-3">
    <input type="text" class="shadow-none form-control" id="q61" name="q61" placeholder="Option D">
  </div>
  
   <div class="col-md-3">
    <input type="text" class="shadow-none form-control" id="q71" name="q71" placeholder="Correct Answer">
  </div>
  
   <div class="col-md-3">
    <select id="q81" name="q81" class="shadow-none form-select">
      <option selected value="selected">Correct Option</option>
      <option value="क">क</option>
      <option value="ख">ख</option>
      <option value="ग">ग</option>
      <option value="घ">घ</option>
    </select>
  </div>
  
    <div class="col-12">
    <button  id="submit-5" style="background-color:#F48024;border:none;" name="submit-5" class="shadow-none btn btn-primary">Add Question</button>
  </div>

  </div>
  
  </div>
  
  
  </section>







</body>
</html>


<script type="text/javascript" src="js/jquery.js"></script>
<script src="js/recent-content/uni-js.js"></script>
<script src="js/recent-content/livesearch.js"></script>

<script>



	
$("#submit-5").on("click",function(e){
	e.preventDefault();
	
	var q1 = $("#q1").val();
	var q2 = $("#q2").val();
	var q3 = $("#q3").val();
	var q4 = $("#q4").val();
	var q5 = $("#q5").val();
	var q6 = $("#q6").val();
	var q7 = $("#q7").val();
	var q8 = $("#q8").val();
	
	
	var q21 = $("#q21").val();
	var q31 = $("#q31").val();
	var q41 = $("#q41").val();
	var q51 = $("#q51").val();
	var q61= $("#q61").val();
	var q71 = $("#q71").val();
	var q81 = $("#q81").val();
	
	
	
	$.ajax({
		url:"ajax-addques.php",
		type : "POST",
		data : {q1:q1,q2:q2,q3:q3,q4:q4,q5:q5,q6:q6,q7:q7,q8:q8,q21:q21,q31:q31,q41:q41,q51:q51,q61:q61,q71:q71,q81:q81},
		success : function(data){
			if(data!=0)
			{
                $(".content-head-item").html("Data Added");
			}
			else
			{
				$(".content-head-item").html("Failed to add data");
			}
		}
		
	});
		
		
		
});


</script>
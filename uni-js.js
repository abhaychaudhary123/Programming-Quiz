function loadTable()
	{

	$.ajax({
		url:"loadrecent50-ajax.php",
		type : "POST",
		
		success : function(data){
			$("#ques").html(data);
			
		}
		
	 });
	
    }
	loadTable();
	
	
	

	

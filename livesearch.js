//Live search

$("#search-bar").on("keyup",function()
{
  var search_term = $(this).val();
  
  if(search_term == '')
  {
	  loadTable();
  }
  else
  {

  $.ajax({
    url:"livesearch50-ajax.php",
    type:"POST",
    data:{search:search_term},
    success:function(data)
    {
      $("#ques").html(data);

    }



  });
  
  }

});


<!DOCTYPE html> 
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
$(document).ready(function(){
   // $("#news").click(function(){
        $.getJSON("https://newsapi.org/v2/top-headlines?sources=the-next-web,the-verge&apiKey=53f4eea732ad4cd7a90d4fe17f728e9e", function(result){

		$(result).each(function(i,result){
			$.each(result,function(k,v){
			for (item in result) { 
				$i="1";		for (subItem in result[item]) { 
				var titleVal=$("#titleVal").val();
				if(titleVal==result[item][subItem].title){
				if (typeof result[item][subItem].title !== "undefined") {
				       $('#newsData tr:last').after("<tr><td>"+result[item][subItem].title+"</td><td>"+result[item][subItem].description+"</td><td>"+result[item][subItem].publishedAt+"</td><td>"+result[item][subItem].author+"</td><td><img src='"+result[item][subItem].urlToImage+"' alt='image' width='100px;' height='100px;' /></td><td><a href='#' class='button'>The button</a></td></tr>");
				}
					//$("div").append("<b>"+result[item][subItem].title+"</b>");
						console.log(result[item][subItem].title);
						console.log(result[item][subItem].description);
						console.log(result[item][subItem].publishedAt);
						console.log(result[item][subItem].author);
						console.log(result[item][subItem].urlToImage);
				}	
				}
				}
				
			});
        });
    });


//});
  });
</script>
</head>
<body>
<div class="container">
  <h2 id="news">News</h2>
          
  <table class="table" id="newsData">
    <thead>
      <tr>
        <th>News Headline</th>
        <th>News Description</th>
        <th>Date</th>
        <th>Author</th>
        <th>Image</th>
		<th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
		<td></td>
	  
	  </tr>
	  
      
    </tbody>
  </table>
  
</div>
<input type="hidden" id="titleVal" value="<?php echo $_POST['title']; ?>" />
</body>
</html>

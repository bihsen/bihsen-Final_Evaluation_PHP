<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>let's clean!</title>
</head>
<body>
<div id="resultForm">...</div>
	<form action="" method="post">
		<label for="">Brand</label>
		<input type="text" name="brand" id="brand" />
		<label for="">Model</label>
		<input type="text" name="model" id="model" />
		<label for="">Year</label>
		<input type="number" name="year" id="year"/>
		<label for="">Color</label>
		<input type="text" name="color" id="color"/>
		<input type="submit" id="submit" value="Submit">
	</form>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>
$(function(){
	$('input[type="submit"]').click(function(e){
		//console.log('hohoho');
		e.preventDefault();
		$.ajax({
			url: 'AjaxCall.php',
			type: 'post',
			data: $('form').serialize(),
			success: function(result) {
				$('#resultForm').html('<div class="green">'+result+'</div>');
			},
			error: function(err){
				// If ajax errors happens
			}
		});
	});
});
</script>
</html>
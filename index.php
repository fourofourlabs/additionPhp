<!DOCTYPE html>
<html>
<head>
	<title>Addition</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body style="width: 50%;margin: auto;padding: auto;">
	<h1>Addition</h1>
<form id="form">
  <div class="form-group">
    <label for="firstnumber">Enter first number</label>
    <input type="text" class="form-control" id="firstnumber">
  </div>
  <div class="form-group">
    <label for="secondnumber">Enter second number</label>
    <input type="text" class="form-control" id="secondnumber">
  </div>
  <div class="form-group">
    <label for="secondnumber">Result is</label>
    <input type="text" class="form-control" id="resultnumber" disabled="disabled">
  </div>
  <button type="button" class="btn btn-primary" id="addButton">ADD</button>
  <button type="button" class="btn btn-warning" id="resetButton">RESET</button>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
	$("#addButton").click(function(){
		var firstnumber = $("#firstnumber").val();
		var secondnumber = $("#secondnumber").val();
		$.ajax({
			type: "POST",
		 	url: "addition.php",
		 	data: {firstnumber:firstnumber, secondnumber:secondnumber}, 
		 	success: function(result){
		 		$("#resultnumber").val(result);
  			}
  		});
	});
	$("#resetButton").click(function(){
		$("#form")[0].reset();
	});
</script>
</body>
</html>
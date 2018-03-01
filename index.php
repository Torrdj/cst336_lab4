<?php
	$backgroundImage = "img/sea.jpg";
	
	// API call goes here
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Image Carousel</title>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<style>
			@import url("css/styles.css");
			body {
				background-image: url('<?=$backgroundImage ?>');
			}
		</style>
	</head>
	<body>
		<br/><br/>
		<!-- HTML form goes here! -->
		<br/><br/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>
<?php
	$backgroundImage = "img/sea.jpg";
	
	// API call goes here
	if (isset($_GET['keyword'])){
		include 'api/pixabayAPI.php';
		$imageURLs = getImageURLs($_GET['keyword']);
		$backgroundImage = $imageURLs[array_rand($imageURLs)];
	}
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
		<?php
			if (!isset($imageURLs)){
				echo "<h2> Type a keyword to display a slideshow <br/> with random images from Pixabay.com </h2>";
			} else {
				// Display Caroussel Here
				for ($i = 0; $i < 5; $i++)
					echo "<img src'".$imageURLs[$i]."' width='200' >";
			}
		?>
		<!-- HTML form goes here! -->
		<form>
			<input type="text" name="keyword" placeholder="Keyword" />
			<input type="submit" value="Submit" />
		</form>
		<br/><br/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>
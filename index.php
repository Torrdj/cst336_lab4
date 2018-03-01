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
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
			if (!isset($imageURLs))
			{
				echo "<h2> Type a keyword to display a slideshow <br/> with random images from Pixabay.com </h2>";
			} 
			else 
			{
				// Display Caroussel Here
		?>
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<!-- Indicators Here -->
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
					</ol>
					
					<!-- Wrapper for Images -->
					<div class="carousel-inner" role="listbox">
						<?php
							for ($i = 0; $i < 5; $i++)
							{
								do
								{
									$randomIndex = rand(0, count($imageURLs));
								}while (!isset($imageURLs[$randomIndex]));
							
								echo '<div class="item ';
								echo ($i == 0) ? "active" : "";
								echo '"><img src="'.$imageURLs[$randomIndex].'" width="200" /></div>';
								unset($imageURLs[$randomIndex]);
							}
						?>
					</div>

					<!-- Controls Here -->
					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
		<?php
			}
		?>
		<!-- HTML form goes here! -->
		<form>
			<input type="text" name="keyword" placeholder="Keyword" />
			<input type="submit" value="Submit" />
		</form>
		<br/><br/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>
<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ACYRIDE</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>

<body>
	<?php
		include_once "header.php";
	?>

	<div class="splash-container embed-responsive embed-responsive-16by9">
		<iframe id="video" width="100" height="100" class="embed-responsive-item" src="https://player.vimeo.com/video/251772189?autoplay=1&amp;loop=1&amp;title=0&amp;byline=0&amp;portrait=0"
			webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

	</div>

	<div class="content-wrapper content-wrapper-home">

		<div class="main-content container">
			<div class="row form-group">
				<div class="col-md-4 col-sm-6">
					<h2 class="text-center">Green</h2>
					<p>
						When booking a ride with AcyRides you are going green! Since we are focusing on electric cars that are less harmful to the environment.
					</p>
				</div>
				<div class="col-md-4 col-sm-6">
					<h2 class="text-center">On the go</h2>
					<p>
						With AcyRide you will be picked up wherever you are to an affordable price.
					</p>
				</div>
				<div class="col-md-4 col-sm-6">
					<h2 class="text-center">Fast</h2>
					<p>
						Once you have confirmed your ride, we will connect you to the nearest driver to minimize waiting time.
					</p>
				</div>
			</div>
				
			<div class="row form-group">

				<div class="col-md-12">

					<a class="btn btn-default btn-primary btn-lg pull-right" href="help.php" role="button">Read more
						<i class="fa fa-angle-double-right" aria-hidden="true"></i>

					</a>
				</div>
			</div>
		</div>
			<?php
				include_once "footer.php";
			?>
	</div>
	<?php
		include_once "scripts.php";
	?>


</body>

</html>
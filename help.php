<?php
	session_start();
?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Help</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>

<body>
	<?php
		include_once("header.php");
	?>

	<div class="content-wrapper">
		<div class="main-content container">
			<div class="row form-group">
				<div class="col-md-12">
					<h2 class="bg-info">What is AcyRide?</h2>
					<p>
						AcyRide is a mobility service website that changes the idea of traveling in Annecy. We strive to provide the best services and facilitate mobility in Annecy. In order to reduce pollution, AcyRide aims to decrease the demand for normal cars in the city by offering rides with electric cars.
						Using electric cars is a big step forward in changing the city to an environment-friendly city.
					</p>
				</div>
				<div class="col-md-12">
					<h2 class="bg-info">Why AcyRide</h2>
					<p>
						Reaching your destination is no longer a problem and with AcyRide every ride is a new experience. AcyRides friendly drivers will pick you up where ever you are. We are capable of driving you to your destination without harming the environment.
					</p>
				</div>
				<div class="col-md-12">
					<h2 class="bg-info">How it works</h2>
					<p>
						AcyRide is Taxi service platform with a focus on offering the best service for people in Annecy.
						After registering on our web site, you just have to plan your ride and tap book a ride. A map will be shown on the screen with the drivers’ location and we will connect you to the closest one. A driver will be waiting for you at the address you provided and here your new experience starts.
					</p>
				</div>
				<div class="col-md-12">
					<h2 class="bg-info">Have troubles registering? </h2>
					<ul class="no-list-style">
						<li>Check that you are using a real name (Mark, William,… not Mark11).</li>
						<li>Check that your email is not already registered in our website.</li>
						<li>Check that your password formation is correct.</li>
						<li>You can always contact us for help.</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<?php
		include_once "scripts.php";
	?>
	<?php
		include_once "footer.php";
	?>
</body>

</html>
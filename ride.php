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
		include_once("header.php");
	?>
	
	<div class="content-wrapper">
		<div class="main-content container">
			<div class="row form-group">
				<div class="col-md-6">
					<h2 class="text-center">Book a ride</h2>
					<form class="form-horizontal" action="javascript:void(0);">
						<div class="form-group">
							<label for="adresse" class="col-sm-4 control-label">You</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" id="adresse" value="9 Rue de l'Arc en Ciel, 74940 Annecy-le-Vieux" placeholder="address" />
							</div>
						</div>
						<div class="form-group">
							<label for="adresse2" class="col-sm-4 control-label">Destination</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" id="adresse2" value="39 Avenue Beauregard annecy" placeholder="address" />
							</div>
							<input id="search" class="btn btn-default btn.primary" type="submit" value="Search" />
						</div>
					</form>
				</div>

				<div class="col-md-6">
					<p>
						<h2 id="info"></h2>

						<span id="fare-distance"></span><br>
						<span id="nearest-taxi"></span><br>
						<span id="ride-price" name="ride-price"></span>
						<form id="bookaride" method="post" action="ride.php">
						<input id="confirm-button" class="btn btn-default btn-primary pull-right hidden" type="submit" name="bookaride" value="Confirm" />
						</form>
					</p>
				</div>
				<div class="row">
					<div class="col-md-12" style="height:500px;">
						<section id="map" onload="initMap()">
							<div id="map_canvas"></div>
						</section>
						<p id="infos"></p>
						<p id="résultats"></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php
		if (isset($_POST['bookaride'] ))
			include_once("form_bookaride.php");
		include_once "scripts.php";
	?>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCv-bKsBagqyC-QVprDM_fFpoRwlRmq35Q&callback=initMap"></script>
	<script src="js/map.js"></script>

</body>

</html>
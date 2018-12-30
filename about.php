<?php
	session_start();
?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>About us</title>
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
			<div class="row">
				<div class="col-md-12">
					<h2 class="text-center">About us</h2>
					<p>
						Before starting this project, we did not all know each other. A course in the university gathered us.
						The idea of AcyRide has been already in Soufiane’s mind, and here it was the chance to apply it.<br>
						Why do we not have our own mobility service that uses only electric-cars?
						It is a way to make the city smart and a big step forward toward an eco-friendly city.
					</p>
					<p>Why do we not have our own mobility service that uses only El-cars? It is a way to make the city smart and a big step forward toward an eco-friendly city.</p>
					<p>While there are many ways to help the city, we believed that making our city an eco-friendly is one of the most important ways.</p>
					<p>Hence, we figured that starting electric cars taxi service with an easy and user-friendly platform is what it misses and need. </p>
				</div>
			</div>
			<div class="row content-image">
				<img src="img/aboutus.jpg" class="img-responsive">
			</div>
			<div class="row">
				<div class="col-md-12">
					<h2 class="text-center">Ask us anything!</h2>
				</div>
				<div class="col-md-8 col-md-offset-2">
				<form class="form-horizontal" action="envoi.php" method="post" enctype="application/x-www-form-urlencoded" name="formulaire">
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="name">
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="email">
						</div>
					</div>
					<div class="form-group">
						<label for="subject" class="col-sm-2 control-label">Subject</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="subject">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<button type="submit" class="btn btn-default btn-primary pull-right" >Submit</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
		<?php
		include_once "footer.php";
		include_once "scripts.php";
	?>
</body>

</html>
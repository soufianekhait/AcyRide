<?php  
session_start();  
?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign in</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>

<body>
	<?php
		include_once("header.php");
		if (isset($_SESSION['username']))
			header("Location: index.php");
	?>
	<div class="content-wrapper">
		<div class="main-content container">

			<div class="row form-group">
			</div>

			<!-- two columns -->
			<div class="row form-group">
				<div class="col-md-6">
					<!--<p>
						some info here
					</p>-->
					<img src="img/signin.jpg" class="img-responsive" style="width:500px;">
				</div>
				<div class="col-md-6">
				<h1 class="text-center">Sign in</h1>
				<form id="f_connexion" class="form-horizontal" method="post" action="signin.php" >

 					 <div class="form-group">
						<label for="mail" class="col-sm-4 control-label">Mail</label>
						<div class="col-sm-8">
							<input class="form-control" type="email" name="mail" id="mail" size="60" value="<?PHP if (isset($_POST["mail"])) {echo $_POST["mail"];}?>" />
						</div>
					</div>
					<div class="form-group">
						<label for="mdp" class="col-sm-4 control-label">Password</label>
						<div class="col-sm-8">
							<input class="form-control" type="password" name="mdp" id="mdp" size="60" />
						</div>
					</div>
					<input class="btn btn-default btn-primary pull-right" type="submit"  name="connexion" id="connexion" value="Sign in"/>

				</div>
				</form>
				<p>
					<?PHP
						if (isset($_POST['connexion'])) {
						    include_once "form_connexion.php";
						}

					?>
				</p>
			</div>
		</div>
	</div>

	</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.min.js" fall></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/froogaloop2.min.js"></script>
	<script src="js/site.js"></script>
			<?php
		include_once "footer.php";
		?>
</body>

</html>
<?php
	session_start();
?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign up</title>
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
				<div class="col-md-4 col-sm-6 col-md-offset-8">
					<h1>Sign up</h1>
				</div>
			</div>
			<!-- two columns -->
			<div class="row form-group">
				<div class="col-md-6">
					<img src="img/signup.jpg" class="img-responsive">
				</div>
				<div class="col-md-6">
				<form id="f_inscription" class="form-horizontal" method="post" action="signup.php" >
					<div class="form-group">
						<label for="name" class="col-sm-4 control-label">First name</label>
						<div class="col-sm-8">
							<input class="form-control" type="input" name="name" id="name" size="60" value="<?PHP if (isset($_POST["name"])) {echo $_POST["name"];} ?>" />
						</div>
					</div>
					<div class="form-group">
						<label for="lastname" class="col-sm-4 control-label">Last name</label>
						<div class="col-sm-8">
							<input class="form-control" type="input" name="lastname" id="lastname" size="60" value="<?PHP if (isset($_POST["lastname"])) {echo $_POST["lastname"];} ?>" />
						</div>
					</div>
 					 <div class="form-group">
						<label for="mail" class="col-sm-4 control-label">Mail</label>
						<div class="col-sm-8">
							<input class="form-control" type="email" name="mail" id="mail" size="60" value="<?PHP if (isset($_POST["mail"])) {echo $_POST["mail"];} ?>" />
						</div>
					</div>
					<div class="form-group">
						<label for="dob" class="col-sm-4 control-label">Birthday</label>
						<div class="col-sm-8">
							<input class="form-control" type="input" name="dob" id="dob" size="60" value="<?PHP if (isset($_POST["dob"])) {echo $_POST["dob"];} ?>" placeholder="DD/MM/YYYY" />
						</div>
					</div>
					<div class="form-group">
						<label for="phone" class="col-sm-4 control-label">Phone number</label>
						<div class="col-sm-8">
							<input class="form-control" type="input" name="phone" id="phone" size="60" value="<?PHP if (isset($_POST["phone"])) {echo $_POST["phone"];} ?>" maxlength="16" placeholder="(+33)0600000000" />
						</div>
					</div>
					<div class="form-group">
						<label for="mdp" class="col-sm-4 control-label">Password</label>
						<div class="col-sm-8">
							<input class="form-control" type="password" name="mdp" id="mdp" size="60" aria-describedby="helpBlock" />
							<span id="helpBlock" class="help-block">
							At least 8 characters including at least 1 digit and 1 punctuation character							</span>
						</div>
					</div>
					<div class="form-group">
						<label for="mdpbis" class="col-sm-4 control-label">Password confirmation</label>
						<div class="col-sm-8">
							<input class="form-control" type="password" name="mdpbis" id="mdpbis" size="60" />
						</div>
					</div>
					<input class="btn btn-default btn-primary pull-right" type="submit" name="inscrire" id="inscrire" value="Sign up"/>
				</div>
				</form>
				<p>
					<?PHP
					if (isset($_POST['inscrire'] ))
						include_once("form_inscription.php");
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
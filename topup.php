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
		<h1>Important:</h1>Please note that any payment made on our site can not be refunded
		<form action="">
		<br><br><br>
		<center>
		 <fieldset>
		  <legend></legend>
		  <input type="radio" name="amount" value="10"> 10€<br>
		  <input type="radio" name="amount" value="20"> 20€<br>
		  <input type="radio" name="amount" value="50"> 50€<br>
		  <input type"input" name="otherprice" placeholder="100€, 200€..."><br><br>
		  <input id="payment" class="btn btn-default" type="submit" value="Proceed payment" />
		  </fieldset>
		 </center>
		</form>
		</div>
	</div>
	</div>
	<?php
		include_once "scripts.php";
		include_once "footer.php";
	?>
</body>

</html>
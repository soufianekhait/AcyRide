<header>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
					aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php"></a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li>
						<a class="btn-hover" href="about.php">About us</a>
					</li>
					<li>
						<a class="btn-hover" href="help.php">Help</a>
					</li>
				</ul>
				<?php
					if (isset($_SESSION['username'])) 
					{
						echo '<ul class="profile">
							<li>Hey '.
									$_SESSION['username'].', <a href="ride.php">book a ride? <i class="fa fa-car fa-1x" aria-hidden="true"></i></a>
							</li>
							<li>
								<a class="btn-hover" href="logout.php" title="Log out">Log out <i class="fa fa-sign-out fa-1x" aria-hidden="true"></i>
								</a>
							</li>
							</ul>';
					}

					else {
						echo '<ul class="nav navbar-nav navbar-right">
							<li>
								<a class="btn-hover" href="signin.php">Sign in</a>
							</li>
							<li>
								<a class="btn-hover" href="signup.php">Sign up</a>
							</li>
							</ul>';
					}
					?>
				
			</div>
		</div>
	</nav>
	
</header>
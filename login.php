
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<!-- CSS -->
	<link rel="stylesheet" href="css/style.css">
	
	<!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Raleway:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">

    <title></title>
  </head>
  <body>
 	<!-- Start Navbar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="index.php">
			<span class="logo">
				<img class="logo-dim" src="./logo.png" alt="">
			</span>
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarText">
			<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
			</li>
			</ul>
			<span class="navbar-text nav-links">
				<a href="index.php">
					Tools
				</a>
			</span>
			<span class="navbar-text nav-links link-1">
			</span>
		</div>
	</nav>
	<!-- End Navbar -->

	<!-- Start Form -->
	<section class="mb-3 mt-3">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<form action="login-script.php" method="post">
					  <div class="container">
					    <label for="uname"><b>Username</b></label>
					    <input type="text" placeholder="Enter Username" name="uname" required>

					    <label for="psw"><b>Password</b></label>
					    <input type="password" placeholder="Enter Password" name="psw" required>

					    <button type="submit">Login</button>
					    <label>
					      <input type="checkbox" checked="checked" name="remember"> Remember me
					    </label>
					  </div>

					  <div class="container" style="background-color:#f1f1f1">
					    <button type="button" class="cancelbtn">Cancel</button>
					    <span class="psw">Forgot <a href="#">password?</a></span>
					  </div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- End Form -->

	<!-- Start Footer -->
	<section class="footer">
		<div class="container">
			<div class="row">
				<div class="col-12">
				</div>
			</div>
		</div>
	</section>
	<!-- End Footer -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>






<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- Responsive Meta tag viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $title ?> | UPT BAHASA</title>
	<!-- icon -->
	<link rel="shortcut icon" type="image/x-icon" href="../asset/img/favicon.ico">
	<link rel="stylesheet" href="../asset/font/fontawesome/css/all.css">
	<!-- bulma -->
	<link rel="stylesheet" href="../asset/css/bulma.min.css">
	<!-- custom -->
	<link rel="stylesheet" href="../asset/css/design.css">
	<!-- slick css -->
	<link rel="stylesheet" href="../asset/js/slick/slick.css">
	<link rel="stylesheet" href="../asset/js/slick/slick-theme.css">
</head>
<body>
	<!-- WRAP LAYOUT -->
	<div id="upt-wrap">
		<header>
			<!-- NAVIGATION -->
			<nav class="navbar <?= ($title != "Home") ? 'navbar-2 nav-color' : '';?>">
				<div class="container">
					<!-- LOGO NAVBAR -->
					<div class="navbar-brand">
						<a href="index.php" class="navbar-item navbar-logo">
							<img src="../asset/img/itk.png" alt="">
							<span>
								<p>UPT Bahasa</p>
								<p class="has-text-grey">Institut Teknologi Kalimantan</p>
							</span>
						</a>
						<!-- BURGER -->
						<a role="button" class="navbar-burger" data-target="navMenu" aria-label="menu" aria-expanded="false">
					      <span aria-hidden="true"></span>
					      <span aria-hidden="true"></span>
					      <span aria-hidden="true"></span>
					    </a>
					</div>
					<!-- MENU NAVBAR -->
					<div class="navbar-menu" id="navMenu">
						<div class="navbar-end">
							<!-- ITEM NAVBAR -->
						    <a href="index.php" class="navbar-item">Home</a>
						    <a href="aboutus.php" class="navbar-item">About us</a>
						    <div class="navbar-item has-dropdown is-hoverable">
						        <a href="subjects.php" class="navbar-link">Subjects</a>
						        <div class="navbar-dropdown">
						        	<a href="" class="navbar-item">English</a>
						        	<a href="" class="navbar-item">Jerman</a>
						        	<a href="" class="navbar-item">Prancis</a>
						        	<a href="" class="navbar-item">Indonesia</a>
						        	<a href="" class="navbar-item">Brazil</a>
						        </div>
						    </div>
						    <a href="procedure.php" class="navbar-item">Procedure</a>
						    <a href="article.php" class="navbar-item">Article</a>
					    	<div class="navbar-item">
					       		<div class="buttons">
					          		<a href="login.php" class="button is-small is-dark is-outlined">
					            		Log in
					          		</a>
					        		<a href="signup.php" class="button is-small is-primary">
					            		<strong>Sign up</strong>
					          		</a>
					       		</div>
					    	</div>
					    </div>
					</div>
				</div>
			</nav>
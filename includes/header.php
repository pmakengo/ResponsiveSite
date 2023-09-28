<?php ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="og:tittle" content="Realisez un site Responsive avec html css et js"/>
	<meta property="og:type" content="website"/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<title>Responsive site</title>
	<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
</head>
<body>
	<header>
		<div class="headerContainer">
			<div class="logo">
				<a href="index.php">
					<img src="img/logo.png">
					<p>Letecode</p>
				</a>
			</div>
			<input type="checkbox" id="nav_check" hidden>
			<nav>
				<label for="nav_check" class="hamburger">
					<h1>X</h1>
				</label>

				<div class="logoMobile">
					<a href="index.php">
						<img src="img/logo.png"><br>
						<p>Letecode</p>
					</a>
				</div>
				<ul>
					<li><a href="index.php" class="active">Acceuil</a></li>
					<li><a href="pages/communaute.php">Communauté</a></li>
					<li><a href="pages/cours.php">Cours</a></li>
					<li><a href="pages/contact.php">Contacts</a></li>
				</ul>
			</nav>
			<label for="nav_check" class="hamburger">
				<div></div>
				<div></div>
				<div></div>
			</label>
		</div>
	</header>
</body>
<?php ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="og:tittle" content="Contactez-nous"/>
	<meta property="og:type" content="website"/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<title>Responsive site</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
</head>
<body>
	<header>
		<div class="headerContainer">
			<div class="logo">
				<a href="../index.php">
					<img src="../img/logo.png">
					<p>Letecode</p>
				</a>
			</div>
			<input type="checkbox" id="nav_check" hidden>
			<nav>
				<label for="nav_check" class="hamburger">
					<h1>X</h1>
				</label>

				<div class="logoMobile">
					<a href="../index.php">
						<img src="../img/logo.png"><br>
						<p>Letecode</p>
					</a>
				</div>
				<ul>
					<li><a href="../index.php" >Acceuil</a></li>
					<li><a href="communaute.php">Communauté</a></li>
					<li><a href="cours.php" class="active">Cours</a></li>
					<li><a href="contact.php" >Contacts</a></li>
				</ul>
			</nav>
			<label for="nav_check" class="hamburger">
				<div></div>
				<div></div>
				<div></div>
			</label>
		</div>
	</header>

	<section>
		<div class="bodyContainer"><br><br>
            <div class="container">
				<h2>Les cours</h2>
                <br><br>
				<div class="group">
					<div id="lesson">
						<img src="../img/profile.png" alt=""><br>
						<h2>Git et GitHub</h2>
						<p>5 heures</p>
					</div>
					<div id="lesson">
						<img src="../img/profile.png" alt=""><br>
						<h2>Git et GitHub</h2>
						<p>5 heures</p>
					</div>
					<div id="lesson">
						<img src="../img/profile.png" alt=""><br>
						<h2>Git et GitHub</h2>
						<p>5 heures</p>
					</div>
					<div id="lesson">
						<img src="../img/profile.png" alt=""><br>
						<h2>Git et GitHub</h2>
						<p>5 heures</p>
					</div>
					<div id="lesson">
						<img src="../img/profile.png" alt=""><br>
						<h2>Git et GitHub</h2>
						<p>5 heures</p>
					</div>
					<div id="lesson">
						<img src="../img/profile.png" alt=""><br>
						<h2>Git et GitHub</h2>
						<p>5 heures</p>
					</div>
				</div><br><br><br>
			</div>
        </div>
		<div class="section">
			<div class="follow">
				<div id="text">
					<div class="text">
						<h2>Abonnez-vous à la boite aux lèttres</h2><br>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
						Facilis esse ratione architecto dolores debitis, reiciendis cum 
						voluptatem blanditiis, enim maxime labore dolorum, praesentium assumenda?
						 Ut accusantium molestiae consequuntur unde atque!</p>
					</div>
				</div>
				<div class="part" >
					<form action="">
						<input type="text" id="input" placeholder="Adresse email">
						<br><br>
						<input type="button" value="S'abonner" id="boutton">
					</form>
				</div>
			</div>
		</div>
			
		</div>
            <?php include('../includes/footer.php') ?>
		</div>
	</section>

</body>
</html>
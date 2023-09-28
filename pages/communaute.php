<?php ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="og:tittle" content="Letcode community"/>
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
                    <img src="../img/logo.png"><br>
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
					<li><a href="communaute.php" class="active">Communauté</a></li>
					<li><a href="cours.php">Cours</a></li>
					<li><a href="contacts.php">Contacts</a></li>
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
		<div class="bodyContainer"><br>
			<div id="welcome_msg">
				<h1>La plus puissante communauté</h1><br>
				<p>Une grande communauté de developpeurs du monde entier</p> <br><br>
				<a href="contact.php">Nous contacter</a>
			</div>
			<br><br>
			<div id="welcome_det"><br><br>
				<div id="welcome_container">
					<div id="welcome_det_text">
						<h1>Apprendre la programmation</h1><br>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
					</div>
                    <img src="../img/logo.png" width="50%">
				</div><br><br>
			</div>
			<div class="about" >
				<div id="about_text">
					<h1>Les membres</h1> <br><br>
					<div class="membreContainer">
                        <div class="membre">
                            <img src="../img/profile.png" alt=""><br>
                            <h2>Plamedi Makengo</h2>
                        </div>
                        <div class="membre">
                            <img src="../img/profile.png" alt=""><br>
                            <h2>Plamedi Makengo</h2>
                        </div>
                        <div class="membre">
                            <img src="../img/profile.png" alt=""><br>
                            <h2>Plamedi Makengo</h2>
                        </div>
                        <div class="membre">
                            <img src="../img/profile.png" alt=""><br>
                            <h2>Plamedi Makengo</h2>
                        </div>
                        <div class="membre">
                            <img src="../img/profile.png" alt=""><br>
                            <h2>Plamedi Makengo</h2>
                        </div>
                        <div class="membre">
                            <img src="../img/profile.png" alt=""><br>
                            <h2>Plamedi Makengo</h2>
                        </div>
                        <div class="membre">
                            <img src="../img/profile.png" alt=""><br>
                            <h2>Plamedi Makengo</h2>
                        </div>
                        <div class="membre">
                            <img src="../img/profile.png" alt=""><br>
                            <h2>Plamedi Makengo</h2>
                        </div>
                    </div> 	
				</div> <br><br>
			</div>
                <?php include('../includes/footer.php') ?>
		</div>
	</section>

</body>
</html>
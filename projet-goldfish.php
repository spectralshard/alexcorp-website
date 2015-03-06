<!DOCTYPE HTML>
<html>
<head>
	<title>Portfolio d'Alexandre Foisy | Designer Graphique | Portfolio: publicité pour Goldfish</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="Série de trois cartes postales publicitaires pour les craquelins GoldFish." />
	<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.poptrox.min.js"></script>
	<script src="js/skel.min.js"></script>
	<script src="js/init.js"></script>
	<script src="js/alert.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/jquery.smoothscroll.min.js"></script>
	<noscript>
		<link rel="stylesheet" href="css/skel-noscript.css" />
		<link rel="stylesheet" href="css/style.css" />
	</noscript>
	<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
</head>
<body>
	<?
	include "include/header.php";
	?>
	<section id="goldfish_logo" class="main style1 dark fullscreen">
		<a href="#goldfish_texte" class="button style2 down anchored" title="Suivant">Plus</a>
	</section>

	<section id="goldfish_texte" class="main style2 center dark fullscreen">
		<div class="content container small">
			<header>
				<h2>Série de Cartes postales Goldfish</h2>
				<p class="projetinfo"><strong>Client:</strong> Projet personnel<br /><strong>Date:</strong> 18 janvier 2011</p>
				<p>Conception d'une série de trois cartes postales publicitaires pour les produits GoldFish avec un public cible
					différent pour chacune d'entre elles, soit l'étudiant, un couple et la famille.</p>
			</header>
		</div>
		<a href="#goldfish_preview" class="button style2 down anchored" title="Suivant">Suivant</a>
	</section>

	<section id="goldfish_preview" class="main style2 center dark fullscreen">
		<a href="#work" class="button style2 down anchored" title="Suivant">Suivant</a>
	</section>

	<section id="work" class="main style3 primary">
		<div class="content container">
			<header>
				<h3>Photos du projet</h3>
			</header>
			<div class="container small gallery">
				<div class="row flush images">
					<div class="6u"><a href="images/fulls/projets-goldfish-serie-etudiant-full.jpg" class="image full l thumb">
						<img src="images/thumbs/projet-goldfish-serie01-thumbs.jpg" title="Carte postale ayant comme public cible l'étudiant." alt="Carte postale ayant comme public cible l'étudiant." /></a>
						</div>
					<div class="6u"><a href="images/fulls/projets-goldfish-serie-famille-full.jpg" class="image full r thumb">
						<img src="images/thumbs/projet-goldfish-serie02-thumbs.jpg" title="Carte postale ayant comme public cible le couple." alt="Carte postale ayant comme public cible le couple." /></a>
						</div>
				</div>
				<div class="row flush images">
					<div class="6u"><a href="images/fulls/projets-goldfish-serie-couple-full.jpg" class="image full l thumb">
						<img src="images/thumbs/projet-goldfish-serie03-thumbs.jpg" title="Carte postale ayant comme public cible la famille." alt="Carte postale ayant comme public cible la famille." /></a>
						</div>

				</div>

			</div>



		</div>
	</section>
	<!-- Contact -->
	<?
	include "include/contact.php";
	?>
	<!-- Footer -->
	<?
	include "include/footer.php";
	?>
	<a id="right" href="projet-post-moderne.php" title="Projet suivant" style="position: fixed; z-index: 10;"><strong>></strong></a>
	<a id="left" href="projet-punch.php" title="Projet précédant" style="position: fixed; z-index: 10;"><strong><</strong></a>
	<a id="scrollUp" href="#top" title="Retour vers le haut" style="position: fixed; z-index: 10;">Top</a>
</body>
</html>

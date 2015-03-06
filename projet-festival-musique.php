<!DOCTYPE HTML>
<html>
<head>
	<title>Portfolio d'Alexandre Foisy | Designer Graphique | Portfolio: Affiche Festival de musique Eclipse</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="Affiche publicitaire pour le Festival de musique Eclipse." />
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
	<section id="eclipse_intro" class="main style1 dark fullscreen">
		<a href="#eclipse_texte" class="button style2 down anchored" title="Suivant">Plus</a>
	</section>

	<section id="eclipse_texte" class="main style2 center dark fullscreen">
		<div class="content container small">
			<header>
				<h2>Festival de musique Eclipse</h2>
				<p class="projetinfo"><strong>Client:</strong> Projet personnel<br /><strong>Date:</strong> 7 juin 2012</p>
				<p>Élaboration et conception d’une affiche publicitaire pour la promotion d'un festival de musique électronique extérieur,
					ÉCLIPSE. Illustration faite sur Illustrator et retouchée sous Photoshop.</p>
			</header>
		</div>
		<a href="#eclipse_preview" class="button style2 down anchored" title="Suivant">Suivant</a>
	</section>

	<section id="eclipse_preview" class="main style2 center dark fullscreen">
		<a href="#work" class="button style2 down anchored" title="Suivant">Suivant</a>
	</section>

	<section id="work" class="main style3 primary">
		<div class="content container">
			<header>
				<h3>Photos du projet</h3>
			</header>
			<div class="container small gallery">
				<div class="row flush images">
					<div class="6u"><a href="images/fulls/projets-festival-eclipse-affiche-full.jpg" class="image full l thumb">
						<img src="images/thumbs/projets-festival-eclipse-affiche-thumb.jpg" title="Affiche pour le festival de musique Eclipse." alt="Affiche pour le festival de musique Eclipse." /></a>
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
	<a id="right" href="projet-brun-fluo.php" title="Projet suivant" style="position: fixed; z-index: 10;"><strong>></strong></a>
	<a id="left" href="projet-agenda-cmv.php" title="Projet précédant" style="position: fixed; z-index: 10;"><strong><</strong></a>
	<a id="scrollUp" href="#top" title="Retour vers le haut" style="position: fixed; z-index: 10;">Top</a>
</body>
</html>

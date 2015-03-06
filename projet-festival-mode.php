<!DOCTYPE HTML>
<html>
<head>
	<title>Portfolio d'Alexandre Foisy | Designer Graphique | Portfolio: publicité pour Festival de Mode et Design</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="Campagne publicitaire pour le festival Mode et design." />
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
	<section id="mode_logo" class="main style1 dark fullscreen">
		<a href="#mode_texte" class="button style2 down anchored" title="Suivant">Plus</a>
	</section>

	<section id="mode_texte" class="main style2 center dark fullscreen">
		<div class="content container small">
			<header>
				<h2>Festival Mode et Design</h2>
				<p class="projetinfo"><strong>Client:</strong> Projet personnel<br /><strong>Date:</strong> 27 septembre 2012</p>
				<p>Élaboration d'une campagne publicitaire dans le but de faire promotion du festival Mode et Design de Montréal.</p>
			</header>
		</div>
		<a href="#mode_preview" class="button style2 down anchored" title="Suivant">Suivant</a>
	</section>

	<section id="mode_preview" class="main style2 center dark fullscreen">
		<a href="#work" class="button style2 down anchored" title="Suivant">Suivant</a>
	</section>

	<section id="work" class="main style3 primary">
		<div class="content container">
			<header>
				<h3>Photos du projet</h3>
			</header>
			<div class="container small gallery">
				<div class="row flush images">
					<div class="6u"><a href="images/fulls/projet-festival-mode-affiche-full.jpg" class="image full l thumb">
						<img src="images/thumbs/projet-festival-mode-affiche-thumb.jpg" title="Affiche publicitaire de l'événement." alt="Affiche publicitaire de l'événement." /></a>
						</div>
					<div class="6u"><a href="images/fulls/projet-festival-mode-affiche-rue-full.jpg" class="image full r thumb">
						<img src="images/thumbs/projet-festival-mode-affiche-rue-thumb.jpg" title="Déclinaison de l'affiche sur un panneau publicitaire à trois colonnes." alt="Déclinaison de l'affiche sur un panneau publicitaire à trois colonnes." /></a>
						</div>
				</div>
				<div class="row flush images">
					<div class="6u"><a href="images/fulls/projet-festival-mode-chandail-evenement-full.jpg" class="image full l thumb">
						<img src="images/thumbs/projet-festival-mode-chandail-evenement-thumb.jpg" title="Chandail officiel du festival mode et design." alt="Chandail officiel du festival mode et design." /></a>
						</div>
					<div class="6u"><a href="images/fulls/projet-festival-mode-banniere-facebook-full.jpg" class="image full r thumb">
						<img src="images/thumbs/projet-festival-mode-banniere-facebook-thumb.jpg" title="Déclinaison pour le Web; bannière pour la page Facebook." alt="Déclinaison pour le Web; bannière pour la page Facebook." /></a>
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
	<a id="right" href="projet-boreale.php" title="Projet suivant" style="position: fixed; z-index: 10;"><strong>></strong></a>
	<a id="left" href="projet-dubo.php" title="Projet précédant" style="position: fixed; z-index: 10;"><strong><</strong></a>
	<a id="scrollUp" href="#top" title="Retour vers le haut" style="position: fixed; z-index: 10;">Top</a>
</body>
</html>

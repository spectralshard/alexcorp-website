<!DOCTYPE HTML>
<html>
<head>
	<title>Portfolio d'Alexandre Foisy | Designer Graphique | Portfolio: publicité pour bières Boréale</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="Campagne publicitaire fictive pour la bière Boréale." />
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
	<section id="boreale_logo" class="main style1 dark fullscreen">
		<a href="#boreale_texte" class="button style2 down anchored" title="Suivant">Plus</a>
	</section>

	<section id="boreale_texte" class="main style2 center dark fullscreen">
		<div class="content container small">
			<header>
				<h2>Campagne Boréale</h2>
				<p class="projetinfo"><strong>Client:</strong> Projet personnel en équipe<br /><strong>Date:</strong> 29 août 2012</p>
				<p>Élaboration d'une campagne publicitaire dont l'axe de communication est que la bière Boréale est mystérieuse.
					Projet réalisé en collaboration avec Amélie Cauchon-Simard pour la bière Boréale.</p>
			</header>
		</div>
		<a href="#boreale_preview" class="button style2 down anchored" title="Suivant">Suivant</a>
	</section>

	<section id="boreale_preview" class="main style2 center dark fullscreen">
		<a href="#work" class="button style2 down anchored" title="Suivant">Suivant</a>
	</section>

	<section id="work" class="main style3 primary">
		<div class="content container">
			<header>
				<h3>Photos du projet</h3>
			</header>
			<div class="container small gallery">
				<div class="row flush images">
					<div class="6u"><a href="images/fulls/projets-boreale-ad-affiche-full.jpg" class="image full l thumb">
						<img src="images/thumbs/projet-boreale-affiche-thumb.jpg" title="Affiche publicitaire." alt="Affiche publicitaire" /></a>
						</div>
					<div class="6u"><a href="images/fulls/projets-boreale-ad-luminoscope-full.jpg" class="image full r thumb">
						<img src="images/thumbs/projet-boreale-luminoscope-thumb.jpg" title="Déclinaison dans un luminoscope." alt="Déclinaison dans un luminoscope." /></a>
						</div>
				</div>
				<div class="row flush images">
					<div class="6u"><a href="images/fulls/projets-boreale-ad-magazine-full.jpg" class="image full l thumb">
						<img src="images/thumbs/projet-boreale-annonce-magazine-thumb.jpg" title="Déclinaison dans une revue." alt="Déclinaison dans une revue." /></a>
						</div>
					<div class="6u"><a href="images/fulls/boreale04.gif" class="image full r thumb">
						<img src="images/thumbs/projet-boreale-bandeau-web-thumb.jpg" title="Déclinaison pour le Web; Bandeau animé." alt="Déclinaison pour le Web; Bandeau animé." /></a>
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
	<a id="right" href="projet-cyclovic.php" title="Projet suivant" style="position: fixed; z-index: 10;"><strong>></strong></a>
	<a id="left" href="projet-festival-mode.php" title="Projet précédant" style="position: fixed; z-index: 10;"><strong><</strong></a>
	<a id="scrollUp" href="#top" title="Retour vers le haut" style="position: fixed; z-index: 10;">Top</a>
</body>
</html>

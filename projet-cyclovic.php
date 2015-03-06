<!DOCTYPE HTML>
<html>
<head>
	<title>Portfolio d'Alexandre Foisy | Designer Graphique | Portfolio: Cyclovic</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="Conception d'un identité visuelle pour un projet étudiant, Cyclovic au CÉGEP Marie-Victorin, qui vise a offrire un service de vélos libre-services." />
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
	<section id="cyclovic_logo" class="main style1 dark fullscreen">
		<a href="#cyclovic_texte" class="button style2 down anchored" title="Suivant">Plus</a>
	</section>

	<section id="cyclovic_texte" class="main style2 center dark fullscreen">
		<div class="content container small">
			<header>
				<h2>Cyclovic</h2>
				<p class="projetinfo"><strong>Cliente:</strong> René Lemieux (CÉGEP Marie-Victorin)<br /><strong>Date:</strong> 27 septembre 2012</p>
				<p>Le projet Cyclovic identifie les besoins et accompagne <strong>les cyclistes</strong>
					du Cégep Marie-Victorin pour l’entretien et la réparation de leur vélo. En outre, il permet à <strong>la communauté du Cégep</strong>
					d'utiliser des vélos présents sur le campus.</p><p>En collaboration avec Élianne Lebeau, professeur en graphisme, et la cliente,
						René Lemieux, nous avons élaboré une identité visuelle qui représente le projet Cyclovic grâce à la couleur bleue qui évoque l'air et la santé,
						mais aussi avec sa typographie qui représente le secteur d'activité du projet.</p>
			</header>
		</div>
		<a href="#cyclovic_pancarte_p1" class="button style2 down anchored" title="Suivant">Suivant</a>
	</section>

	<section id="cyclovic_pancarte_p1" class="main style2 center dark fullscreen">
		<a href="#work" class="button style2 down anchored" title="Suivant">Suivant</a>
	</section>

	<section id="work" class="main style3 primary">
		<div class="content container">
			<header>
				<h3>Photos du projet</h3>
			</header>
			<div class="container small gallery">
				<div class="row flush images">
					<div class="6u"><a href="images/fulls/projets-cyclovic-affiche-full.jpg" class="image full l thumb">
						<img src="images/thumbs/projet-cyclovic-affiche-thumb.jpg" title="Affiche et pictogrammes de Cyclovic." alt="Affiche et pictogrammes de Cyclovic." /></a>
						</div>
					<div class="6u"><a href="images/fulls/projets-cyclovic-panier-full.jpg" class="image full r thumb">
						<img src="images/thumbs/projet-cyclovic-paniervelo-thumb.jpg" title="Identification des paniers de vélo. (1 à 5 unités)" alt="Identification des paniers de vélo. (1 à 5 unités)" /></a>
						</div>
				</div>
				<div class="row flush images">
					<div class="6u"><a href="images/fulls/projets-cyclovic-banniere-facebook-full.jpg" class="image full l thumb">
						<img src="images/thumbs/projet-banniere-facebook-thumb.jpg" title="Bannière et page Facebook officiel du projet." alt="Bannière et page Facebook officiel du projet." /></a>
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
	<a id="right" href="projet-punch.php" title="Projet suivant" style="position: fixed; z-index: 10;"><strong>></strong></a>
	<a id="left" href="projet-boreale.php" title="Projet précédant" style="position: fixed; z-index: 10;"><strong><</strong></a>
	<a id="scrollUp" href="#top" title="Retour vers le haut" style="position: fixed; z-index: 10;">Top</a>
</body>
</html>

<!DOCTYPE HTML>
<html>
<head>
	<title>Portfolio d'Alexandre Foisy | Designer Graphique | Portfolio: Punch design et communication</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="Identité visuelle pour une agence de design fictive, Punch." />
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
	<section id="punch_logo" class="main style1 dark fullscreen">
		<a href="#punch_texte" class="button style2 down anchored" title="Suivant">Plus</a>
	</section>

	<section id="punch_texte" class="main style2 center dark fullscreen">
		<div class="content container small">
			<header>
				<h2>Punch design et communications</h2>
				<p class="projetinfo"><strong>Client:</strong> Projet personnel<br /><strong>Date:</strong> 14 décembre 2011</p>
				<p>Élaboration et production d'un logo et de son cahier de normes pour une nouvelle entreprise jeune et dynamique, Punch design et communications, qui œuvre dans le domaine du graphisme.</p>
			</header>
		</div>
		<a href="#punch_preview" class="button style2 down anchored" title="Suivant">Suivant</a>
	</section>

	<section id="punch_preview" class="main style2 center dark fullscreen">
		<a href="#work" class="button style2 down anchored" title="Suivant">Suivant</a>
	</section>

	<section id="work" class="main style3 primary">
		<div class="content container">
			<header>
				<h3>Photos du projet</h3>
			</header>
			<div class="container small gallery">
				<div class="row flush images">
					<div class="6u"><a href="images/fulls/projets-punch-cahier-version-full.jpg" class="image full l thumb">
						<img src="images/thumbs/projet-punch-cahier-version-thumb.jpg" title="Page des versions du logo dans le cahier de norme." alt="Page des versions du logo dans le cahier de norme." /></a>
						</div>
					<div class="6u"><a href="images/fulls/projets-punch-cahier-couleurs-full.jpg" class="image full r thumb">
						<img src="images/thumbs/projet-punch-cahier-couleurs-thumb.jpg" title="Les différentes couleurs Pantone avec teinte illustrée avec la forme du logo." alt="Les différentes couleurs Pantone avec teinte illustrée avec la forme du logo." /></a>
						</div>
				</div>
				<div class="row flush images">
					<div class="6u"><a href="images/fulls/projets-punch-cahier-polices-full.jpg" class="image full l thumb">
						<img src="images/thumbs/projet-punch-cahier-polices-thumb.jpg" title="Disposition dynamique de la police de caractère de l'identité visuelle." alt="Disposition dynamique de la police de caractère de l'identité visuelle." /></a>
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
	<a id="right" href="projet-goldfish.php" title="Projet suivant" style="position: fixed; z-index: 10;"><strong>></strong></a>
	<a id="left" href="projet-cyclovic.php" title="Projet précédant" style="position: fixed; z-index: 10;"><strong><</strong></a>
	<a id="scrollUp" href="#top" title="Retour vers le haut" style="position: fixed; z-index: 10;">Top</a>
</body>
</html>

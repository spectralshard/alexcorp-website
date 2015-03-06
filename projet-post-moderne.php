<!DOCTYPE HTML>
<html>
<head>
	<title>Portfolio d'Alexandre Foisy | Designer Graphique | Portfolio: Publicité pour Post-Moderne</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="Création d'une page publicitaire pour Post-Moderne." />
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
	<section id="pm_intro" class="main style1 dark fullscreen">
		<a href="#pm_texte" class="button style2 down anchored" title="Suivant">Plus</a>
	</section>

	<section id="pm_texte" class="main style2 center dark fullscreen">
		<div class="content container small">
			<header>
				<h2>Publicité Post-Moderne</h2>
				<p class="projetinfo"><strong>Client:</strong> Post-Moderne<br />
					<strong>Date:</strong> Juin 2013</p>
					<p>
						Conception en collaboration avec <strong>Post-Moderne</strong>, une maison de postproduction de Montréal, de la nouvelle signature publicitaire
						pour le <strong>festival Fantasia 2013</strong> qui a été publié dans le catalogue de l'événement.
					</p>
				</header>
			</div>
			<a href="#pm_preview" class="button style2 down anchored" title="Suivant">Suivant</a>
		</section>

		<section id="pm_preview" class="main style2 center dark fullscreen">
			<a href="#work" class="button style2 down anchored" title="Suivant">Suivant</a>
		</section>

		<section id="work" class="main style3 primary">
			<div class="content container">
				<header>
					<h3>Photos du projet</h3>
				</header>
				<div class="container small gallery">
					<div class="row flush images">
						<div class="6u"><a href="images/fulls/projet-post-moderne-publicite-full.jpg" class="image full l thumb">
							<img src="images/thumbs/projet-post-moderne-publicite-thumb.jpg" title="«Affiche» publicitaire du projet.(utilisé lors de l'annonce sur Facebook)" alt="«Affiche» publicitaire du projet.(utilisé lors de l'annonce sur Facebook)" /></a>
							</div>
						<div class="6u"><a href="images/fulls/projet-post-moderne-brochure-full.jpg" class="image full r thumb">
							<img src="images/thumbs/projet-post-moderne-brochure-thumb.jpg" title="Publicité dans la brochure officielle du festival de film Fantasia 2013." alt="Publicité dans la brochure officielle du festival de film Fantasia 2013." /></a>
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
		<a id="right" href="projet-telecom-sans-limite.php" title="Projet suivant" style="position: fixed; z-index: 10;"><strong>></strong></a>
		<a id="left" href="projet-goldfish.php" title="Projet précédant" style="position: fixed; z-index: 10;"><strong><</strong></a>
		<a id="scrollUp" href="#top" title="Retour vers le haut" style="position: fixed; z-index: 10;">Top</a>
	</body>
	</html>

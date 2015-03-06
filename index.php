<!DOCTYPE HTML>
<html>
<head>
	<title>Portfolio d'Alexandre Foisy | Designer Graphique</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Alexandre Foisy">
	<meta name="description" content="Portfolio Web du designer graphique Alexandre Foisy.">
	<meta bane="keywords" content="Portfolio, graphisme, Alexandre Foisy, illustration, Design Web, site Web, édition, publicité, logo">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png">
	<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.poptrox.min.js"></script>
	<script src="js/skel.min.js"></script>
	<script src="js/init.js"></script>
	<script src="js/custom.js"></script>
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
	<section id="intro" class="main style1 dark fullscreen">
		<div class="content container small">
			<header><h2>Bonjour!</h2></header>
			<p>Je m'appelle <strong>Alexandre Foisy</strong> et je suis designer graphique.<br />
				Pour en savoir un peu plus sur moi et mes créations, suivez cette flèche.</p>
				<footer>
					<a href="#a_propos" class="button style2 down" title="Dérouler vers le bas">Suivant</a>
				</footer>
			</div>
		</section>
		<section id="a_propos" class="main style2 right dark fullscreen">
			<div class="content box style2">
				<header><h2>À propos de moi</h2></header>
				<p>Diplômé en design graphique au collège Marie-Victorin en 2012, j'exerce ce métier avec passion et dynamisme.</p>
				<p>On dit de moi que je suis quelqu'un de fiable et ponctuel constament positif.</p>
				<p>J'adore dépasser mes limites et avoir de nouveaux défis.</p>
			</div>
			<a href="#competences" class="button style2 down anchored" title="Dérouler vers le bas">Suivant</a>
		</section>
		<section id="competences" class="main style2 left dark fullscreen">
			<div class="content box style2">
				<header><h2>Je carbure à la caféine, <br />voici mes compétences</h2></header>
				<?
				include "include/tablecompetences.php";
				?>
			</div>
			<a href="#quote" class="button style2 down anchored" alt="Dérouler vers le bas">Suivant</a>
		</section>
		<section id="quote" class="main style2 center dark fullscreen">
			<div class="content container small">
				<header>
					<h3>Le design n’est pas comme il semble ou comme il apparaît.
						<span style="color:#FA8D29;">Le design est comment il fonctionne.</span></h3>
						<i>-Steve Jobs</i>
					</header>
				</div>
				<a href="#work" class="button style2 down anchored" title="Dérouler vers le bas">Suivant</a>
			</section>
			<section id="work" class="main style3 primary">
				<div class="content container">
					<header><h2>Portfolio</h2></header>

					<div class="container small">
						<div class="row flush images">
							<div class="6u">
								<a href="projet-post-moderne.php" class="image full l thumb" title="Page publicitaire pour Post-Moderne.">
									<img src="images/thumbs/projet-post-moderne-fantasia.jpg" alt="Page publicitaire pour Post-Moderne." /></a>
								</div>
								<div class="6u">
									<a href="projet-telecom-sans-limite.php" class="image full r thumb">
										<img src="images/thumbs/projet-telecom-sans-limite.jpg" title="Identité de Télécom sans limite." alt="Conception d'une identité visuelle, d'un site Web adaptatif et de publicité pour une jeune entreprise de télécommunication." /></a>
									</div>
								</div>
								<div class="row flush images">
									<div class="6u">
										<a href="projet-dejouer.php" class="image full l thumb">
											<img src="images/thumbs/projet-dejouer-programme-visibilite.jpg" title="Guide de commandite pour Déjouer les allergies." alt="Guide de commandite pour Déjouer les allergies." /></a>
										</div>
										<div class="6u">
											<a href="projet-agenda-cmv.php" class="image full r thumb">
												<img src="images/thumbs/projet-agenda-cmv.jpg" title="Illustration pour une couverture d'un agenda collégial." alt="Illustration pour une couverture d'un agenda collégial (concours)." /></a>
											</div>
										</div>
										<div class="row flush images">
											<div class="6u">
												<a href="projet-festival-musique.php" class="image full l thumb">
													<img src="images/thumbs/projet-festival-musique.jpg" title="Affiche pour festival musique Éclipse." alt="Affiche illustrative pour festival musique en plein air, Éclipse." /></a>
												</div>
												<div class="6u">
													<a href="projet-brun-fluo.php" class="image full r thumb">
														<img src="images/thumbs/projet-brun-fluo.jpg" title="Livre expérimental sur les mots Brun et Fluo" alt="Projet d'édition, un livre expérimental sur les mots Brun et Fluo." /></a>
													</div>
												</div>
												<div class="row flush images">
													<div class="6u"><a href="projet-dubo.php" class="image full l thumb">
														<img src="images/thumbs/projet-dubo.jpg" title="Identité visuelle pour une entreprise oeuvrant dans le domaine de l'électricité." alt="Identité visuelle pour une entreprise oeuvrant dans le domaine de l'électricité." /></a>
													</div>
													<div class="6u"><a href="projet-festival-mode.php" class="image full r thumb">
														<img src="images/thumbs/projet-festival-mode.jpg" title="Affiche pour le festival de Mode et design de Montréal." alt="Affiche pour le festival de Mode et design de Montréal." /></a>
													</div>
												</div>
												<div class="row flush images">
													<div class="6u"><a href="projet-boreale.php" class="image full l thumb">
														<img src="images/thumbs/projet-boreal.jpg" title="Campagne publicitaire pour la bière Boréale." alt="Campagne publicitaire pour la bière Boréale." /></a>
													</div>
													<div class="6u"><a href="projet-cyclovic.php" class="image full r thumb">
														<img src="images/thumbs/projet-cyclovic.jpg" title="Identité visuelle pour Cyclovic." alt="Création d'un branding pour Cyclovic, projet étudiant offrant des vélos libre-service." /></a>
													</div>
												</div>
												<div class="row flush images">
													<div class="6u"><a href="projet-punch.php" class="image full l thumb">
														<img src="images/thumbs/projet-punch-design.jpg" title="Logo pour une agence fictive de design." alt="Création d'un logo pour une agence de design et communications fictive." /></a>
													</div>
													<div class="6u"><a href="projet-goldfish.php" class="image full r thumb">
														<img src="images/thumbs/projet-goldfish.jpg" title="Cartes postales Goldfish" alt="Cartes postales pour les produits Goldfish." /></a>
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
									<a id="scrollUp" href="#top" title="Retour vers le haut de la page">Top</a>
								</body>
								</html>

<?php
require_once 'menu.php';
$menuHandler = new menu();

session_start();

if (isset($_SESSION['felhasznalonev'])) {
    $felhasznalonev = $_SESSION['felhasznalonev'];
	$rang = $_SESSION['rang'];
    $felhasznaloi_adatok = "Felhasználó: $felhasznalonev [$rang]";
} else {
    $felhasznaloi_adatok = "Látogató";
}
?>

<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Feltalálók és találmányaik</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="index.html" class="logo"><strong>Feltalálók könyvtára</strong></a>
								</header>

							<!-- Banner -->
								<section id="banner">
									<div class="content">
										<header>
											<h1>Feltalálók és találmányaik</h1>
											<p>Könyvtárunkban mindent megtalál a témában.</p>
										</header>
										<p>Kik a feltalálók? Feltaláló az a természetes személy, aki egy találmányt megalkotott.</p>
									</div>
									<span class="image object">
										<img src="https://kaposvarmost.hu/files/2/6/2690424aa13dbdf8f39b3b59650c56af.jpg" alt="" />
									</span>
								</section>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Feltaláló vagy találmány keresése</h2>
									</header>
									<div class="features">
										<article>
											<span class="icon fa-gem"></span>
											<div class="content">
												<h3>SOAP</h3>
												<p>Megtekintheti a klienst, vagy a szervert is SOAP alapon.</p>
											</div>
										</article>
										<article>
											<span class="icon solid fa-paper-plane"></span>
											<div class="content">
												<h3>REST</h3>
												<p>Megtekintheti a klienst, vagy a szervert is REST alapon.</p>
											</div>
										</article>
										<article>
											<span class="icon solid fa-rocket"></span>
											<div class="content">
												<h3>PDF</h3>
												<p>Készíthet PDF fájlt az adatbázisunkból.</p>
											</div>
										</article>
										<article>
											<span class="icon solid fa-signal"></span>
											<div class="content">
												<h3>Valutaárfolyam (MNB)</h3>
												<p>Bár ez nem kapcsolódik közvetlen a témához, de fontosnak tartjuk a valutaárfolyamokat.</p>
											</div>
										</article>
									</div>
								</section>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Feltalálói tevékenység</h2>
									</header>
									<div >
										<p>Csak az tekinthető feltalálónak vagy feltalálótársnak, aki a találmány létrehozása során alkotó tevékenységet fejtett ki.
											A feltalálói tevékenységhez tartozik a találmányi megoldás lényegét kitevő alapgondolat felismerésén és megfogalmazásán túl a megoldás kidolgozása is.
										</p>
										<img src="https://karpatalja.ma/wp-content/uploads/2017/06/131934.jpg" alt="Neumann János" style="max-width: 100%; height: auto;">
										<span><br>Neumann János - híres magyar feltaláló</span>
									</div>
								</section>
								<section>
									<header class="major">
										<h2>Találmány</h2>
									</header>
									<div >
										<p>A találmány a kreatív tevékenység olyan eredménye, a tudomány és technika területére eső olyan megoldás, amely jelentősen gazdagítja a tudomány és a technika adott szintjét és a gyakorlatban alkalmazható. (A találmány abban különbözik a felfedezéstől, hogy az utóbbi természeti törvényeket tár fel, és a gyakorlatban közvetlenül nem alkalmazható.) A találmány az ötlet kidolgozott formája.
										</p>
										<img src="https://lh4.googleusercontent.com/proxy/Pko2uVWSjUZscamu7nFr1z_N2iREgebG-Sjvnqb5TFFpE9CgzeUVvG4dzRKYdAC6LEXrqRmhmHXxaXRJ8xcozoyROKDR6FBaGl5-JIae4g2r5uV7ESSHWv67JoKRT6wZ2-z7GsqniM4W718ItoSuUBhBRqsNGh1v8dx9-G2GYRneBI-Yvczv2MZxCQruX_bTXFn953E9" alt="Neumann János" style="max-width: 100%; height: auto;">
										<span><br>Bláthy, Déri, Zipernowszky</span>
									</div>
								</section>

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<section id="search" class="alt">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Search" />
									</form>
								</section>
								<section id="felhasznalo" class="alt">
									<p><b><?php echo $felhasznaloi_adatok; ?></b></p>
								</section>
							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<?php echo $menuHandler->buildMenu(); ?>
								</nav>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Feltalálók</h2>
									</header>
									<div class="mini-posts">
										<article>
											<a href="#" class="image"><img src="https://lh4.googleusercontent.com/proxy/1fPIYoMzMtPjlFJiFEzpoOKDkY9TLc1atN3sXQkccSC6RzKFHiNjkXqZ-5kfs1VVSAhdgICQhHxdW4NCezULijhN1pc5sZKhGryjlEkZAS4daUxjdUrCQADw-M4wSqNZcdzSGUVZqiCUISovMY5rbcK5rSvGr7v2lbWC_g" alt="" /></a>
											<p>Bródy Imre (Gyula, 1891. december 23. – Mühldorf, 1944. november 25.) zsidó származású magyar fizikus, kémikus, feltaláló, a modern kriptongázas villanylámpa kifejlesztője.</p>
										</article>
										<article>
											<a href="#" class="image"><img src="https://cultura.hu/wp-content/uploads/2019/10/Banki-Donat-feltaltalo-1890.jpg" alt="" /></a>
											<p>Bánki Donát (eredeti neve Lőwinger Donát) (Bakonybánk, 1859. június 6. – Budapest, 1922. augusztus 1.) magyar gépészmérnök, feltaláló és műegyetemi tanár. Korának egyik legnagyobb gépészmérnöke, a hidrogépek, kompresszorok és gőzturbinák szerkezettanának professzora.</p>
										</article>
										<article>
											<a href="#" class="image"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRAqE437tjdK0MMuU42mW6siXRK3oY3o9h4sQ&s" alt="" /></a>
											<p>Ganz Ábrahám (Unter-Embrach, Svájc, 1814. november 6. vagy február 6. – Pest, 1867. december 15.) svájci származású vasöntőmester, gyáros, a magyar nehézipar egyik megteremtője, aranykoronás érdemkereszt tulajdonosa, Buda városának tiszteletbeli polgára.</p>
										</article>
									</div>
								</section>

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
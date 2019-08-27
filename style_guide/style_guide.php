<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Servis Buhin - Style Guide</title>
	<meta name="og:locale" content="hr_HR" />
	<meta name="og:type" content="website" />
	<meta name="og:title" content="Servis Buhin - servisiranje i popravak plinskih trošila" />
	<meta name="og:description" content="Servis Buhin bavi se servisiranjem i montažom plinskih trošila. Ovlašteni servisni partner za proizvodni program Vaillant i Junker Bosch." />
	<!-- ADD WEBSITE URL HERE: <meta name="og:url" content="" />-->
	<meta name="og:site_name" content="Servis Buhin" />
  <meta name="article:tag" content="Servis Buhin, Osijek, plin, bojler, Vaillant, Bosch, popravak bojlera" />
  <meta property="og:image" content="../img/share_img.jpg" />

	<link rel="shortcut icon" type="image/png" href="../img/favicon.png" />
	<link rel="stylesheet" href="../css/scss/main.css">
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin=""/>
</head>

<body>
	<nav class="nav nav--desktop nav--style-guide">
		<a href="#" class="nav__logo">Style Guide</a>

		<ul class="nav__link--wrap">
			<li><a href="ponuda.php" class="nav__link">Početna</a></li>
			<li><a href="about.php" class="nav__link">Elementi <img src="../img/icons/accordion_arrow.svg" /></a></li>
		</ul>
	</nav>

	<main class="main main--style-guide grid grid--12">
		<!-- About -->
		<section class="section--style-guide">
			<h2 class="section__title">O projektu</h2>
			<div class="section__desc--wrap">
				<p class="section__desc">Mrežna aplikacija „Servis Buhin“ nastala je kao rezultat projektnog rada na diplomskom studiju Informacijske tehnologije na Odsjeku za informacijske znanosti u Osijeku. Studentice koje su uključene u projekt su Marija Buhin (studentica Nakladništva i informacijske tehnologije), Ivona Grgić (studentica Informatologije i informacijske tehnologije) i Željana Hrkač (studentica Nakladništva i informacijske tehnologije). Studentice su projekt realizirale kroz izradu mrežne stranice, web dizajna, popratne dokumentacije, korisničke dokumentacije, kreiranje sadržaja te naposljetku testiranja aplikacije za mrežno okruženje.</p>
				<p class="section__desc">Tehnologije i jezici korišteni tijekom izrade mrežne aplikacije su HTML, CSS, SASS, JS, jQuery, jQuery plugin, PHP, Owl Carousel 2, Open Street Maps i Leaflet. Za izradu dizajna koristio se alat za dizajn sučelja Figma, a za izradu ikona koristio se vektorski grafički program Adobe Illustrator. Za komunikaciju i verzioniranje koda koristio se GitHub Repozitorij. Za nazive klasa koristila se BEM (Block Element Modifier) metodologija.</p>
			</div>
		</section>

		<!-- Colors -->
		<section class="section--style-guide">
			<h3 class="section__title">Boje</h3><code>(css/scss/abstracts/variables.scss)</code>
			<div class="section__desc--wrap">
				<div class="color--wrap"><span>Primarna boja</span><div class="color color--primary"></div><span>#2a8c57</span></div>
				<div class="color--wrap"><span>Bijela</span><div class="color color--white"></div><span>#ffffff</span></div>
				<div class="color--wrap"><span>Svjetlosiva</span><div class="color color--gray-light"></div><span>#d8d8d8</span></div>
				<div class="color--wrap"><span>Siva</span><div class="color color--gray"></div><span>#a1a1a1</span></div>
				<div class="color--wrap"><span>Tamnosiva</span><div class="color color--gray-dark"></div><span>#515151</span></div>
				<div class="color--wrap"><span>Crna</span><div class="color color--black"></div><span>#1a1a1a</span></div>
			</div>
		</section>

		<!-- Typography -->
		<section class="section--style-guide">
			<h3 class="section__title">Tipografija</h3><code>(css/scss/abstracts/variables.scss, css/scss/base/typography.scss)</code>
			<div class="section__desc--wrap">
				<p class="section__desc">Tipografija koja se koristila preuzeta je s <a href="https://fonts.google.com/">Google Fonts-a</a> koji ima mogućnost besplatnog korištenja fontova u bilo kojem komercijalnom ili nekomercijalnom projektu.</p>
				<p class="section__desc"><h6>Korištena tipografija</h6></p> 
				<p>Osnovna tipografija: 'Mukta Malar', sans-serif;</p>
				<p>Naslovi: 'Palanquin Dark', sans-serif;</p>
				<p>Logo: 'Gudea', sans-serif;</p>
				<div class="section__desc">
					<h1>H1</h1>
					<h2>H2</h2>
					<h3>H3</h3>
					<h4>H4</h4>
					<h5>H5</h5>
					<h6>H6</h6>
					<p>Ovo je paragraf</p>
					<q class="quote--style-guide">Ovo je citat</q>
					<a href="link">Ovo je poveznica</a>
				</div>
			</div>
		</section>

		<!-- Logo -->
		<section class="section--style-guide">
			<h3 class="section__title">Logo</h3><code>(css/scss/layout/nav.scss)</code>
			<div class="section__desc--wrap">
				<p class="section__desc">Nam sit amet magna neque. Quisque consectetur magna nibh, ut maximus enim malesuada at. Praesent fringilla lacinia elit, vel maximus purus pellentesque dapibus. Phasellus et nibh mattis, varius velit eu, tincidunt ex. Sed sit amet aliquet arcu. Ut a nisi tristique, cursus sem at, ultrices odio. Etiam blandit lacus sem, eu consequat justo facilisis a. Vestibulum vel lacus urna. Praesent blandit risus quis turpis vestibulum, viverra dapibus quam malesuada. Vivamus scelerisque feugiat odio. Maecenas massa justo, lacinia eu tempor at, dictum nec tellus.</p>
				<div class="section__desc"><a href="index.php" class="logo"><span>Servis</span> Buhin</a></div>
			</div>
		</section>

		<!-- Icons -->
		<section class="section--style-guide">
			<h3 class="section__title">Ikone</h3><code>(img/icons)</code>
		</section>

		<!-- Layout -->
		<section class="section--style-guide">
			<h3 class="section__title">Layout</h3><code>(css/scss/layout/grid.scss)</code>
			<div class="grid grid--12">
				<div class="col col--1">1</div>
				<div class="col col--1">1</div>
				<div class="col col--1">1</div>
				<div class="col col--1">1</div>
				<div class="col col--1">1</div>
				<div class="col col--1">1</div>
				<div class="col col--1">1</div>
				<div class="col col--1">1</div>
				<div class="col col--1">1</div>
				<div class="col col--1">1</div>
				<div class="col col--1">1</div>
				<div class="col col--1">1</div>
				<div class="col col--6">6</div>
				<div class="col col--6">6</div>
				<div class="col col--8">8</div>
				<div class="col col--4">4</div>
			</div>
		</section>

		<!-- Navigation -->
		<section class="section--style-guide">
			<h3 class="section__title">Navigacija</h3><code>(css/scss/layout/nav.scss, css/scss/components/burger.scss)</code>
			<nav class="nav nav--mobile">
				<a href="index.php" class="nav__logo"><span>Servis</span> Buhin</a>

				<div class="burger"></div>
				<div class="nav--burger">
					<ul class="nav__link--wrap">
						<li><a href="ponuda.php" class="nav__link">Ponuda</a></li>
						<li><a href="about.php" class="nav__link">O nama</a></li>
						<li><a href="gallery.php" class="nav__link">Galerija</a></li>
						<li><a href="contact.php" class="nav__link">Kontakt</a></li>
					</ul>
				</div>
			</nav>

			<nav class="nav nav--desktop">
				<a href="index.php" class="nav__logo"><span>Servis</span> Buhin</a>

				<ul class="nav__link--wrap">
					<li><a href="ponuda.php" class="nav__link">Ponuda</a></li>
					<li><a href="about.php" class="nav__link">O nama</a></li>
					<li><a href="gallery.php" class="nav__link">Galerija</a></li>
					<li><a href="contact.php" class="nav__link">Kontakt</a></li>
				</ul>
			</nav>
		</section>

		<!-- Header -->
		<section class="section--style-guide">
			<h3 class="section__title">Header</h3><code>(css/scss/layout/header.scss)</code>
			<header class="header grid--12">
				<div class="header__info">
					<h1 class="header__title">Servisiranje<br />i popravak</h1>
					<p class="header__desc">Plinskih trošila</p>
					<a href="#" class="btn btn--primary">Saznaj više</a>
				</div>

				<div class="header__img--wrap"></div>		
			</header>
		</section>

		<!-- Footer -->
		<section class="section--style-guide">
			<h3 class="section__title">Footer</h3><code>(css/scss/layout/footer.scss)</code>
			<div class="footer">
				<div class="footer__address"> Psunjska 78, 31 000 Osijek </div>

				<div class="footer__number--wrap">
					<a href="tel:+385-031-301-622" class="footer__number">031 301 622</a>
					<a href="tel:+385-091-230-1622" class="footer__number">091 2301 622</a>
				</div>

				<a href="#" class="footer__link">servis.buhin@gmail.com </a>
			</div>
		</section>

		<!-- Buttons -->
		<section class="section--style-guide">
			<h3 class="section__title">Buttons</h3><code>(css/scss/components/btn.scss)</code>
			<div class="section__desc--wrap">
				<div class="section__desc">
					<button class="btn btn--primary">Primarni</button>
					<button class="btn btn--secondary">Sekundarni</button>
				</div>	
			</div>
		</section>

		<!-- Inputs -->
		<section class="section--style-guide">
			<h3 class="section__title">Inputs</h3><code>(css/scss/components/form.scss)</code>
			<form class="form">
				<div class="form__field">
					<label for="name" class="form__label">Ime i prezime</label> 
					<input class="form__input" type="text" name="name">
				</div>
				<div class="form__field">
					 <label for="message" class="form__label">Upit</label>
					 <textarea class="form__textarea" name="message" rows="5"></textarea>
				</div>
				<div class="form__btn">
					<input class="btn btn--secondary" type="submit" value="Pošalji">
				</div>
			</form>
		</section>

		<!-- Slider -->
		<section class="section--style-guide">
			<h3 class="section__title">Slider</h3><code>(css/scss/layout/nav.scss)</code>
		</section>

		<!-- Cookies -->
		<section class="section--style-guide">
			<h3 class="section__title">Cookies</h3><code>(css/scss/components/cookies.scss)</code>
			<div class="cookies cookies--style-guide">
				<div class="cookies__text">Servis Buhin koristi kolačiće za pružanje boljeg korisničkog iskustva i funkcionalnosti stranice - <a href="https://www.aboutcookies.org/">saznaj više</a>.</div>
				<div class="btn btn--primary cookies__btn">Shvaćam</div>
			</div>
		</section>

		<!-- Error -->
		<section class="section--style-guide">
			<h3 class="section__title">Error</h3><code>(css/scss/layout/header.scss)</code>
			<header class="header grid--12">
				<div class="header__info">
					<h1 class="header__title">404</h1>
					<p class="header__desc">Stranica nije pronađena</p>
					<a href="#" class="btn btn--primary">Povratak</a>
				</div>

				<div class="header__img--wrap"></div>		
			</header>
		</section>
		
	</main>

	<footer class="footer footer--style-guide">
		<div class="footer__copyright">Servis Buhin &copy; <?php echo date("Y"); ?>.</div>
	</footer>

	<script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA==" crossorigin="">
	</script> 
	<script src="js/map.js"></script>
	<script src="js/burger.js"></script>
</body>
</html>

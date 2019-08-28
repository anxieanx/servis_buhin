<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Servis Buhin</title>
	<meta name="og:locale" content="hr_HR" />
	<meta name="og:type" content="website" />
	<meta name="og:title" content="Servis Buhin" />
	<meta name="og:description" content="Servis Buhin bavi se servisiranjem i montažom plinskih trošila. Ovlašteni servisni partner za proizvodni program Vaillant i Junker Bosch." />
	<meta name="og:url" content="http://www.servis-buhin.hr/" />
	<meta name="og:site_name" content="Servis Buhin" />
	<meta name="og:image" content="img/logo-baum.png" />
  <meta name="article:tag" content="Servis Buhin, Osijek, plin, bojler, Vaillant, Bosch, popravak bojlera" />

  <meta property="og:url" content="" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Servis Buhin - servisiranje i popravak plinskih trošila" />
  <meta property="og:description" content="Servis Buhin bavi se servisiranjem i montažom plinskih trošila. Ovlašteni servisni partner za proizvodni program Vaillant i Junker Bosch. U obrtu trenutno ima četiri zaposlena djelatnika, a svaki od njih je prošao školovanje u predstavništvu tvrtki Vaillant i Junkers u Zagrebu, kao i u sjedištima tvrtki u Njemačkoj." />
  <meta property="og:image" content="" />

	<link rel="shortcut icon" type="image/png" href="../img/favicon.png" />
	<link rel="stylesheet" href="../css/scss/main.css">
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin=""/>
	<link rel="stylesheet" href="../css/animate.css">
</head>

<body>
	<nav id="nav--style-guide" class="nav nav--desktop nav--style-guide">
		<div class="nav__logo">Dokumentacija</div>

		<ul class="nav__link--wrap">
			<li><a href="../index.php" class="nav__link">Početna</a></li>
			<!--<li><a href="about.php" class="nav__link">Elementi</a></li>-->
		</ul>
	</nav>

	<main class="main main--style-guide grid grid--12">
		<!-- About -->
		<section class="section--style-guide">
			<h2 class="section__title">O projektu</h2>
			<div class="section__desc--wrap">
				<div class="section__desc">
					<p>Mrežna aplikacija „Servis Buhin“ nastala je kao rezultat projektnog rada na diplomskom studiju Informacijske tehnologije na Odsjeku za informacijske znanosti u Osijeku. Studentice koje su uključene u projekt su Marija Buhin (studentica Nakladništva i Informacijske tehnologije), Ivona Grgić (studentica Informatologije i Informacijske tehnologije) i Željana Hrkač (studentica Nakladništva i Informacijske tehnologije).</p>
					<p>Studentice su projekt realizirale kroz izradu mrežne stranice, web dizajna, popratne dokumentacije, korisničke dokumentacije, kreiranje sadržaja te naposljetku testiranja aplikacije za mrežno okruženje.</p>
					<p>Tehnologije i jezici korišteni tijekom izrade mrežne aplikacije su HTML, CSS, SASS, JS, jQuery, PHP, Owl Carousel 2, Open Street Maps, Leaflet, Animate.css, Wow.js. Za izradu dizajna koristio se alat za dizajn sučelja Figma, dok se za komunikaciju i verzioniranje koda koristio se GitHub repozitorij. Za nazive klasa koristila se BEM (Block Element Modifier) metodologija.</p>
				</div>
				<div class="section__desc">
					<h5 class="subtitle--style-guide">Proces izrade</h5>
					<ol>
						<li>Pripremna faza - ispitivanje potreba</li>
						<ul>
							<li>Upoznavanje s djelatnosti obrta</li>
							<li>Ispitivanje svrhe mrežne stranice – prezentacijske i promotivne svrhe</li>
						</ul>
						<li>Faza – prikupljanje materijala</li>
						<ul>
							<li>Prikupljanje informacija o obrtu, logo</li>
							<li>Fotografiranje bitnih stavki</li>
						</ul>
						<li>Faza – dizajn mrežne stranice</li>
						<ul>
							<li>Dobivanje osnovnih smjernica dizajna od klijenata</li>
							<li>Izrada 3 prijedloga dizajna</li>
							<li>Dorada odabranog dizajna od strane klijenta do njegove konačne potvrde</li>
						</ul>
						<li>Faza – izrada mrežne stranice</li>
						<ul>
							<li>Pripremljeni materijali koje je potrebno postaviti</li>
							<li>Tekstovi, slike, boje, tipografije</li>
						</ul>
						<li>Faza – testiranje</li>
						<ul>
							<li>Provjera unesenog sadržaja</li>
							<li>Ispitivanje funkcionalnosti stranice</li>
						</ul>
						<li>Faza – dokumentacija</li>
						<ul>
							<li>Pisanje dokumentacije potrebne za realizaciju projekta</li>
						</ul>
						<li>Faza – postavljanje mrežne stranice</li>
						<ul>
							<li>Postavljanje stranice na određenu domenu i poslužitelj</li>
						</ul>
					</ol>
				</div>
			</div>
		</section>

		<!-- Logo -->
		<section class="section--style-guide">
			<h3 class="section__title">Logo</h3><code>(css/scss/layout/nav.scss)</code>
			<div class="section__desc--wrap">
				<div class="section__desc">
					<p>Logotip obrta pripada tipografskom tipu logotipa jer sadrži tekst, odnosno dvije riječi: SERVIS BUHIN. Klijenti su svojim odabirom logotipa htjeli naglasiti čime se prvenstveno bave te koja je obitelj zadužena za njihov rad. Logotip servisa nema stalan dizajn, odnosno mijenjao se svaki puta kada su klijenti izrađivali određene grafičke vizuale i promotivne materijale (posjetnice, magneti, upaljači, plakati, olovke, majice). Ono što je u svakom logotipu ostalo nepromijenjeno je podebljana tipografija riječi BUHIN, dok je riječ SERVIS u svakom ostala normalne debljine.</p>
					<p>Za izradu projekta odabran je najučestaliji logotip koji se pojavljuje na vizualima i promotivnim materijalima. Najučestaliji logotip je zelene boje, riječ SERVIS normalne debljine i u kurzivu te podebljana riječ BUHIN. Za tipografiju odabran je font 'Gaudea, sans-serif' kao najsličniji font koji se pojavljuje na navedenim vizualima.</p>
				</div>					
				<div class="section__desc"><a href="index.php" class="logo"><span>Servis</span> Buhin</a></div>
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
				<div class="section__desc">
					<p>Tipografija koja se koristila preuzeta je s <a href="https://fonts.google.com/">Google Fonts-a</a> koji ima mogućnost besplatnog korištenja fontova u bilo kojem komercijalnom ili nekomercijalnom projektu.</p>
					<h5 class="subtitle--style-guide">Korištena tipografija</h5>
					<div>Osnovna tipografija: <span class="font--base"> 'Mukta Malar', sans-serif;</div>
					<div>Naslovi: <span class="font--heading">'Palanquin Dark', sans-serif;</span></div>
					<div>Logo: <span class="font--logo">'Gudea', sans-serif;</span></div>
				</div>

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

		<!-- Icons -->
		<section class="section--style-guide">
			<h3 class="section__title">Ikone</h3><code>(img/icons)</code>

			<div class="section__desc--wrap">
				<img src="../img/icons/repair.png" class="icon" />
				<img src="../img/icons/maintenance.png" class="icon" />
				<img src="../img/icons/guarantee.png" class="icon" />
				<img src="../img/icons/discount.png" class="icon" />
			</div>
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

			<div class="gallery--wrap grid grid--12">
				<div class="owl-carousel owl-carousel--gallery gallery">
					<div class="gallery__img--wrap"><img src="../img/gallery/vozilo_1.jpg" alt="gallery" class="gallery__img" /></div>
					<div class="gallery__img--wrap"><img src="../img/gallery/servis_4.jpg" alt="gallery" class="gallery__img" /></div>
					<div class="gallery__img--wrap"><img src="../img/gallery/dijelovi_1.jpg" alt="gallery" class="gallery__img" /></div>
				</div>
			</div>
		</section>

		<!-- Cookies
		<section class="section--style-guide">
			<h3 class="section__title">Cookies</h3><code>(css/scss/components/cookies.scss)</code>
			<div class="cookies cookies--style-guide">
				<div class="cookies__text">Servis Buhin koristi kolačiće za pružanje boljeg korisničkog iskustva i funkcionalnosti stranice - <a href="https://www.aboutcookies.org/">saznaj više</a>.</div>
				<div class="btn btn--primary cookies__btn">Shvaćam</div>
			</div>
		</section> -->

		<!-- Error 
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
		</section> -->
		
	</main>

	<footer class="footer footer--style-guide">
		<div class="footer__copyright">Servis Buhin &copy; <?php echo date("Y"); ?>.</div>
		<a href="#nav--style-guide" class="footer__link">Na vrh <span>&uarr;</span></a>
	</footer>

	<script src="../js/jquery-3.4.1.min.js"></script>
	<script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA==" crossorigin="">
	</script> 
	<script src="../js/map.js"></script>
	<script src="../js/burger.js"></script>
	<script src="../js/owl_carousel_lib.js"></script>
	<script src="../js/owl_carousel_init.js"></script>
	<script src="../js/wow.min.js"></script>
  <script>new WOW().init();</script>
</body>
</html>

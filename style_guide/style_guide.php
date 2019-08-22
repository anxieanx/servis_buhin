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
			<div class="section__desc">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis odio vitae lacinia bibendum. Suspendisse lacinia id libero vel cursus. Suspendisse mollis sem massa, eu malesuada ex pulvinar ut. In malesuada lacus arcu, ac venenatis risus pulvinar sit amet. Donec fermentum diam libero, non varius tortor ornare id. Suspendisse potenti. Duis tempor laoreet aliquet. Vestibulum luctus sit amet eros a varius. Vivamus eget condimentum est. Curabitur et convallis mi. Donec vel ante non lacus pellentesque faucibus.</p>
				<p>Nam sit amet magna neque. Quisque consectetur magna nibh, ut maximus enim malesuada at. Praesent fringilla lacinia elit, vel maximus purus pellentesque dapibus. Phasellus et nibh mattis, varius velit eu, tincidunt ex. Sed sit amet aliquet arcu. Ut a nisi tristique, cursus sem at, ultrices odio. Etiam blandit lacus sem, eu consequat justo facilisis a. Vestibulum vel lacus urna. Praesent blandit risus quis turpis vestibulum, viverra dapibus quam malesuada. Vivamus scelerisque feugiat odio. Maecenas massa justo, lacinia eu tempor at, dictum nec tellus.</p>
			</div>
		</section>

		<!-- Colors -->
		<section class="section--style-guide">
			<h3 class="section__title">Colors</h3><code>(css/scss/abstracts/variables.scss)</code>
			<div class="section__desc">
				<div class="color--wrap"><span>Primary Color</span><div class="color color--primary"></div><span>#2a8c57</span></div>
				<div class="color--wrap"><span>White</span><div class="color color--white"></div><span>#ffffff</span></div>
				<div class="color--wrap"><span>Light Gray</span><div class="color color--gray-light"></div><span>#d8d8d8</span></div>
				<div class="color--wrap"><span>Gray</span><div class="color color--gray"></div><span>#a1a1a1</span></div>
				<div class="color--wrap"><span>Dark Gray</span><div class="color color--gray-dark"></div><span>#515151</span></div>
				<div class="color--wrap"><span>Black</span><div class="color color--black"></div><span>#1a1a1a</span></div>
			</div>
		</section>

		<!-- Typography -->
		<section class="section--style-guide">
			<h3 class="section__title">Typography</h3><code>(css/scss/abstracts/variables.scss, css/scss/base/typography.scss)</code>
			<div class="section__desc">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis odio vitae lacinia bibendum. Suspendisse lacinia id libero vel cursus. Suspendisse mollis sem massa, eu malesuada ex pulvinar ut. In malesuada lacus arcu, ac venenatis risus pulvinar sit amet. Donec fermentum diam libero, non varius tortor ornare id. Suspendisse potenti. Duis tempor laoreet aliquet. Vestibulum luctus sit amet eros a varius. Vivamus eget condimentum est. Curabitur et convallis mi. Donec vel ante non lacus pellentesque faucibus.</p>
				<p>Nam sit amet magna neque. Quisque consectetur magna nibh, ut maximus enim malesuada at. Praesent fringilla lacinia elit, vel maximus purus pellentesque dapibus. Phasellus et nibh mattis, varius velit eu, tincidunt ex. Sed sit amet aliquet arcu. Ut a nisi tristique, cursus sem at, ultrices odio. Etiam blandit lacus sem, eu consequat justo facilisis a. Vestibulum vel lacus urna. Praesent blandit risus quis turpis vestibulum, viverra dapibus quam malesuada. Vivamus scelerisque feugiat odio. Maecenas massa justo, lacinia eu tempor at, dictum nec tellus.</p>
			</div>
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

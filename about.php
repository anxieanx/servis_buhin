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
	<!-- add url <meta name="og:url" content="" />-->
	<meta name="og:site_name" content="Servis Buhin" />
	<meta name="og:image" content="img/logo-baum.png" />
    <meta name="article:tag" content="Servis Buhin, Osijek, plin, bojler, Vaillant, Bosch, popravak bojlera" />
    
    <!-- Share -->
    <meta property="og:url" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Servis Buhin - servisiranje i popravak plinskih trošila" />
    <meta property="og:description" content="Servis Buhin bavi se servisiranjem i montažom plinskih trošila. Ovlašteni servisni partner za proizvodni program Vaillant i Junker Bosch. U obrtu trenutno ima četiri zaposlena djelatnika, a svaki od njih je prošao školovanje u predstavništvu tvrtki Vaillant i Junkers u Zagrebu, kao i u sjedištima tvrtki u Njemačkoj." />
    <meta property="og:image" content="" />

	<link rel="shortcut icon" type="image/png" href="img/logo-baum.png"/>
	<link rel="stylesheet" href="css/scss/main.css">
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin=""/>

<body>
	<main class="main grid grid--12">
		<?php 
			include 'navigation.php';
		?>

		<section class="about">
			<h2 class="header__subtitle">O nama</h2>

			<p>Obrt je osnovan 1992. godine i bavi se servisiranjem i montažom plinskih trošila. Ovlašteni je servisni partner za proizvodni program Vaillant-a i Junkers Bosch-a. U obrtu trenutno ima četiri zaposlena djelatnika, a svaki od njih je prošao školovanje u predstavništvu tvrtki Vaillant i Junkers u Zagrebu, kao i u sjedištima tvrtki u Njemačkoj. Obrt surađuje s predstavništvima u Zagrebu, gdje se nabavljaju i originalni rezervni dijelovi. Lista poslovnih partnera je duga no važno je istaknuti suradnju s mnogim trgovinama na području grada Osijeka, a najčešće s „Termocommerce“ i „Exterim“. Osim toga, servis prati i brojne građevinske firme te preuzima održavanje uređaja u njihovim objektima i surađuje s mnogim obrtničkim radionicama i tvrtkama poput „Radijator“, „Plinosan“, „Termoplin“, „Vodopija“ i dr.<br />
			Tim se redovito odaziva pozivima na seminare i razne druge aktivnosti u organizaciji predstavništva radi stjecanja novih znanja i razmjene iskustva.</p>

			<div class="about__img--wrap">
				<a href="https://www.vaillant.hr/krajnji-korisnici/" class="about__img">
					<img src="img/icons/vaillant.png" alt="logo" />
				</a>
				<a href="https://www.bosch.hr/" class="about__img">
					<img src="img/icons/junkers.png" alt="logo" />
				</a>
				<a href="https://www.bosch.hr/" class="about__img">
					<img src="img/icons/bosch.png" alt="logo" />
				</a>   
			</div>
		</section>

		<div class="header__img--wrap quote">
			<q class="quote__text">Pravovremena i kvalitetna usluga klijentu osnovan je zahtjev kojeg Servis Buhin svakodnevno pokušava zadovoljiti i u tome uspijeva.</q>
			<div class="quote__img--wrap">
				<img src="img/portrait.jpg" alt="portrait" class="quote__img" />	
				<div class="quote__info">	
					<h3>Ivica Buhin</h3>
					<h6>osnivač</h6>
				</div>			
			</div>
		</div>
		
		<?php 
			include 'footer.php';
		?>
	</main>

	<script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA==" crossorigin="">
	</script> 
	<script src="js/map.js"></script>
	<script src="js/burger.js"></script>
</body>
</html>

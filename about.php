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

		<header class="header grid--12">
			<div class="header__about">
				<h2>O NAMA</h2>
				<p>Obrt smo osnovali 1992. godine i bavimo se servisiranjem i montažom plinskih trošila. Ovlašteni smo servisni partner za proizvodni program Vaillant-a i Junkers Bosch-a. U obrtu trenutno ima četiri zaposlena djelatnika, a svaki od njih je prošao školovanje u predstavništvu tvrtki Vaillant i Junkers u Zagrebu, kao i u sjedištima tvrtki u Njemačkoj. Usko surađujemo sa predstavništvima u Zagrebu, gdje i nabavljamo originalne rezervne dijelove i posjedujemo lager istih. Lista naših poslovnih partnera je duga pa ćemo ovom prilikom istaknuti kako ostvarujemo suradnju sa mnogim trgovinama na području grada Osijeka, a najčešće s „Termocommerce“ i „Exterim“. Osim toga, pratimo i brojne građevinske firme te preuzimamo održavanje uređaja u njihovim objektima i surađujemo sa mnogim obrtničkim radionicama i tvrtkama poput „Radijator“, „Plinosan“, „Termoplin“, „Vodopija“ i dr.</p>

				<p>Naš tim se redovito odaziva pozivima na seminare i razne druge aktivnosti u organizaciji predstavništva. Ondje se susrećemo sa brojnim kolegama iz cijele Hrvatske, stječemo nova znanja i razmjenjujemo iskustva. Posebno dobru suradnju ostvarujemo djelatnicima tehničkih službi u predstavništvima koji su uvijek spremni pružiti potporu te dati stručan savjet. </p>

				<div class="partners">
					<div class="logo1">
						<img src="img/icons/vaillant.jpg" alt="logo" class="img" />
					</div>
					<div class="logo2">
						<img src="img/icons/junkers.jpg" alt="logo" class="img" />
					</div>
					<div class="logo3">
						<img src="img/icons/bosch.jpg" alt="logo" class="img" />
					</div>   
				</div>

			</div>

			<div class="header__img--wrap">
				<p>"Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor."</p>

				<h5> Ivica Buhin </h5>
				<h6> osnivač </h6>

				<img src="img/icons/portrait.jpg" alt="portrait" class="img" />
				
			</div>		
		</header>
		
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

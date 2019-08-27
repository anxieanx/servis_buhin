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
	<link rel="stylesheet" href="css/animate.css">

<body>
	<main class="main grid grid--12">
		<?php 
			include 'navigation.php';
		?>

		<header class="header grid--12">
			<div class="header__contact">
				<h2 class="header__subtitle animated fadeInUp">Kontakt</h2>
				<p class="animated fadeInUp">Za sve upite i dodatne informacije slobodno nas kontaktirajte. Na svaki upit odgovorit ćemo Vam u najkraćem mogućem roku.</p>


			<form class="form" action="mail.php" method="POST">
				<div class="form__field animated fadeInUp">
					<label for="name" class="form__label">Ime i prezime</label> 
					<input class="form__input" type="text" name="name">
				</div>
				<div class="form__field animated fadeInUp">
					<label for="name" class="form__label">Email</label> 
					<input class="form__input" type="text" name="tel">
				</div>
				<div class="form__field animated fadeInUp">
					 <label for="message" class="form__label">Upit</label>
					 <textarea class="form__textarea" name="message" rows="5"></textarea><br />
				</div>
				<div class="form__btn animated fadeInUp">
					<input class="btn btn--secondary" type="submit" value="POŠALJI">
				</div>
			</form>

			</div>

			<div class="header__img--wrap">

				<div id="mapid" class="map"></div>
				
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
	<script src="js/wow.min.js"></script>
    <script>new WOW().init();</script>
</body>
</html>

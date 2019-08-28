<?php 
	include 'navigation.php';
?>

<header class="header header--contact grid--12">
	<section class="contact">
		<h2 class="header__subtitle animated fadeInUp">Kontakt</h2>
		<p class="contact__text animated fadeInUp">Za sve upite i dodatne informacije slobodno nas kontaktirajte. Na svaki upit odgovorit ćemo Vam u najkraćem mogućem roku.</p>

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
	</section>

	<div class="map--wrap">
		<div id="mapid" class="map"></div>
	</div>		
</header>
		
<?php 
	include 'footer.php';
?>

 var map = L.map('mapid').setView([45.5579508, 18.6523736,603], 13);
		L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
	    attribution: '&copy;<a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>'
		}).addTo(map);
		L.marker([45.5579508, 18.6523736,603]).addTo(map)
	    .bindPopup('<b>Servis Buhin</b><br>Psunjska 78, 31000 Osijek')
	    .openPopup()
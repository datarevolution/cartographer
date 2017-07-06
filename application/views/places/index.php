
 <script>
 

   $(document).ready(function(){
		var mymap = L.map('mapid').setView([36.33, 39.55], 8);

		L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
			maxZoom: 18,
			attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
				'<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
				'Imagery © <a href="http://mapbox.com">Mapbox</a>',
			id: 'mapbox.streets'
		}).addTo(mymap);
		
		var marker;
		
		 		function addMarker(lat,lng) {
			marker = new L.marker([lat, lng]);
			mymap.addLayer(marker);
		}
			


		
		
	<?php foreach ($places as $place): ?>
			   addMarker(<?php echo $place['latitude']; ?>,<?php echo $place['longitude']; ?>);
			   var popupContent = '<h3><?php echo $place['place_name']; ?></h3>';
			   marker.bindPopup(popupContent);
			   

		   <?php endforeach; ?> 

	});
	

	</script>
	
<div id="mapid"></div>
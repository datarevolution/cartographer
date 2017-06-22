
 <script>
 

   $(document).ready(function(){
		var mymap = L.map('mapid').setView([36.33, 39.55], 6);

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
		
	<?php foreach ($coops as $coop): ?>
			   addMarker(<?php echo $coop['latitude']; ?>,<?php echo $coop['longitude']; ?>);
			   var popupContent = '<h3><?php echo $coop['name']; ?></h3> <p><?php echo $coop['description']; ?></p><p><a href="<?php echo $coop['link_to_page']; ?>">Link to co-op page</a></p>';
			   marker.bindPopup(popupContent);
			   

		   <?php endforeach; ?>

	});
	

	</script>
	
	<h2><?php echo $name; ?></h2>

<div id="mapid"></div>

<?php foreach ($coops as $coop): ?>

        <h3><?php echo $coop['name']; ?></h3>
        <div class="main">
                <?php echo $coop['description']; ?>
        </div>

<?php endforeach; ?>


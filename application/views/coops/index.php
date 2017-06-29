
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
		
var json =  $.getJSON("https://localhost/cartographer/index.php/coops/json/", function(data) {
	$.each(data['places'], function(key, value) {
		console.log(key);
		console.log(value['coordinates']['longitude']);
		console.log(value['coordinates']['latitude']);
		
		addMarker(value['coordinates']['latitude'],value['coordinates']['longitude']);
		var popupContent = "<h2>Co-ops in " + key + "</h2>";
		
		$.each(value['coops'], function (c_key, c_value) {
			popupContent = popupContent + "<h3>" + c_key + "</h3><p>" + c_value['description'] + "</p>";
		});
		
		marker.bindPopup(popupContent);
	});
});


		


		
		/* 
	<?php foreach ($coops as $coop): ?>
			   addMarker(<?php echo $coop['latitude']; ?>,<?php echo $coop['longitude']; ?>);
			   var popupContent = '<h3><?php echo $coop['name']; ?></h3> <p><?php echo $coop['description']; ?></p><p><a href="<?php echo $coop['link_to_page']; ?>">Link to co-op page</a></p>';
			   marker.bindPopup(popupContent);
			   

		   <?php endforeach; ?> */

	});
	

	</script>
	
	<h2><?php //echo $name; ?></h2>
<p>Co-op locations are approximate due to security concerns.</p>
<div id="mapid"></div>
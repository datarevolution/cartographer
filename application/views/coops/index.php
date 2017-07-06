
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
		
		 		function addMarker(lat,lng, popupContent, coopCount) {
					var numberIcon = L.divIcon({
      className: "number-icon",
      iconSize: [25, 36],
      iconAnchor: [10, 44],
      popupAnchor: [3, -40],
      html: coopCount        
});
			marker = new L.marker([lat, lng], {
				icon: numberIcon
			}).on('click', function() {
				$('#infoid').html(popupContent);
				mymap.panTo(new L.LatLng(lat,lng));
			});
			mymap.addLayer(marker);
		}
		
		
var json =  $.getJSON("<?php echo $this->config->base_url(); ?>/index.php/coops/json/", function(data) {
	$.each(data['places'], function(key, value) {
		console.log(key);
		console.log(value['coordinates']['longitude']);
		console.log(value['coordinates']['latitude']);
		
		
		var popupContent = "<div id=\"inner_info\"><h2>Co-ops in and around " + key + "</h2>";
		var coopCount = 0;
		
		$.each(value['coops'], function (c_key, c_value) {
			coopCount++;
			popupContent = popupContent + "<div class=\"coop_info\"><h3><i class=\"fa " + c_value['icon'] + " fa-1g\"></i><a href=\"" + c_value['url'] + "\">" + c_key + "</a></h3><p>" + c_value['description'] + "</p></div>";
		});
		
		popupContent = popupContent + "</div>";
		addMarker(value['coordinates']['latitude'],value['coordinates']['longitude'], popupContent, coopCount);
		
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
	
<div id="mapid"></div>

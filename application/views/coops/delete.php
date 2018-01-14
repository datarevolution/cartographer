<h2><?php //echo $name; ?></h2>

<?php 
$form_errors = validation_errors();
if ($form_errors != null) {
	?>
	<div id="form_errors">
	<h3>Please fill in this information</h3>
	<?php
	echo $form_errors;
	?>
	</div>
	<?php
} ?>


<?php echo form_open('coops/delete/' . $coop['id']); ?>

<input type="hidden" name="id" id="id"  value="<?php echo $coop['id']; ?>"/>
<input type="hidden" name="delete" id="delete"  value="true"/>


<h3>	ARE YOU SURE YOU WANT TO DELETE THIS COOP? (IRREVERSIBLE)
	
    <input type="submit" name="delete" value="delete" />

</form>

 <script>
   $(document).ready(function(){
	   
	   
	$('[name="<?php echo $coop['icon']; ?>"]').addClass("selected");
	
	$('select#providesa option[selected]').attr("selected",false);
	$('select#providesa option[value=<?php echo $coop['providesa']; ?>]').attr("selected",true);
	$('select#providesb option[selected]').attr("selected",false);
	$('select#providesb option[value=<?php echo $coop['providesb']; ?>]').attr("selected",true);
	$('select#providesc option[selected]').attr("selected",false);
	$('select#providesc option[value=<?php echo $coop['providesc']; ?>]').attr("selected",true);
	   
		var mymap = L.map('mapid').setView([36.33, 39.55], 6);

		L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
			maxZoom: 18,
			attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
				'<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
				'Imagery © <a href="http://mapbox.com">Mapbox</a>',
			id: 'mapbox.streets'
		}).addTo(mymap);
				
		var marker;
		
		 		function addMarker(lat,lng, place_id) {
			marker = new L.marker([lat, lng]).on('click',onMarkerClick);
			marker.place_id = place_id;
			mymap.addLayer(marker);
		}
		
		    var customOptions =
        {
        'closeButton': false,
        'className' : 'placePopup'
        }
		
	<?php foreach ($places as $place): ?>
			   addMarker(<?php echo $place['latitude']; ?>,<?php echo $place['longitude']; ?>, <?php echo $place['place_id']; ?>);
			   var popupContent = '<h3><?php echo $place['place_name']; ?></h3>';
			   marker.bindPopup(popupContent, customOptions);
			   
			  
			  <?php if ($place['place_id'] == $coop['place_id']) { ?> marker.openPopup();  <?php } ?>
			   

		   <?php endforeach; ?>
		   
		   function onMarkerClick(e) {
			  console.log(e.target.place_id);
			  $("input#place_id").val(e.target.place_id);
		   }
		   

		function onMapClick(e) {
			
			
/* 			if(marker) {
				mymap.removeLayer(marker);
			}
			marker = new L.marker([e.latlng.lat, e.latlng.lng]);
			mymap.addLayer(marker);
			
			$("input#maplng").val(e.latlng.lng);
			$("input#maplat").val(e.latlng.lat); */
			
		}

		//mymap.on('click', onMapClick);


		
	});
        </script>
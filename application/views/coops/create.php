<h2><?php echo $name; ?></h2>

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


<?php echo form_open('coops/create'); ?>

<fieldset>
    <p><label for="name">Name</label></p>
    <input type="input" name="name" />
	
	<p><label for="sentence">Sentence</label></p>
    <textarea name="sentence"></textarea>
	
    <p><label for="description">Description</label></p>
    <textarea name="description"></textarea>
	
	<p><label for="link_to_page">Link to page</label></p>
	<input type="input" name="link_to_page" />
	
</fieldset>

<fieldset>

	<p class="label map_label">Select nearest town/city</p>
	<div id="mapid"></div>
	
	<div id="icon_selector">
	<p class="label">Map icon</p>
		<i name="fa-leaf" class="fa fa-leaf fa-5x"></i><i name="fa-paw" class="fa fa-paw fa-5x"></i><i name="fa-shopping-basket" class="fa fa-shopping-basket fa-5x"></i><i name="fa-scissors" class="fa fa-scissors fa-5x"></i><i name="fa-spoon" class="fa fa-spoon fa-5x"></i><i name="fa-industry" class="fa fa-industry fa-5x"></i><i name="fa-pie-chart" class="fa fa-pie-chart fa-5x"></i><i name="fa-birthday-cake" class="fa fa-birthday-cake fa-5x"></i><i name="fa-archive" class="fa fa-archive fa-5x"></i><i name="fa-tint" class="fa fa-tint fa-5x"></i><i name="fa-heartbeat" class="fa fa-heartbeat fa-5x"></i><i name="fa-recycle" class="fa fa-recycle fa-5x"></i><i name="fa-handshake-o" class="fa fa-handshake-o fa-5x"></i><i name="fa-venus" class="fa fa-venus fa-5x"></i>
	</div>
		
	
	<script>
	
	$("i.fa").click( function() {
		$("i.selected").removeClass("selected");
		$(this).addClass("selected");
		$("input#map_icon").val($(this).attr("name"));
	});
	
	</script>
	
	<input type="hidden" name="icon" id="map_icon" />
	
	<input type="hidden" name="place_id" id="place_id" />
	
	<p><label for="email_private">Email (private)</label></p>
    <input type="input" name="email_private" />
	
	<p><label for="email_public">Email (public)</label></p>
    <input type="input" name="email_public" />
	
	<p><label for="website">Website</label></p>
    <input type="input" name="website" />
	

</fieldset>

<fieldset>

	<p><label for="coop_grouping">Co-op grouping</label></p>
    <select name="coop_grouping">
		<option selected value=""></option>
		<option value="Hevgurtin">Hevgurtin</option>
	</select>
	
	<p><label for="founding_year">Founding year</label></p>
    <input type="input" name="founding_year" />
	
	<p><label for="members">Number of members</label></p>
    <input type="input" name="members" />
	
	<p><label for="workers">Number of workers</label></p>
    <input type="input" name="workers" />
	
	</fieldset>
	
	<fieldset>		
	<p><label for="providesa">Activity provided</label></p>
    <select name="providesa">
		<option selected value=""></option>
		<option value="A01">Agriculture and environment</option>
		<option value="A02">Mining and quarrying</option>
		<option value="A03">Craftmanship and manufacturing</option>
		<option value="A04">Energy production and distribution</option>
		<option value="A05">Recycling, waste treatment, water cycle and ecological restoration</option>
		<option value="A06">Construction, public works and refurbishing</option>
		<option value="A07">Trade and distribution</option>
		<option value="A08">Transport, logistics and storage</option>
		<option value="A09">Hospitality and food service activities</option>
		<option value="A10">Information, communication and technologies</option>
		<option value="A11">Financial, insurance and related activities</option>
		<option value="A12">Habitat and housing</option>
		<option value="A13">Professional, scientific and technical activities</option>
		<option value="A14">Administration and management, tourism, rentals</option>
		<option value="A15">Public administration, social security.</option>
		<option value="A16">Education and training</option>
		<option value="A17">Social services, health and employment</option>
		<option value="A18">Arts, culture, recreation and sports</option>
		<option value="A19">Membership activities, repairing and wellness</option>
		<option value="A20">Household activities, self-production, domestic work.</option>
		<option value="A21">International diplomacy and cooperation</option>
	</select>
	
	<p><label for="providesb">Activity provided</label></p>
    <select name="providesb">
		<option selected value=""></option>
		<option value="A01">Agriculture and environment</option>
		<option value="A02">Mining and quarrying</option>
		<option value="A03">Craftmanship and manufacturing</option>
		<option value="A04">Energy production and distribution</option>
		<option value="A05">Recycling, waste treatment, water cycle and ecological restoration</option>
		<option value="A06">Construction, public works and refurbishing</option>
		<option value="A07">Trade and distribution</option>
		<option value="A08">Transport, logistics and storage</option>
		<option value="A09">Hospitality and food service activities</option>
		<option value="A10">Information, communication and technologies</option>
		<option value="A11">Financial, insurance and related activities</option>
		<option value="A12">Habitat and housing</option>
		<option value="A13">Professional, scientific and technical activities</option>
		<option value="A14">Administration and management, tourism, rentals</option>
		<option value="A15">Public administration, social security.</option>
		<option value="A16">Education and training</option>
		<option value="A17">Social services, health and employment</option>
		<option value="A18">Arts, culture, recreation and sports</option>
		<option value="A19">Membership activities, repairing and wellness</option>
		<option value="A20">Household activities, self-production, domestic work.</option>
		<option value="A21">International diplomacy and cooperation</option>
	</select>
	
	<p><label for="providesc">Activity provided</label></p>
    <select name="providesc">
		<option selected value=""></option>
		<option value="A01">Agriculture and environment</option>
		<option value="A02">Mining and quarrying</option>
		<option value="A03">Craftmanship and manufacturing</option>
		<option value="A04">Energy production and distribution</option>
		<option value="A05">Recycling, waste treatment, water cycle and ecological restoration</option>
		<option value="A06">Construction, public works and refurbishing</option>
		<option value="A07">Trade and distribution</option>
		<option value="A08">Transport, logistics and storage</option>
		<option value="A09">Hospitality and food service activities</option>
		<option value="A10">Information, communication and technologies</option>
		<option value="A11">Financial, insurance and related activities</option>
		<option value="A12">Habitat and housing</option>
		<option value="A13">Professional, scientific and technical activities</option>
		<option value="A14">Administration and management, tourism, rentals</option>
		<option value="A15">Public administration, social security.</option>
		<option value="A16">Education and training</option>
		<option value="A17">Social services, health and employment</option>
		<option value="A18">Arts, culture, recreation and sports</option>
		<option value="A19">Membership activities, repairing and wellness</option>
		<option value="A20">Household activities, self-production, domestic work.</option>
		<option value="A21">International diplomacy and cooperation</option>
	</select>
</fieldset>

	
    <input type="submit" name="submit" value="Create coop" />

</form>

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
		
	<?php foreach ($coops as $coop): ?>
			   addMarker(<?php echo $coop['latitude']; ?>,<?php echo $coop['longitude']; ?>, <?php echo $coop['place_id']; ?>);
			   var popupContent = '<h3><?php echo $coop['place_name']; ?></h3>';
			   marker.bindPopup(popupContent, customOptions);
			   

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
<h2><?php echo $name; ?></h2>

<?php echo validation_errors(); ?>

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

	<div id="mapid"></div>
	
	<p><label for="icon">Map icon</label></p>
    <select name="icon">
		<option value="fa-leaf">fa-leaf</option>
		<option value="fa-tree">fa-tree</option>
		<option value="fa-cog">fa-cog</option>
		<option value="fa-bolt">fa-bolt</option>
		<option value="fa-wrench">fa-wrench</option>
		<option value="fa-shopping-cart">fa-shopping-cart</option>
		<option value="fa-bicycle">fa-bicycle</option>
		<option value="fa-coffee">fa-coffee</option>
		<option value="fa-laptop">fa-laptop</option>
		<option value="fa-gbp">fa-gbp</option>
		<option value="fa-home">fa-home</option>
		<option value="fa-book ">fa-book</option>
		<option value="fa-heart">fa-heart</option>
		<option value="fa-globe">fa-globe</option>
	</select>
	
	<input type="hidden" name="longitude" id="maplng" />
	<input type="hidden" name="latitude" id="maplat" />
	
	<p><label for="email_private">Email (private)</label></p>
    <input type="input" name="email_private" />
	
	<p><label for="email_public">Email (public)</label></p>
    <input type="input" name="email_public" />
	
	<p><label for="phone">Phone</label></p>
    <input type="input" name="phone" />
	
	<p><label for="website">Website</label></p>
    <input type="input" name="website" />
	
	<p><label for="street">Street</label></p>
    <input type="input" name="street" />
	
	<p><label for="postcode">Postcode</label></p>
    <input type="input" name="postcode" />

</fieldset>

<fieldset>

	<p><label for="coop_grouping">Co-op grouping</label></p>
    <select name="coop_grouping">
		<option value="None">None</option>
		<option value="Hevgurtin">Hevgurtin</option>
	</select>
	
	<p><label for="legal">Legal status</label></p>
    <select name="legal">
		<option value="L1">Informal Group</option>
		<option value="L2">Co-operative</option>
		<option value="L3">Company</option>
		<option value="L4">Non-Profit Organisation</option>
		<option value="L5">Social Enterprise</option>
	</select>
	
	<p><label for="founding_year">Founding year</label></p>
    <input type="input" name="founding_year" />
	
	<p><label for="registrar">Registrar</label></p>
    <input type="input" name="registrar" />
	
	<p><label for="registered_num">Registered number</label></p>
    <input type="input" name="registered_num" />
	
	<p><label for="members">Number of members</label></p>
    <input type="input" name="members" />
	
	</fieldset>
	
	<fieldset>		
	<p><label for="providesa">Activity provided</label></p>
    <select name="providesa">
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
		
		function onMapClick(e) {
			if(marker) {
				mymap.removeLayer(marker);
			}
			marker = new L.marker([e.latlng.lat, e.latlng.lng]);
			mymap.addLayer(marker);
			
			$("input#maplng").val(e.latlng.lng);
			$("input#maplat").val(e.latlng.lat);
			
		}

		mymap.on('click', onMapClick);


		
	});
	
	
	</script>
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


<?php echo form_open('places/create'); ?>

<fieldset>
    <p><label for="place_name">English name</label></p>
    <input type="input" name="place_name" />
	
	<p><label for="arabic_name">Arabic name</label></p>
    <input type="input" name="arabic_name" />
	
	<p><label for="syriac_name">Syriac name</label></p>
    <input type="input" name="syriac_name" />
	
	<p><label for="kurdish_name">Kurdish name</label></p>
    <input type="input" name="kurdish_name" />
	
	<p><label for="other_name">Other name</label></p>
    <input type="input" name="other_name" />
	
	<p><label for="longitude">Longitude</label></p>
    <textarea name="longitude"></textarea>
	
    <p><label for="latitude">Latitude</label></p>
    <textarea name="latitude"></textarea>
	
</fieldset>

	
    <input type="submit" name="submit" value="Create place" />

</form>
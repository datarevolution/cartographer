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


<?php echo form_open('places/delete/' . $place['place_id']); ?>

<input type="hidden" name="place_id" id="place_id"  value="<?php echo $place['place_id']; ?>"/>
<input type="hidden" name="delete" id="delete"  value="true"/>


<h3>	ARE YOU SURE YOU WANT TO DELETE THIS PLACE? (IRREVERSIBLE)
	
    <input type="submit" name="delete" value="delete" />

</form>

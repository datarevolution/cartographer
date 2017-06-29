<?php header('Content-Type: application/json');

 ?>
 {
	"places" : {	
	<?php foreach ($places as $place): ?>

		"<?php echo $place['place_name']; ?>" : {
			"coordinates" : {
				"longitude" : "<?php echo $place['longitude']; ?>",
				"latitude" : "<?php echo $place['latitude']; ?>"
			},
			"coops" : {
				<?php foreach ($coops[$place['place_id']] as $coop): ?>
				"<?php echo $coop['name']; ?>" : {
					"description" : "<?php echo $coop['description']; ?>",
					"url" : "<?php echo $coop['link_to_page']; ?>"
				}<?php if (next($coops[$place['place_id']])==true) echo ","; ?>
				<?php endforeach; ?>
			}
		}<?php if ($places[count($places)-1] != $place) echo ","; ?>
		   
		   <?php endforeach; ?>
		
	} 
}
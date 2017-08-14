<?php header('Content-Type: application/json');

 ?>
 {
	"places" : {	
	<?php foreach ($places as $place): ?>

		<?php echo json_encode($place['place_name']); ?> : {
			"coordinates" : {
				"longitude" : "<?php echo $place['longitude']; ?>",
				"latitude" : "<?php echo $place['latitude']; ?>"
			},
			"names" : {
				"kurdish" : <?php echo json_encode($place['kurdish_name']); ?>,
				"syriac" : <?php echo json_encode($place['syriac_name']); ?>,
				"arabic" : <?php echo json_encode($place['arabic_name']); ?>,
				"other" : <?php echo json_encode($place['other_name']); ?>
			},
			"coops" : {
				<?php foreach ($coops[$place['place_id']] as $coop): ?>
				<?php echo json_encode($coop['name']); ?> : {
					"description" : <?php echo json_encode($coop['description']); ?>,
					"icon" : "<?php echo $coop['icon']; ?>",
					"url" : <?php echo json_encode($coop['link_to_page']); ?>
				}<?php if (next($coops[$place['place_id']])==true) echo ","; ?>
				<?php endforeach; ?>
			}
		}<?php if ($places[count($places)-1] != $place) echo ","; ?>
		   
		   <?php endforeach; ?>
		
	} 
}
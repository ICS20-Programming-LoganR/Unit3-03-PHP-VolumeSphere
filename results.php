<?php
	// get the radius from the textfields
	$radius = $_POST['radius'];

	// calculate the volume
	$volume = 4/3 * pi($radius)
?>
<h3>Results:</h3>
The volume is <?php echo "$volume" ?>cm<sup>3</sup>.
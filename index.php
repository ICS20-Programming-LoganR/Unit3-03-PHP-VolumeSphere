<!DOCTYPE html>
<html lang="en">
	<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- style -->
     <link rel="stylesheet" href="./css/style.css">
    <!-- title -->
    <title>Volume of a sphere in PHP</title>
	</head>
	<body>
    <h1><?php echo 'Volume of a Sphere in PHP.'; ?></h1>
		<?php echo '<p>Welcome to the PHP. Here, you will find the volume of a sphere.</p>'; ?>
		<!-- form to get the radius from the user -->
    <form action="./results.php" method="post" target="results">
      <label for=radius">Radius (cm):</label>
      <input type="number" id="radius" placeholder="Radius (cm)" name="radius"><br><br>
  <input type="submit" value="Calculate Volume">
</form>
			<!-- iframe for the results to show on the web page. -->
			<iframe id="results" name="results">			
				The volume is  " + $volume + cm<sup>3</sup>
	    </iframe>
	</body>
</html>
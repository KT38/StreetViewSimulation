<?php

$x = filter_input(INPUT_POST, 'x', FILTER_SANITIZE_SPECIAL_CHARS);
$y = filter_input(INPUT_POST, 'y', FILTER_SANITIZE_SPECIAL_CHARS);

?>



<!DOCTYPE html>
<html>
<head>
	<style>
#streetview-canvas {
	width: 600px ;
	height: 600px ;
}
	</style>
</head>
<body>
	<div id="streetview-canvas"></div>

	<form method='post' action="#">
		<input type="text" name = 'x' value = <?php echo $x;  ?>>
		<input type="text" name = 'y' value = <?php echo $y;  ?>>
		<input type="submit">
	</form>

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC6WYSnw4mx4ux1-rmnGtMVKgA4DXkXG5s&callback=initMap"></script>
	<script>
			var container = document.getElementById( "streetview-canvas" ) ;

			// StreetViewPanorama
			var streetViewPanorama = new google.maps.StreetViewPanorama( container, {
				position: new google.maps.LatLng( <?php echo $x;  ?>, <?php echo $y;  ?> ) ,
			} ) ;
	</script>
</body>
</html>




<!-- 35.77605114120131, 139.78860309786995 -->

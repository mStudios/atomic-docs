<!-- patterns/examples/d_item_ipsum.php -->
<?php 
	// for some reason it has to be called locally
	// get the JSON data and convert to PHP arrays
	$filename 		= '../data.json';
	if (file_exists($filename)) {						// Only try if there is a file
	    $someJSON	= file_get_contents( $filename );	// Get the content of the file
	    $someArray	= json_decode($someJSON, true);		// Convert JSON string to Array
	}
?>

<?php echo $mustache->render('examples/d_item_ipsum', $someArray);  ?>
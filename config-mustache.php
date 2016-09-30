<?php /* this is needed in the root index file to render the mustache from the includes */
	
	// PHP ERROR TESTING - Remove when all works
	ini_set('display_errors', 1);
	error_reporting(E_ALL ^ E_NOTICE);
	
	// get the JSON data and convert to PHP arrays
	$filename 		= 'data.json';
	if (file_exists($filename)) {						// Only try if there is a file
	    $someJSON	= file_get_contents( $filename );	// Get the content of the file
	    $someArray	= json_decode($someJSON, true);		// Convert JSON string to Array
	}
	
	require_once('Mustache/Autoloader.php');			// Load Mustache for templating
	Mustache_Autoloader::register();					// and then register it
		
	$options 	= array('extension' => '.php');			// use PHP instead of default MUSTACHE files
	$mustache = new Mustache_Engine(array(				// create/init the mustache object
	    'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__) . '/patterns/', $options),
	    'pragmas' => [Mustache_Engine::PRAGMA_BLOCKS],
	    'helpers' => array (
	    	"div-wrapped" => function($text) {
	        	return '<div {{#div-id}}id="{{id-name}}"{{/div-id}}{{#div-class}}class="{{class-name}}"{{/div-class}}>' . $text . '</div>';
	        },
	        "section-wrapped" => function($text) {
	        	return '<section {{#section-id}}id="{{id-name}}"{{/section-id}}{{#section-class}}class="{{class-name}}"{{/section-class}}>' . $text . '</section>';
	        }
	    ),
	));
	
?>
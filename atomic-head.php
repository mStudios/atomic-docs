<?php /* this loads the templates */
	ini_set('display_errors', 1);
	error_reporting(E_ALL ^ E_NOTICE);
	// get the JSON data and convert to PHP arrays
	$filename 		= '../data.json' || '../data2.json';
	if (file_exists($filename)) {						// Only try if there is a file
	    $someJSON	= file_get_contents( $filename );	// Get the content of the file
	    $someArray	= json_decode($someJSON, true);		// Convert JSON string to Array
	}
	require_once('../Mustache/Autoloader.php');
	Mustache_Autoloader::register();
	$options 	= array('extension' => '.php'); // set to php for simplicity
	$mustache 	= new Mustache_Engine(array('loader' => new Mustache_Loader_FilesystemLoader('../patterns/', $options),
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
<!-- this is the MAIN CSS file - pass it over to Atomic-Docs -->
<link rel="stylesheet" href="css/main.css">
<!-- good place to put atomic-docs override css if your theme css breaks the style-guide -->
<style>
	.codeBlocks { clear: both; }
	p			{ text-align: left; }
</style>



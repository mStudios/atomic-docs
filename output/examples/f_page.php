<?php 
	echo $mustache->render('examples/f_page', [
		'article' => [
		    'title'	=>	'How to do x, y and z',
		    'body' 	=>	'<p>First do x, then do y, then do z.</p>'
		  ],
	]);  
?>
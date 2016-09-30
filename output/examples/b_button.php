<?php
	$template = $mustache->loadTemplate('examples/b_button');
	echo $template->render(array('id' => 'someID', 'label' => 'ADD ME'));
?>
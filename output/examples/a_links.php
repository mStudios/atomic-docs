<?php
	$template = $mustache->loadTemplate('examples/a_links');
	echo $template->render(array('anchor-link' => 'www.domain.com', 'link-text' => 'Output set in output/examples/a_links.php'));
?>
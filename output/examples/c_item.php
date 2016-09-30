<?php 
	$template = $mustache->loadTemplate('examples/c_item');
	echo $template->render(array("id"=>'X', "name"=>"Item Title", "price"=>"20.50","addButton"=>array("label"=>"Buy!")));
?>
<?php 	
	//require ("partial-mngr/config.php");
	
	require 'partial-mngr/functions/functions.php';

	require 'partial-mngr/create.php';
	require 'partial-mngr/delete.php';
	require 'partial-mngr/create-category.php';
	require 'partial-mngr/delete-category.php';

	$current_page = basename($_SERVER['PHP_SELF']);

?>

  



<div class="atoms-side_show">
	<span class="toggle-line"></span>
	<span class="toggle-line"></span>
	<span class="toggle-line"></span>
</div>
<aside class="atoms-side">
<div class="atoms-overflow">

	<span class="atoms-side_hide">Hide Sidebar</span>

	<nav>
		<ul class="atoms-nav">
			<?php include ("includes/_sidebar.php");?>
		</ul>
		 
	</nav>


</div>
           <div class="show-hide cat-form-group ">
           
           
           	  <!-- <a class="ad_js-actionOpen ad_actionBtn" href="atomic-core/actions/_catActions.php">open</a> -->
              
              
              
			  <!-- <i class="fa fa-plus-square-o fa-lg"></i> -->
				<a class="cat-form-btn ad_js-actionOpen ad_actionBtn" href="atomic-core/actions/_catActions.php">Manage Categories</a>
				<div class="cat-form js-showContent">
				</div>
			</div>
</aside>




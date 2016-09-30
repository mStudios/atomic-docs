<?php include('config-mustache.php') ?><!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Atomic-Docs | Mustache</title>
        <link rel="stylesheet" href="css/main.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    </head>
	<body class="demo">
		<h1>Atomic-Docs with Mustache PHP</h1>
		<p>Go to the <a href="/atomic-core">Live Style Guide</a> for examples and more info.</p>
		<section>
			<h2>Demo a few Mustache rendered files</h1>
			<?php include('output/examples/a_links.php') ?>
			<p>(output => links.php included)</p>
			<hr />
			<?php include('output/examples/b_button.php') ?>
			<p>(output => button included)</p>
			<hr />
			<?php include('output/examples/d_item_ipsum.php') ?>
			<p>(output => item_ipsum included)<br />Content defined via data.json. Also, the button uses a different label (than the base button) which was added via the data.json file.</p>
		</section>
		<hr />
	</body>
	<?php include("atomic-foot.php"); ?>
</html>



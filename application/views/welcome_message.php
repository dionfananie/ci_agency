<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>

	
</head>
<body>

<div id="container">
	<h1><?php echo $page_header; ?></h1>

	<div id="body">
		<?php
			foreach ($firstnames as $object) {
				# code...
				echo $object->firstname . '<br/>';
			}
			echo '<br/><hr/><br/>';

			foreach ($users as $object) {
				# code...
				echo $object->firstname. '\'s email address is '. $object->email. '<br/>';
			}


		?>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>
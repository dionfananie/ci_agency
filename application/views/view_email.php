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

		function isValidEmail($email){
		return preg_match('/^( [a-zA-Z0-9] )+( [a-zA-Z0-9\._-] )*@( [a-zA-Z0-9_-] )+( [a-zA-Z0-9\._-] +)+$/' , $email);
	}
		echo '<h3> preg_match() function first ...</h3>';	
		
		$result1 = isValidEmail('dionfananie@gmail.com') ? 'valid' : 'not valid';
		echo 'nasigudeg@gmail.com is '. $result1;

		$result2 = isValidEmail('dionfananie@gmail.com.d') ? 'valid' : 'not valid';
		echo ' dionfananie@gmail.com.d is '. $result2;

		$result3 = isValidEmail('dionfananie@gmail.com.sss') ? 'valid' : 'not valid';
		echo ' dionfananie@gmail.comsss is '. $result3;

		
			

			

		?>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html> 
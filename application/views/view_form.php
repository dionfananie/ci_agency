<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $title; ?></title>
</head>
<body>

<div id="container">
	<h1><?php echo $page_header; ?></h1>

	<div id="body">
	<?php 
	if (isset($email)&&($password)){
		echo validation_errors();
		echo 'Your Username is '. $email. ' <br/>';	
		echo 'Your Password is '. $password. ' <br/>';	
		echo 'Your Password length is '. $pass_length. ' <br/>'	;
		echo 'Form Submitted from '. $url. ' <br/>'	;
		print_r($_POST);

	}
	else
	{
		echo validation_errors();
		echo form_open();
		echo '<label for="Username"> Email:</label><br/>'. form_input('email', set_value('email')).'<br/><br/>';
		echo '<label for="Password"> Password:</label><br/>'. form_password('password', '').'<br/><br/>';
		$url_sent_from = current_url();
		echo form_hidden('url', $url_sent_from);
		echo form_submit('mysubmit', 'Login!');
		
		echo form_close();



	}


	?>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html> 
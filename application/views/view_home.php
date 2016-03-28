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
			echo '<h3> element() </h3>';
			$ci_array =  array('name'=>'Code Igniter', 'size'=> '3.9mb', 'lang'=>'en');

			//return Code Igniter
			echo element('name', $ci_array).'<br/>';
			//return NULL
			echo element('url', $ci_array).'echoing NULL echoes empty string.... <br/>';
			
			echo element('url', $ci_array, 'not there');

			echo '<h3>Random Element </h3>'; 
			$cards = array(
				9,
				10,
				"Jack",
				"Queen",
				"King",
				"Ace"
				);

			echo random_element($cards) . '<br/>';

			echo "<h3>elements()</h3>";

			$new_array = elements(array('name', 'size', 'languange'), $ci_array);
			print_r($new_array);
			$value = $new_array['languange'] ? 'returned value' : 'returned false';

			echo '<br/>'. $value . '<br/>';

			$this->load->model('post_model');
			$this->post_model->update(elements(array('id', 'title', 'content'), $_POST));


		?>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html> 
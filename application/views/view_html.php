<?php echo doctype('html5');?>
<html lang="en">
<head>
	
	<?php echo meta('description', 'My CI Website');
	$meta = array(
		array('name' =>'robots' , 'content'=> 'no-cache'),
		array('name' =>'keywords' , 'content'=> 'php, mysql, oop, MVC'),
		array('name' =>'Content-type' , 'content'=> 'text/html;charset=utf-8', 'type'=>'equiv' )
		);
	echo meta($meta);
	?>
	<title><?php echo $title; ?></title>
	<?php echo link_tag('resources/styles.css');?>


	
</head>
<body>

<div id="container">
	<h1><?php echo $page_header; ?></h1>

	<div id="body">
	<?php 
		echo  heading("Hello World", 3);
		echo  heading("Hello World", 5);
		echo  heading("Important Messages", 4, 'class="important"');
		
		echo img('https://yt3.ggpht.com/-KdgJnz1HIdQ/AAAAAAAAAAI/AAAAAAAAAAA/4vVN7slJqj4/s900-c-k-no/photo.jpg');
		$img_attr=array(
			'src'=>'https://yt3.ggpht.com/-KdgJnz1HIdQ/AAAAAAAAAAI/AAAAAAAAAAA/4vVN7slJqj4/s900-c-k-no/photo.jpg',
			'alt'=> 'logo',
			'height'=>'35',
			'title'=>'Logo web'


			);
		echo br();
		echo img($img_attr);
		echo br();
		echo nbs(5);



	?>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html> 
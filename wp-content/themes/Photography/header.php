<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,700" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<title>Sweet Photography</title>
<?php wp_head(); ?>
</head>
<body>
<div class="blog-masthead" id="hamburger">
	<div class="container sidenav" id="mySidenav" >
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<?php
			$args = array(
				'theme_location' => 'primary'
			);	
		?>	
		<?php wp_nav_menu(  $args ); ?>
	</div>
<span style="font-size:30px;cursor:pointer" id="hamburgericon" onclick="openNav()">&#9776;</span>

<a href="<?php echo site_url(); ?>"><img src="<?= get_template_directory_uri().'/imgs/logo.png'; ?>" alt="sweet photography logo" class="logo"></a>
</div>
<div class="container">
	

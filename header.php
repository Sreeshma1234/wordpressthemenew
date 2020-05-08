<!DOCTYPE HTML>
<!--
	Read Only by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Read Only by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<?php wp_head();?>
	</head>
	<body class="is-preload">

		<!-- Header -->
<section id="header">
<?php $sidebar = get_field('sidebar');?>
	<header>
		<span class="image avatar"><img src="<?php echo esc_url( $sidebar['sideimage']['url'] ); ?>" alt="<?php echo esc_attr( $sidebar['sideimage']['alt'] ); ?>"></span>
		<h1 id="logo"><a href="#"><?php echo $sidebar['sidetitle'];?></a></h1>
		<p><?php echo $sidebar['sidedescription'];?></p>
	</header>
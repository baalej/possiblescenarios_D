<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $site->title(); ?></title>
	<!-- import css -->
	<?php echo css('assets/css/main.css') ?>
  	<?php echo css('@auto') ?>
  	<?php echo js('assets/js/main.js') ?>
  	<?php echo js('@auto') ?>
</head>
<body>
	<?php snippet('intro') ?>
	<header>
		<h1><a href="<?php echo $site->url(); ?>" id="title"><?php echo $site->title(); ?></a> / <span id="clearTags" onclick="clearTags()">clear tags</span></h1>
		<!-- import tags -->
		<?php snippet('tags'); ?>
	</header>

<?php
	require "../database/config.php";
	require '../functions/functions_cat.php';
	require '../functions/functions_brands.php';
?>
<!doctype html>
<html>
	<head>		
		<title>This is E-commarce</title>
		<script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
		<script>tinymce.init({selector:'textarea'});</script>
		<link type="text/css" rel="stylesheet" href="styles/style.css">
	</head>
	<body>	
		<?php 
		session_start();
		?>
		<div class="main_wrapper">
			<div class="header_wrapper">
				<img id ="logo" src="../images/logo.png" width="90" height="90" />
			</div>
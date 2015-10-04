<?php
	require "database/config.php";
	require 'functions/functions_cat.php';
	require 'functions/functions_brands.php';
	require 'functions/functions.php';
	require 'functions/functions_addCart.php';
	require 'template/header.php';
?>
		<?php require 'template/nav.php';?>
		<div class="main_content">
			<div class="content_sidebar">
				<?php require 'template/side_bar.php';?>
				<div id="side_bar">
					<h3>Daily Deals:</h3>
					<hr/>
					<ul>
						<li><a href="">>> Titan</a></li>
					</ul>
				</div>
			</div>
			<div id="content_area">				
				<?php getPro(); ?>
			</div>
		</div>
		<?php
			require 'template/footer.php';
		?>
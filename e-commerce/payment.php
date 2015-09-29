<?php
	require "database/config.php";
	require 'functions/functions_cat.php';
	require 'functions/functions_brands.php';
	require 'functions/functions.php';
	require 'functions/functions_addCart.php';
	require 'template/header.php';
?>
		<!-- Nav bar start here -->
		<?php require 'template/nav.php';?>
		<!-- Nav bar end here -->

		<!-- content start here -->
		<div class="main_content">
			<div class="content_sidebar">				
				<?php require 'template/side_bar.php';?>
				<div id="side_bar">
					<h3>Watches:</h3>
					<hr/>
					<ul>
						<li><a href="">>> Titan</a></li>
						<li><a href="">>> FastTrack</a></li>
						<li><a href="">>> TomTom</a></li>
						<li><a href="">>> Casio</a></li>
						<li><a href="">>> Fossil</a></li>
					</ul>
				</div>
			</div>
				<div id="content_area">
				<?php 
				if(isset($_POST['payment'])){
					include 'cart/payment_successful.php';
				}else{
					include 'customer/customer_payment.php'; 
				}
				?>

				</div>				
			
		</div>
		<!-- content end here -->
<?php
	require 'template/footer.php';
?>

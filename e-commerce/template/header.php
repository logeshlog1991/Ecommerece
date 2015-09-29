<!doctype html>
<html>
	<head>
		
		<title>This is E-commarce</title>
		<link type="text/css" rel="stylesheet" href="styles/style.css">
	</head>
		<body>
		<?php ?>
	<!-- main content start here -->
		<div class="main_wrapper">

		<!-- Header start here -->
			<div class="header_wrapper">
				<div class="shopping_cart">
					<?php
					if(isset($_SESSION['customer_email'])){
						$c_email = $_SESSION['customer_email'];
						$select = $conn->query("select * from customers where customer_email = '$c_email'");
						if($select->num_rows>0){
							$user_array = array();
							while($row = $select->fetch_assoc()){
								$user_array[] = $row;
							}
							if(count($user_array)){
								foreach($user_array as $c_data){ ?>
									<img id="user" src="customer/customer_img/<?php echo $c_data['customer_image']; ?>" width="20" height="20" /> welcome<b style='color:#58ACFA'>&nbsp;&nbsp;<?php echo $c_data['customer_name']; ?> ! </b> <b>Smart Cart :</b>
							<?php
								 }
							}
						}
					}else{
						echo "Welcome<b style='color:#58ACFA'> Guest !&nbsp;&nbsp;</b>
							<b>Smart Cart :</b>";
					}
					?>			
					<b><img src="images/shop_3.png" width="17" height="17" /></b>
					<b>Cart:</b>
					<b>
					<?php 
						if(!isset($total_pro) || $total_pro == 0 || $total_pro == ''){
							echo 0;
						}else{
							echo $total_pro;
						}
					?> 
					</b>
					<b style="color:#58ACFA">&nbsp;&nbsp;Total Price :&nbsp;</b>
					<b>Rs .
					<?php 
						$cart_price = $total_price['sum(b.product_realprice)'];
						if(!isset($cart_price) || empty($cart_price) || $cart_price == 0){
							echo 0;
						}
						if(isset($new_price)){
						 	echo $new_price;
						}else{
						 	echo $cart_price; 												 	
						} 
					?>
					</b>
				<?php
				if(isset($_SESSION['customer_email'])){
				echo "&nbsp;&nbsp;<b style='color:#58ACFA'>
				<a href='cart.php' style='text-decoration:none;color:#58ACFA'>Go To Cart &nbsp;</a>
				<img src='images/setting_3.png' width='17' height='17' />&nbsp;
				<a href='customer/customer_logout.php' style='text-decoration:none;color:#666666;'>Logout</a>
				</b>";
				}else{
				echo "&nbsp;&nbsp;<b style='color:#58ACFA'>
				<a href='cart.php' style='text-decoration:none;color:#58ACFA'>Go To Cart &nbsp;</a>
				<img src='images/setting_3.png' width='17' height='17' />&nbsp;
				<a href='checkout.php' style='text-decoration:none;color:#666666;'>Login</a>
				</b>";
				}
				?>	 
				
			</div>
				<img id ="logo" src="images/logo.png" width="90" height="90" />
				<!--<img id ="logo_right"width="80" height="80" />-->
			</div>
		<!-- Header end here -->
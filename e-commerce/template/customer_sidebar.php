				<div id="side_bar">
					<h3>My Profile:</h3>
					<hr/>
					<div class="customer_inside">
						<img id="user" src="customer/customer_img/<?php echo $c_data['customer_image']; ?>" width="60" height="60" />
						Welcome <b style='color:#58ACFA'><?php 
						$c_details = $c_data['customer_name'];
						if(!isset($c_details) || empty($c_details) || $c_details == 0 || $c_details == ''){
							echo 0;
						}
						echo $c_details;

						?> ! </b>
						<br/>
						<b>Total Items :</b>
						<b style="color:#58ACFA">
						<?php 
							if(!isset($total_pro) || $total_pro == 0 || $total_pro == ''){
								echo 0;
							}else{
								echo $total_pro;
							}
						?></b>
						<br/>
						<b>Total Price : </b>
						<b style="color:#58ACFA">Rs.
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
					</div>
				</div>
				<div id="side_bar">
					<h3>My Accounts:</h3>
					<hr/>
					<ul>
						<li><a href="my_accounts.php?my_orders"> >> My Orders</a></li>								
						<li><a href="my_accounts.php?edit_accounts"> >> Edit Accounts</a></li>								
						<li><a href="my_accounts.php?change_password"> >> Change Password</a></li>								
						<li><a href="my_accounts.php?delete_account"> >> Delete Account</a></li>								
					</ul>
				</div>
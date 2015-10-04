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
					<form action="cart.php" method="POST">
						<div id="cart_content">
							<div id="cart_inside">
								<h3>Update your cart and Add your Shoping Cart !</h3>
								<hr/>
								<?php
									
								$query = $conn->query("select * from cart as a LEFT JOIN products as b ON a.p_id = b.product_id where a.ip_add = '$ip'");
								$cart_details = array();
								while($row = $query->fetch_assoc()){
									$cart_details[] = $row;
								}								
								?>
								<table align="center" style="margin-top:20px;" width="500px">	
										<thead style="font-style:bold">
											<th>Remove</th>
											<th>Brand</th>
											<th>Product(s)</th>
											<th>Quantity</th>
											<th>Total Price</th>
										</thead>
										<tbody>
										<?php if(count($cart_details)){
											foreach ($cart_details as $cart){		
										?>
											<tr style="height:50px;">
												<td align="center" valign="middle">
													<input type="checkbox" name="remove[]" value="<?php echo $cart['product_id'];?>">
												</td>
												<td align="center">
													<p><?php echo $cart['product_title'];?></p>
												</td>
												<td align="center" valign="middle">
													
													<img src="admin_area/product_images/<?php echo $cart['product_img1']; ?>" width="50" height="50" />
												</td>
												<td align="center">
													<input type="text" size="5" name="qty[]" align="center" value="<?php echo $cart['qty'];?>">
													
												</td>
												<td align="center" valign="middle">
													Rs .  <?php echo $cart['product_realprice'];?>
												</td>
											</tr>
											<?php 
											}
										}
										?> 										
										<tr>
											<td></td>
											<td align="center">
												<input type="submit" value=" Update Cart " name="update">
											</td>
											<td align="center">
												<input type="submit" value=" Continue Shoping " name="continue">
											</td>
											<td align="center">
												<input type="submit" value=" Buy Now " name="checkout">
											</td>
										</tr>
										<tr ></tr><tr></tr>
											<td></td><td></td><td></td><td align="right"><h3>Total Price :</h3> </td>
											 <td align="center">
											 <h3>
											 Rs .  <?php 
												 if(isset($new_price)){
												 	echo $new_price;
												 }else{
												 	echo $total_price['sum(b.product_realprice)']; 												 	
												 } 
											 ?>
											 </h3>
											 </td>
										</tr>
									</tbody>									
								</table>			
							</div>
						</div>		
					</form>			
				</div>			
		</div>
<?php
	require 'template/footer.php';
?>

<?php
//------------update the cart-------------------//
if(isset($_POST['remove'])){
	foreach($_POST['remove'] as $row){
		$query = $conn->query("delete from cart where p_id='$row' and ip_add = '$ip'");
		if($query){
			echo "<script>window.open('cart.php','_self');</script>";
		}else{
			echo "<script>alert('Not deleted');</script>";
		}
	}
}

if(isset($_POST['continue'])){
	echo "<script>window.open('index.php','_self');</script>";
}

if(isset($_POST['checkout'])){
	$_SESSION['checkPay'] = 1;		
	echo "<script>window.open('checkout.php','_self');</script>";
}
?>
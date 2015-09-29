
				
						<div id="cart_content">
							<div id="cart_inside">
								<h3>Pay now with Paypal !</h3>
								<hr/>
								<form action="payment.php" method="post">
								<!-- https://www.sendbox.paypal.com/cgi-bin/webscr -->
								<!-- Identify your business so that you can collect the payments. -->
								<input type="hidden" name="business" value="herschelgomez@xyzzyu.com">

								<!-- Specify a Buy Now button. -->
								<input type="hidden" name="cmd" value="_xclick">

								<!-- Specify details about the item that buyers will purchase. -->
								<input type="hidden" name="item_name" value="Hot Sauce-12oz Bottle">
								<input type="hidden" name="amount" value="<?php echo $total_price['sum(b.product_price)']; ?>">
								<input type="hidden" name="currency_code" value="USD">

								<input type="submit" name="payment" value=" Pay Now ">
								<!-- Display the payment button. -->
								<!-- <input type="image" name="payment" border="0"
								src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
								alt="PayPal - The safer, easier way to pay online">
								<img alt="" border="0" width="1" height="1"
								src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" > -->

 								<!-- <input type="submit" name="payment" value=" Pay Now "> -->
								</form>			
							</div>
						</div>		
					</form>
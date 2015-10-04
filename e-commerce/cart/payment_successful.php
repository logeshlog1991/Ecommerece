						<div id="cart_content">
							<div id="cart_inside">
								<h3>Welcome User you Are Successfully Done our Transaction !</h3>
								<hr/>
								Thank you !	
							</div>
						</div>		
						<?php
							$price_convert = $conn->query("select o.product_realprice as price,o.product_id as proid,l.qty as quanty from cart as l LEFT JOIN products as o ON l.p_id = o.product_id");
							$store_orders = array();
							while($row = $price_convert->fetch_assoc()){
								$store_orders[] = $row;
								$amount = $row['price'];
								$pro_id = $row['proid'];
								$qty = $row['quanty'];
								$value = rand();
								$invoice_no = rand();	
								$status = 'in progress';				
								$trx_id = md5($value);
								$cst_id = $c_data['customer_id'];
								$insert_payment = $conn->query("insert into payments (amount,customer_id,trx_id,payment_date) values ('$amount','$cst_id','$trx_id',now())");
								if($insert_payment){
									$insert_orders = $conn->query("insert into orders (p_id,c_id,qty,invoice_no,status,order_date) values ('$pro_id','$cst_id','$qty','$invoice_no','$status',now())");
									$delete_cart = $conn->query("select c.p_id,c.ip_add,c.qty from cart as c left JOIN orders as d on c.p_id = d.p_id WHERE d.c_id = '$cst_id'");
									
								}
							}
							if($delete_cart->num_rows>0){

										while($row = $delete_cart->fetch_assoc()){
											
											$cartp_id = $row['p_id'];
											$cartip_add = $row['ip_add'];
											$cart_qty = $row['qty'];
										}
										$delete = $conn->query("delete from cart where p_id = '$cartp_id' and ip_add = '$cartip_add' and qty = '$cart_qty'");
									}
						?>	

<?php
//---------add to cart---------------------//
					session_start();
					$ip = $_SERVER['REMOTE_ADDR'];
					if(isset($_GET['add_cart'])){
						
						if(!empty($_GET['add_cart']))
							$pro_id = $_GET['add_cart'];
							$check_cart = $conn->query("select * from cart where ip_add ='$ip' and p_id = '$pro_id'");
						if($check_cart->num_rows>0){
							echo "<script>alert('Already added into cart :(');</script>";
						}else{
							$insert_cart = $conn->query("insert into cart (p_id,ip_add,qty) values ('$pro_id','$ip',1)");
							if($insert_cart){
								header('Location:index.php');
							}
						}
					}else{
						$ip = $_SERVER['REMOTE_ADDR'];			
						$cart_show = $conn->query("select * from cart where ip_add = '$ip'");
						if($cart_show->num_rows >0){
							$price_convert = $conn->query("select sum(b.product_realprice),b.product_id,a.qty from cart as a LEFT JOIN products as b ON a.p_id = b.product_id where a.ip_add = '$ip'");
							$total_price = $price_convert->fetch_assoc();							
							$add_cart_details = array();
							while($details = $cart_show->fetch_assoc()){
								
								$add_cart_details[] = $details;
							}
							$total_pro = $cart_show->num_rows;
						}else{
							$total_price = 0; 
						}
					}
					//--------- update price--------------//
					if(isset($_POST['update'])){															
							$qty = $_POST['qty'];	
							foreach($qty as $row){						
								$query = $conn->query("update cart set qty = '$row'");
							}
							if($query){
								$_SESSION['qty'] = $row;
								$total_val = $total_price['sum(b.product_price)'];
								$new_price = $total_val*$row;
							}
						
					}



?>
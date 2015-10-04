					<?php
					if(isset($_GET['cat'])){
						if(!empty($_GET['cat']))
							$cat = $_GET['cat'];
							//$product = $conn->query("select * from products order by rand() limit 0,6");
							$product = $conn->query("select * from products where product_cat='$cat' limit 0,6");
					}else{
						$product = $conn->query("select * from products order by rand() limit 0,6");
					}
					if(isset($_GET['brand'])){
						if(!empty($_GET['brand']))
							$brand = $_GET['brand'];
						$product = $conn->query("select * from products where product_brand='$brand' limit 0,6");	
					}
					if(isset($_GET['search'])){
						if(!empty($_GET['search']))
							$search = $_GET['search'];
						$product = $conn->query("select * from products where product_keywords ='$search' limit 0,6");	
					}
					if(isset($_GET['pro_id'])){
						if(!empty($_GET['pro_id']))
							$search = $_GET['pro_id'];
						$product = $conn->query("select * from products where product_id ='$search'");	
					}				
					
					//------------view the all products------------//
					if($product->num_rows){
						$product_data = array();
						while($data = $product->fetch_assoc()){
							$product_data[] = $data;
						}
					}
					foreach ($product_data as $key) {
					?>
					<div id="content_inside">
						<?php 
							$month = date('m');
							$year = date('Y');
							$date = date('d');
							$new_time = date('y-m-d');
							$pro_month = substr($key['date'],5,2);
							$pro_year = substr($key['date'],0,4);
							$pro_date = substr($key['date'],8,2);
							$get_date = $key['date'];
							$cal_date = strtotime("+7 day", strtotime("$get_date"));
							$final_date = date("y-m-d", $cal_date);
							if($pro_month <= $month && $pro_year == $year && $final_date >= $new_time){ ?>
								<img id="new" src="images/new.png" style="float:right;" >
						<?php	
							}else{
						?>
								<img id="new" src="images/new.png" style="float:right;display:none;" >
						<?php
							}
						?>						
						<h3 style="text-align:center;"><?php echo ucfirst($key['product_title']); ?></h3>
						<img src="admin_area/product_images/<?php echo $key['product_img1']; ?>" width="190" height="180" />
						<div id="pro_details">
							<p>
							<?php 
								$discount = $key['product_discount'];
								if($discount == 0){
									echo "Rs.&nbsp".$key['product_price'];
								}else{
									echo "<strike>Rs.&nbsp".$key['product_price']."</strike>&nbsp;<b style='color:red;'>".$discount."%</b>&nbsp;&nbsp;Rs.&nbsp<b style='color:#088A29;'>".$key['product_realprice']."</b>";
								}
							?>
							</p>
							<p>Reviews : (55 ratings)</p>
							<p>
								<?php
								if(isset($_GET['pro_id'])){
									echo $key['product_desc'];
								?>
									<a href="index.php?add_cart=<?php echo $key['product_id'];?>"><button name="Add To Cart">&nbsp;Buy Now&nbsp;</button></a><br/><br/>
								<?php
								}
								?>
								<a href="index.php?add_cart=<?php echo $key['product_id'];?>"><button name="Add To Cart">&nbsp;Add To Cart&nbsp;</button></a>
							</p>
							<p>
								<a href="index.php?pro_id=<?php echo $key['product_id'];?>" style="text-decoration:none;">View Details</a>
							</p>
						</div>
					</div>
					<?php
					}
					?>



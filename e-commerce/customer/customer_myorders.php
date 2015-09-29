<div id="cart_content">
	<div id="cart_inside">
		<h3>Customer Orders </h3>
		<hr/>
		<?php 
		$select = $conn->query("select * from orders");
		if($select->num_rows>0){
			$orders = array();
			while($rows = $select->fetch_assoc()){
				$orders[] = $rows;
			}
		}
		?>
		<table align="center" style="margin-top:20px;" width="600px">
									
				<thead style="font-style:bold">
					<th>Sl:no</th>
					<th>Customer Id</th>
					<th>Product Name</th>
					<th>Product</th>
					<th>Quantity</th>
					<th>Invoice No</th>
					<th>Order Date</th>
					<th>Status</th>	
				</thead>
				<tbody>
				<?php if(count($orders)){
					foreach ($orders as $c_order){
						
				?>
					<tr style="height:50px;">
						<td align="center" valign="middle">
							<?php echo $c_order['order_id'];?>
						</td>
						<td align="center" valign="middle">
							<?php echo $c_order['c_id'];?>
						</td>
						<?php
							$p_id = $c_order['p_id'];
							$select = $conn->query("select * from products where product_id = '$p_id'");
							if($select->num_rows>0){
								$row = $select->fetch_assoc();
							}
						?>
						<td align="center" valign="middle">
							<?php echo $row['product_title'];?>
						</td>
						<td align="center">
							<img src="admin_area/product_images/<?php echo $row['product_img1']; ?>" width="50" height="50" />
						</td>
						<td align="center" valign="middle">							
							<?php echo $c_order['qty'];?>
						</td>
						<td align="center" valign="middle">
							<?php echo $c_order['invoice_no'];?>
						</td>
						<td align="center" valign="middle">
							<?php echo $c_order['order_date'];?>
						</td>
						<td align="center" valign="middle">
							<?php 
							$status = $c_order['status'];
							if($status == 'Completed'){
								echo "<b style='color:#088A29'>$status</b>";
							}else{
								echo "<b style='color:#FA5858;'>$status</b>";
							}
							?>
						</td>
					</tr>
					<?php 
					}
				}
				?>
			</tbody>
		</table>
	</div>
</div>
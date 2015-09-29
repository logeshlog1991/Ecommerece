<div id="cart_content">
	<div id="cart_inside">
		<h3>View All Products</h3>
		<hr/>
		<?php 
		$select = $conn->query("select * from payments");
		if($select->num_rows>0){
			$pro_array = array();
			while($rows = $select->fetch_assoc()){
				$pro_array[] = $rows;
			}
		}
		?>
		<table align="center" style="margin-top:20px;" width="580px">
									
				<thead style="font-style:bold">
					<th>Sl:no</th>
					<th>Amount</th>
					<th>Customer Id</th>
					<th>Transcation Id</th>
					<th>Payment Date</th>
					<th>Delete</th>
				</thead>
				<tbody>
				<?php if(count($pro_array)){
					foreach ($pro_array as $product){
						
				?>
					<tr style="height:50px;">
						<td align="center" valign="middle">
							<?php echo $product['payment_id'];?>
						</td>
						<td align="center">
							Rs. <?php echo $product['amount'];?>
						</td>
						<td align="center" valign="middle">							
							<?php echo $product['customer_id'];?>
						</td>
						<td align="center" valign="middle">
							<?php echo $product['trx_id'];?>
						</td>
						<td align="center" valign="middle">
							<?php echo $product['payment_date'];?>
						</td>
						<td align="center" valign="middle">
							<a href="index.php?update_id=<?php echo $product['product_id'];?>" style="text-decoration:none;">Delete</a>
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
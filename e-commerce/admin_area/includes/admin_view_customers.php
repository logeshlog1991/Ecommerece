<div id="cart_content">
	<div id="cart_inside">
		<h3>View All Customers</h3>
		<hr/>
		<?php 
		$select = $conn->query("select * from customers");
		if($select->num_rows>0){
			$pro_array = array();
			while($rows = $select->fetch_assoc()){
				$pro_array[] = $rows;
			}
		}
		?>
		<table align="center" style="margin-top:20px;" width="500px">
									
				<thead style="font-style:bold">
					<th>Sl:no</th>
					<th>Name</th>
					<th>Email</th>
					<th>Image</th>
					<th>Delete</th>	
				</thead>
				<tbody>
				<?php if(count($pro_array)){
					foreach ($pro_array as $product){
						
				?>
					<tr style="height:50px;">
						<td align="center" valign="middle">
							<?php echo $product['customer_id'];?>
						</td>
						<td align="center">
							<?php echo $product['customer_name'];?>
						</td>
						<td align="center" valign="middle">
							<?php echo $product['customer_email'];?>
						</td>
						<td align="center" valign="middle">							
							<img src="../customer/customer_img/<?php echo $product['customer_image']; ?>" width="50" height="50" />
						</td>						
						<td align="center" valign="middle">
							<a href="index.php?cus_delete_id=<?php echo $product['customer_id'];?>" style="text-decoration:none;color:#FA5858">Delete</a>
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
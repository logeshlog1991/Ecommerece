<div id="cart_content">
	<div id="cart_inside">
		<h3>View All Products</h3>
		<hr/>
		<?php 
		$select = $conn->query("select * from products");
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
					<th>Title</th>
					<th>Image</th>
					<th>Price</th>
					<th>Delete</th>
					<th>Edit</th>	
				</thead>
				<tbody>
				<?php if(count($pro_array)){
					foreach ($pro_array as $product){
						
				?>
					<tr style="height:50px;">
						<td align="center" valign="middle">
							<?php echo $product['product_id'];?>
						</td>
						<td align="center">
							<?php echo $product['product_title'];?>
						</td>
						<td align="center" valign="middle">							
							<img src="product_images/<?php echo $product['product_img1']; ?>" width="50" height="50" />
						</td>
						<td align="center" valign="middle">
							$ <?php echo $product['product_price'];?>
						</td>
						<td align="center" valign="middle">
							<a href="index.php?delete_id=<?php echo $product['product_id'];?>" style="text-decoration:none;color:#FA5858">Delete</a>
						</td>
						<td align="center" valign="middle">
							<a href="index.php?update_id=<?php echo $product['product_id'];?>" style="text-decoration:none;">Edit</a>
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
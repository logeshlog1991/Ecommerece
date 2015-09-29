<div id="cart_content">
	<div id="cart_inside">
		<h3>Insert The New Product</h3>
		<hr/>
		<form action="index.php" method="POST" enctype="multipart/form-data">
			<table cellspacing="15" style="margin-top:20px;" width="500" style="margin:0 auto;">
				<tr>
					<td>Product Title</td>
					<td>
						<input placeholder="prdouct Title" type="text" name="product_title"></td>
					</td>
				</tr>
				<tr>
				<td>Product Cat</td>
					<td>
					
						<select name="product_cat">
						<option value="--	">pls select</option>
						<?php if(!count($cat)){
									echo "not data in your array";
							}else{
								foreach($cat as $cat_row){
							?>
									<option value="<?php echo $cat_row['cat_id'];?>"> <?php echo $cat_row['cat_title'];?></option>
							<?php
								}
							}
						?>						
						</select>
					</td>
				</tr>
				<tr>
				<td>Product brand</td>
					<td>
						<input placeholder="prdouct Brand" type="text" name="product_brand"></td>
					</td>
				</tr>
				<tr>
				<tr>
				<td>Product price</td>
					<td>
						<input placeholder="prdouct price" type="text" name="product_price"></td>
					</td>
				</tr>
				<td>Price discount</td>
					<td>
						<input placeholder="prdouct discount" type="text" name="product_discount" required></td>
					</td>
				</tr>
				<td>Product image</td>
					<td>
						<input type="file" name="product_img1"></td>
					</td>
				</tr>
				<tr>
				<td>Product img2</td>
					<td>
						<input type="file" name="product_img2"></td>
					</td>
				</tr>
				<tr>
				<td>Product img3</td>
					<td>
						<input type="file" name="product_img3"></td>
					</td>
				</tr>
				<tr>
				<td>Product Desc</td>
					<td>
						<textarea name="product_desc" rows="10" cols="50"></textarea></td>
					</td>
				</tr>
				<tr>
				<td>Product keyword</td>
					<td>
						<input placeholder="prdouct_keyword" type="text" name="product_keyword"></td>
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" value="Insert_Product" name="insert_product"></td>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>	

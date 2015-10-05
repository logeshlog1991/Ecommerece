<div id="cart_content">
	<div id="cart_inside">
		<?php
			if(isset($_GET['update_id'])){
				$id = $_GET['update_id'];
				$select = $conn->query("select * from products where product_id = '$id'");
				if($select->num_rows>0){
					$data_array = array();
					while($rows = $select->fetch_assoc()){
						$data_array[] = $rows;
					}	
				}	
			}
		?>
		<h3>Update The Products</h3>
		<hr/>
		<form action="index.php" method="POST" enctype="multipart/form-data">
			<table cellspacing="15" style="margin-top:20px;" width="500" style="margin:0 auto;">
				<?php
				if(count($data_array)){
					foreach($data_array as $product_data){
				?>				
				<tr>
					<td>Product Title</td>
					<td>
						<input placeholder="prdouct Title" type="text" name="product_title" value="<?php echo $product_data['product_title'];?>" required></td>
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
						<input placeholder="prdouct Brand" type="text" name="product_brand" value="<?php echo $product_data['product_brand'];?>" required></td>
					</td>
				</tr>
				<tr>
				<td>Product price</td>
					<td>
						<input placeholder="prdouct price" type="text" name="product_price" value="<?php echo $product_data['product_price'];?>" required></td>
					</td>
				</tr>
				<tr>
					<td>Price discount</td>
					<td>
						<input placeholder="prdouct discount" type="text" name="product_discount" value="<?php echo $product_data['product_discount'];?>" required></td>
					</td>
				</tr>
				<tr>
				<td>Product image</td>
					<td>
						<img src="product_images/<?php echo $product_data['product_img1']; ?>" width="50" height="50" /><br/>
						<input type="file" name="product_img1" requied></td>
					</td>
				</tr>
				<tr>
				<td>Product img2</td>
					<td>
						<input type="file" name="product_img2" required></td>
					</td>
				</tr>
				<tr>
				<td>Product img3</td>
					<td>
						<input type="file" name="product_img3" required></td>
					</td>
				</tr>
				<tr>
				<td>Product Desc</td>
					<td>
						<textarea name="product_desc" rows="10" cols="50" value="<?php echo $product_data['product_desc'];?>" required></textarea></td>
					</td>
				</tr>
				<tr>
				<td>Product keyword</td>
					<td>
						<input placeholder="prdouct_keyword" type="text" name="product_keyword" value="<?php echo $product_data['product_keywords'];?>" required></td>
					</td>
				</tr>
				<tr>
				<td>Product Date</td>
					<td>
						<input placeholder="prdouct_date" type="text" name="product_date" value="<?php echo $product_data['date'];?>" required></td>
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" value="Update_Product" name="update_product"></td>
					</td>
				</tr>
				<?php
					}
				}
				?>
			</table>
		</form>
	</div>
</div>	
<?php
	if(isset($_POST['update_product'])){
		$id = $_GET['update_id'];
		$product_title = $_POST['product_title'];
		$product_cat = $_POST['product_cat'];
		$product_brand = $_POST['product_brand'];
		$product_price = $_POST['product_price'];
		$product_discount = $_POST['product_discount'];
		$product_desc = $_POST['product_desc'];
		$status = 'on';
		$product_keyword = $_POST['product_keyword'];
		//-------image upload-----------//
		$product_img1 = $_FILES['product_img1']['name'];
		$product_img2 = $_FILES['product_img2']['name'];
		$product_img3 = $_FILES['product_img3']['name'];
		$product_date = $_POST['product_date'];
		if(!isset($product_date) || empty($product_date) || $product_date == ''){
			$product_date = now();
		}

		$temp_name1 = $_FILES['product_img1']['tmp_name'];
		$temp_name2 = $_FILES['product_img2']['tmp_name'];
		$temp_name3 = $_FILES['product_img2']['tmp_name'];

		if(!isset($product_img1) || empty($product_img1) || $product_img1 == ''){
			$product_img1 = $product_data['product_img1'];
		}

		if($product_discount == 0 || $product_discount == ''){
			$product_discount = $product_price;
		}

		$price = $product_price;
		$amount = $product_discount;
		$newprice = $price - ($price * ($amount/100));
		$product_realprice = $newprice;

		
		move_uploaded_file($temp_name1,"product_images/$product_img1");
		move_uploaded_file($temp_name2,"product_images/$product_img2");
		move_uploaded_file($temp_name3,"product_images/$product_img3");

		//------insert the product details to table----------//

		$insert = $conn->query("update products set product_cat='$product_cat',product_brand='$product_brand',product_title='$product_title',product_price='$product_price',product_discount = '$product_discount',product_realprice = '$product_realprice',product_desc='$product_desc',product_img1='$product_img1',product_img2='$product_img2',product_img3='$product_img1',product_keywords='$product_keyword',date='$prdouct_date' where product_id = '$id'");
		if($insert){
			echo "update";
		}else{
			echo "not updated";
		}
	}
	?>
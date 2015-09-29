<div id="cart_content">
	<div id="cart_inside">
		<?php
			if(isset($_GET['brand_update_id'])){
				$cat_id = $_GET['brand_update_id'];
				$select = $conn->query("select * from brands where brand_id = '$cat_id'");
				if($select->num_rows>0){
					$data_array = array();
					while($rows = $select->fetch_assoc()){
						$data_array[] = $rows;
					}	
				}	
			}
		?>
		<h3>Update The Category</h3>
		<hr/>
		<form action="" method="POST">
			<table cellspacing="15" style="margin-top:20px;" width="500" style="margin:0 auto;">
				<?php
				if(count($data_array)){
					foreach($data_array as $cat_data){
				?>				
				<tr>
					<td>Category Title</td>
					<td>
						<input placeholder="Cat Title" type="text" name="brand_title" value="<?php echo $cat_data['brand_title'];?>" required></td>
					</td>
				</tr>
				
				<tr>
					<td>
						<input type="submit" value="Update_Brand" name="update_brand"></td>
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
if(isset($_POST['update_brand'])){		
	$cat_id = $_GET['brand_update_id'];
	$cat_title = $_POST['brand_title'];
	$insert = $conn->query("update brands set brand_title = '$cat_title' where brand_id = '$cat_id'");
	if($insert){
		echo "<script>window.open('index.php?view_brand','_self');</script>";
	}else{
		echo "not updated";
	}
}
?>
<div id="cart_content">
	<div id="cart_inside">
		<?php
			if(isset($_GET['cat_update_id'])){
				$cat_id = $_GET['cat_update_id'];
				$select = $conn->query("select * from categories where cat_id = '$cat_id'");
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
						<input placeholder="Cat Title" type="text" name="cat_title" value="<?php echo $cat_data['cat_title'];?>" required></td>
					</td>
				</tr>
				
				<tr>
					<td>
						<input type="submit" value="Update_Cat" name="update_cat"></td>
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
if(isset($_POST['update_cat'])){		
	$cat_id = $cat_data['cat_id'];	
	$cat_title = $_POST['cat_title'];
	$insert = $conn->query("update categories set cat_title = '$cat_title' where cat_id = '$cat_id'");
	if($insert){
		echo "<script>window.open('index.php?view_category','_self');</script>";
	}else{
		echo "not updated";
	}
}
?>
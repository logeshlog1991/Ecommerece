<div id="cart_content">
	<div id="cart_inside">
		<h3>Insert The New Brand</h3>
		<hr/>
		<form action="" method="POST">
			<table cellspacing="15" style="margin-top:20px;" width="300" style="margin:0 auto;">
				<tr>
					<td>Brand Name :</td>
					<td>					
						<input type="text" name="brand_name" placeholder="Brand name" required></td>
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" value="insert_brand" name="insert_brand"></td>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>	
<?php
if(isset($_POST['insert_brand'])){	
	$cat_title = $_POST['brand_name'];
	$insert = $conn->query("insert into brands (brand_title) values ('$cat_title')");
	if($insert){
		echo "<script>window.open('index.php?view_brand','_self');</script>";
	}else{
		echo $insert->error;
	}
}
?>
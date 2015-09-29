<?php 
	include 'admin_header.php';
	require '../template/nav.php';
?>
	<div class="main_content">
		<div class="content_sidebar">				
			<?php require '../template/admin_sidebar.php';?>
		</div>
		<div id="content_area">
			<?php
				if(!isset($_SESSION['admin_login'])){
					require 'includes/admin_login.php';
				}
				if(isset($_GET['admin_login'])){
					require 'includes/admin_login.php';
				}
				if(isset($_GET['insert_product'])){
					require 'includes/admin_insert_product.php'; 
				}
				if(isset($_GET['view_product'])){
					require 'includes/admin_view_product.php'; 
				}
				if(isset($_GET['update_id'])){
					require 'includes/admin_update_product.php'; 
				}
				if(isset($_GET['delete_id'])){
					require 'includes/admin_delete_product.php'; 
				}
				if(isset($_GET['insert_category'])){
					require 'includes/admin_insert_category.php'; 
				}
				if(isset($_GET['view_category'])){
					require 'includes/admin_view_category.php'; 
				}
				if(isset($_GET['cat_update_id'])){
					require 'includes/admin_update_category.php'; 
				}
				if(isset($_GET['cat_delete_id'])){
					require 'includes/admin_delete_category.php'; 
				}
				if(isset($_GET['insert_brand'])){
					require 'includes/admin_insert_brand.php'; 
				}
				if(isset($_GET['view_brand'])){
					require 'includes/admin_view_brand.php'; 
				}
				if(isset($_GET['brand_update_id'])){
					require 'includes/admin_update_brand.php'; 
				}
				if(isset($_GET['brand_delete_id'])){
					require 'includes/admin_delete_brand.php'; 
				}
				if(isset($_GET['view_customers'])){
					require 'includes/admin_view_customers.php'; 
				}
				if(isset($_GET['delete_customers'])){
					require 'includes/admin_delete_customers.php'; 
				}
				if(isset($_GET['view_orders'])){
					require 'includes/admin_view_orders.php';
				}
				if(isset($_GET['view_payment'])){
					require 'includes/admin_view_payments.php';
				}
				if(isset($_GET['update_order'])){
					require 'includes/admin_update_orders.php';
				}

			?>

		</div>
	</div>			
<?php 
if(isset($_POST['insert_product'])){

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

	$temp_name1 = $_FILES['product_img1']['tmp_name'];
	$temp_name2 = $_FILES['product_img2']['tmp_name'];
	$temp_name3 = $_FILES['product_img2']['tmp_name'];

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

	$insert = $conn->query("insert into products (product_cat,product_brand,product_title,product_price,product_discount,product_realprice,product_desc,product_img1,product_img2,product_img3,product_keywords,date) 
		values ('$product_cat','$product_brand','$product_title','$product_price','$product_discount','$product_realprice','$product_desc','$product_img1','$product_img2','$product_img3','$product_keyword',NOW())");
	if($insert){
		echo "inserted";
	}else{
		echo "not inserted";
	}
}

if(isset($_POST['insert_category'])){	
	$cat_title = $_POST['cat_name'];
	$insert = $conn->query("insert into categories (cat_title) values ('$cat_title')");
	if($insert){
		echo "<script>window.open('index.php?view_category','_self');</script>";
	}else{
		echo $insert->error;
	}
}


?>
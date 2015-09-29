<?php
	require "database/config.php";
	require 'functions/functions_cat.php';
	require 'functions/functions_brands.php';
	require 'functions/functions.php';
	require 'functions/functions_addCart.php';
	require 'template/header.php';
?>
		<?php require 'template/nav.php';?>
		<div class="main_content">
			<div class="content_sidebar">				
				<?php require 'template/customer_sidebar.php';?>
			</div>
				<div id="content_area">
					<?php
						if(!isset($_SESSION['customer_email'])){
							include 'customer/customer_login.php';
						}
						if(isset($_GET['edit_accounts'])){
							include 'customer/customer_edit.php';
						}
						if(isset($_GET['change_password'])){
							include 'customer/customer_password.php';
						}
						if(isset($_GET['delete_account'])){
							$c_email = $c_data['customer_email'];
							$delete = $conn->query("delete from customers where customer_email = '$c_email'");
							if($delete){
								echo "<script>alert('your account has deleted !');</script>";
							}
						}
						if(isset($_GET['my_orders'])){
							include 'customer/customer_myorders.php';
						}				
					?>
				</div>			
		</div>
		<!-- content end here -->
<?php
	require 'template/footer.php';
?>
<?php
	if(isset($_POST['cupdate'])){
		$c_id = $_POST['cid'];	
		$c_name = $_POST['cname'];
		$c_email = trim($_POST['cemail']);		
		$c_pass = trim($_POST['cpass']);
		$c_country = $_POST['ccountry'];
		$c_city = $_POST['ccity'];		
		$c_contact = $_POST['ccontact'];		
		$c_addr = $_POST['caddr'];		
		$c_ftemp = $_FILES['cimg']['tmp_name']; 
		$c_fname = $_FILES['cimg']['name']; 		
		$upload = 'customer/customer_img/';	
		$time_name = time()."$c_fname";	
		move_uploaded_file($c_ftemp,$upload.time()."$c_fname");					
		$insert = $conn->query("update customers set customer_name = '$c_name',customer_email = '$c_email',customer_pass ='$c_pass',customer_country ='$c_country',customer_city = '$c_city',customer_contact = '$c_contact',customer_address = '$c_addr',customer_image = '$time_name' where customer_id = '$c_id'");
		if($insert){
			header('Location:my_accounts.php');
		}else{
			echo $conn->error;
			echo "not inserted";
		}		
	}

	if(isset($_POST['cpass'])){
			$newpass = trim($_POST['newpass']);
			$cid = $c_data['customer_id'];
			$select = $conn->query("update customers set customer_pass = '$newpass' where customer_id = '$cid'");
	}
?>
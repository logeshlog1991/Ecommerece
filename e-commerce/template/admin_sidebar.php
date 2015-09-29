<?php
if(isset($_SESSION['admin_login'])){
	$c_email = $_SESSION['admin_login'];
	$select = $conn->query("select * from admin where user_email = '$c_email'");
	if($select->num_rows>0){
		$user_array = array();
		while($row = $select->fetch_assoc()){
			$user_array[] = $row;
		}
	}
		if(count($user_array)){
			foreach($user_array as $c_data){ 
?>
		<div id="side_bar">
				<h3>Admin Profile:</h3>
					<hr/>
					<div class="customer_inside">
						<img id="user" src="../admin_area/admin_img/admin_2.png" width="60" height="60" />
						Welcome <b style='color:#58ACFA'>ADMIN</b> <?php echo $c_data['user_email']; ?>
						<b><a href='../admin_area/includes/admin_logout.php' style='text-decoration:none;color:#58ACFA'>  Logout</a></b>
						<br/>
						
					</div>
				</div>
				<div id="side_bar">
					<h3>Manage Products:</h3>
					<hr/>
					<ul>
						<li><a href="index.php?insert_product"> >> Insert New Product</a></li>								
						<li><a href="index.php?view_product"> >> View All Product</a></li>
					</ul>	
				</div>
				<div id="side_bar">
					<h3>Manage Category:</h3>
					<hr/>
					<ul>							
						<li><a href="index.php?insert_category"> >> Insert New Category</a></li>								
						<li><a href="index.php?view_category"> >> View All Categorys</a></li>
					</ul>
				</div>
				<div id="side_bar">
					<h3>Manage Brand:</h3>
					<hr/>
					<ul>
						<li><a href="index.php?insert_brand"> >> Insert New Brand</a></li>
						<li><a href="index.php?view_brand"> >> View All Brand</a></li>
					</ul>
					</div>
				<div id="side_bar">
					<h3>Manage customers:</h3>
					<hr/>
					<ul>	
						<li><a href="index.php?view_customers"> >> View Customers</a></li>
						<li><a href="index.php?view_orders"> >> View Orders</a></li>
						<li><a href="index.php?view_payment"> >> View Payments</a></li>
					</ul>
				</div>
<?php
			}
		}
	}
?>
					
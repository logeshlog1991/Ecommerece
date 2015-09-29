
					<form action="register.php" method="POST" enctype="multipart/form-data">
						<div id="cart_content">
							<div id="cart_inside">
								<h3>Create An Account</h3>
								<hr/>
								<table cellspacing="15" style="margin-top:20px;" width="420px">									
									<tbody>
										<tr>
											<td>Customer Name :</td>
											<td>
												<input type="text" name="cname" required>
											</td>									
										</tr>
										<tr>
											<td>Customer Email :</td>
											<td>
												<input type="text" name="cemail" required>
											</td>									
										</tr>
										<tr>
											<td>Customer Pass :</td>
											<td>
												<input type="text" name="cpass" required>
											</td>									
										</tr>
										<tr>
											<td>Customer Country :</td>
											<td>
												<?php include 'country_name.php'; ?>
											</td>									
										</tr>
										<tr>
											<td>Customer City :</td>
											<td>
												<input type="text" name="ccity" required>
											</td>									
										</tr>
										<tr>
											<td>Customer Contact :</td>
											<td>
												<input type="text" name="ccontact" required>
											</td>									
										</tr>
										<tr>
											<td>Customer Address :</td>
											<td>
												<textarea rows="5" cols="20" name="caddr" required></textarea>
											</td>									
										</tr>
										<tr>
											<td>Customer Image :</td>
											<td>
												<input type="file" name="cimg" required>
											</td>									
										</tr>
										<tr>
											<td></td>
											<td>
												<input type="submit" value="Register" name="register">
											</td>									
										</tr>
									</tbody>									
								</table>			
							</div>
						</div>		
					</form>	
<?php
	if(isset($_POST['register'])){
		$ip = $_SERVER['REMOTE_ADDR'];		
		$c_name = trim($_POST['cname']);
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
		$check = $conn->query("select * from customers where customer_email = '$c_email' and customer_name = '$c_name'");
		if($check->num_rows>0){
			echo "<script>alert('data already exists');</script>";
		}else{			
		$insert = $conn->query("insert into customers (customer_ip,customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address,customer_image) values ('$ip','$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_addr','$time_name')");
			if($insert){
				echo "inserted";
			}else{
				echo $conn->error;
				echo "not inserted";
			}
		}
	}
?>
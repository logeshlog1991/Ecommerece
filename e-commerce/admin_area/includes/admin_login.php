
					<form action="" method="POST">
						<div id="cart_content">
							<div id="cart_inside">
								<h3>Admin Login !</h3>
								<hr/>
								<table cellspacing="15" style="margin-top:20px;" width="280px">									
									<tbody>
										<tr>
											<td>Email :</td>
											<td>
												<input type="text" name="email">
											</td>									
										</tr>
										<tr>
											<td>Password :</td>
											<td>
												<input type="password" name="pass">
											</td>									
										</tr>
										<tr>
											<td></td>
											<td>
												<input type="submit" name="login" value="login"> Or <a href="register.php">Register Here</a>
											</td>									
										</tr>
										<tr>
											<td></td>
											<td>
												<a href="checkout.php?forgot_pass">forgot password</a>
											</td>									
										</tr>
										</tbody>									
								</table>			
							</div>
						</div>		
					</form>	
<?php
if(isset($_POST['login'])){
	if(!empty($_POST['pass']) && !empty($_POST['email'])){
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$select = $conn->query("select * from admin where user_email = '$email' and user_pass = '$pass'");
		if($select->num_rows>0){
			$_SESSION['admin_login'] = $email;
			echo "<script>window.open('index.php','_self');</script>";
		}else{
			echo "<script>window.open('index.php','_self');</script>";
		}	
	}
}

?>
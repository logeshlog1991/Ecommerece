<form action="my_accounts.php" method="POST">
	<div id="cart_content">
		<div id="cart_inside">
			<h3>Change Password !</h3>
			<hr/>
			<table cellspacing="15" style="margin-top:20px;" width="350px">									
				<tbody>
					<tr>
						<td>Old Password :</td>
						<td>
							<input type="text" name="oldpass" value="<?php echo $c_data['customer_pass']; ?>">
						</td>									
					</tr>
					<tr>
						<td>New Password :</td>
						<td>
							<input type="password" name="newpass" required>
						</td>									
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" name="cpass" value="Change Password">
						</td>									
					</tr>										
					</tbody>									
			</table>			
		</div>
	</div>		
</form>	

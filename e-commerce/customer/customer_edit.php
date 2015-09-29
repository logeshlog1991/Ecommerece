					<form action="my_accounts.php" method="POST" enctype="multipart/form-data">
						<div id="cart_content">
							<div id="cart_inside">
								<h3>Edit An Account</h3>
								<hr/>
								<table cellspacing="15" style="margin-top:20px;" width="500px">									
									<tbody>
										<tr>
											<td>Customer Name :</td>
											<td>
												<input type="hidden" name="cid" value="<?php echo $c_data['customer_id']; ?>">
												<input type="text" name="cname" value = "<?php echo $c_data['customer_name']; ?>" required>
											</td>									
										</tr>
										<tr>
											<td>Customer Email :</td>
											<td>
												<input type="text" name="cemail" value="<?php echo $c_data['customer_email']; ?>" required>
											</td>									
										</tr>
										<tr>
											<td>Customer Pass :</td>
											<td>
												<input type="text" name="cpass" value="<?php echo $c_data['customer_pass']; ?>" required>
											</td>									
										</tr>
										<tr>
											<td>Customer Country :</td>
											<td>
												<select name="ccountry">
													<option value="<?php echo $c_data['customer_country']; ?>"><?php echo $c_data['customer_country']; ?></option>
												</select>
											</td>									
										</tr>
										<tr>
											<td>Customer City :</td>
											<td>
												<input type="text" name="ccity" value = "<?php echo $c_data['customer_city']; ?>" required>
											</td>									
										</tr>
										<tr>
											<td>Customer Contact :</td>
											<td>
												<input type="text" name="ccontact" value="<?php echo $c_data['customer_contact']; ?>" required>
											</td>									
										</tr>
										<tr>
											<td>Customer Address :</td>
											<td>
												<textarea rows="5" cols="20" name="caddr" value="<?php echo $c_data['customer_address']; ?>" required></textarea>
											</td>									
										</tr>
										<tr>
											<td>Customer Image :</td>
											<td>
												<img id="user" src="customer/customer_img/<?php echo $c_data['customer_image']; ?>" width="60" height="60" />
												<input type="file" name="cimg" required>
											</td>									
										</tr>
										<tr>
											<td></td>
											<td>
												<input type="submit" value="Update" name="cupdate">
											</td>									
										</tr>
									</tbody>									
								</table>			
							</div>
						</div>		
					</form>	

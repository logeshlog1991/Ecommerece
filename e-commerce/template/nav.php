			<div class="menubar">
				<?php
					if(isset($_SESSION['admin_login'])){
					?>
					<ul>
						<li style="background-color:#6E6E6E;padding:1em .5em;"><a href="#" style="color:white">Welcome</a></li>
						<li><a href="index.php">Admin Panel</a></li>
						<li><a href="index.php">View Product</a></li>
						<li><a href="index.php">View Customer</a></li>
						<li><a href="index.php">Logout</a></li>
					</ul>
					
					<?php
						//require 'includes/admin_login.php';
					}else{

				?>
				<ul>
					<li style="background-color:#6E6E6E;padding:1em .5em;"><a href="#" style="color:white">Home</a></li>
					<li><a href="index.php">AllProducts</a></li>
					<li><a href="my_accounts.php">MyAccounts</a></li>
					<li><a href="register.php">SingUp</a></li>
					<li><a href="cart.php">Shopping Cart</a></li>
					<li><a href="contact.php">Contact Us</a></li>
				</ul>

				<div id="form">
					<form action="index.php" method="GET">
					<input type="text" name="search" placeholder=" search product" required>
					<input type="submit" name="FindPro" value=" Search ">
					</form>
				</div>
				<?php
			}
			?>
			</div>

				<div id="side_bar">
					<h3>Categories:</h3>
					<hr/>
					<ul>
					<?php if(!count($cat)){
							echo "not data in your array";
					}else{
						foreach($cat as $cat_row){
					?>
							<li><a href="index.php?cat=<?php echo $cat_row['cat_id'];?>">>> <?php echo $cat_row['cat_title'];?></a></li>
					<?php
						}
					}
					?>										
					</ul>
				</div>
				<div id="side_bar">
					<h3>Brands:</h3>
					<hr/>
					<ul>
					<?php if(!count($brand)){
							echo "not data in your array";
					}else{
						foreach($brand as $brand_row){
					?>
							<li><a href="index.php?brand=<?php echo $brand_row['brand_id'];?>">>> <?php echo ucfirst($brand_row['brand_title']);?></a></li>
					<?php
						}
					}
					?>	
					</ul>
				</div>
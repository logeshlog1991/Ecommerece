<?php
if(isset($_GET['brand_delete_id'])){
	$id = $_GET['brand_delete_id'];
	$select = $conn->query("delete from brands where brand_id = '$id'");
	if($select){
		echo "<script>window.open('index.php?view_brand','_self');</script>";
	}	
}
?>
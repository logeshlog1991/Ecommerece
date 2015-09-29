<?php
if(isset($_GET['delete_id'])){
	$id = $_GET['delete_id'];
	$select = $conn->query("delete from products where product_id = '$id'");
	if($select){
		header('Location:index.php');
	}	
}
?>
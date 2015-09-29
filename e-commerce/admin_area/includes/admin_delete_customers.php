<?php
if(isset($_GET['cus_delete_id'])){
	$id = $_GET['cus_delete_id'];
	$select = $conn->query("delete from customers where customer_id = '$id'");
	if($select){
		echo "<script>window.open('index.php?view_customer','_self');</script>";
	}	
}
?>
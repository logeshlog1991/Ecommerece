<?php
if(isset($_GET['update_order'])){
	$order_id = $_GET['update_order'];
	$update = $conn->query("update orders set status = 'Completed' where order_id = '$order_id'");
	if($update){
		header('Location:index.php');
	}else{
		echo $order_id->error;
	}
}
?>
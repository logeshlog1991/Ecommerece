<?php
if(isset($_GET['cat_delete_id'])){
	$id = $_GET['cat_delete_id'];
	$select = $conn->query("delete from categories where cat_id = '$id'");
	if($select){
		echo "<script>window.open('index.php?view_category','_self');</script>";
	}	
}
?>
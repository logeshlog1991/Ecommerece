<?php
$query = $conn->query("select * from categories");
if($query->num_rows){
	$cat = array();
	while($row = $query->fetch_assoc()){
		$cat[] = $row;
	}
}

?>
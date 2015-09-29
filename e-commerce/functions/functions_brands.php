<?php
//getting chategories
	$query = $conn->query("select * from brands");
	if($query->num_rows){
		$brand = array();
		while($row = $query->fetch_assoc()){
			$brand[] = $row;
		}
	}

?>
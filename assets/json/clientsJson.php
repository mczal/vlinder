<?php
	$connection = mysqli_connect("localhost","root","","vlinder") or die("Error " . mysqli_error($connection));
	
	$result = mysqli_query($connection,"SELECT client_text as html FROM clients") or die("Error in Selecting " . mysqli_error($connection));
	$rows = array();
	while($r=mysqli_fetch_assoc($result)){
		$rows[]=$r;
	}
	
	mysqli_close($connection);
	echo json_encode($rows);
	
?>
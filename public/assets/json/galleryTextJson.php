<?php
	$connection = mysqli_connect("localhost","root","","vlinder") or die("Error " . mysqli_error($connection));

 //New
 $result;
 if (isset($_GET['id'])){
	 $code = $_GET['id'];
	 $result = mysqli_query($connection,"SELECT gallery_text as html, gallery_img_code as code FROM gallery where gallery_img_code='".$code."'") or die("Error in Selecting " . mysqli_error($connection));
 }else{
	 $result = mysqli_query($connection,"SELECT gallery_text as html, gallery_img_code as code FROM gallery") or die("Error in Selecting " . mysqli_error($connection));
 }
 //--new
	$rows = array();
	while($r=mysqli_fetch_assoc($result)){
		$rows[]=$r;
	}

	mysqli_close($connection);
	echo json_encode($rows);

?>

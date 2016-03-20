<?php
  if (isset($_GET['id'])){
    $code = $_GET['id'];
    //echo $code."<br><br><br></br>";
    $connection = mysqli_connect("localhost","root","","vlinder") or die("Error " . mysqli_error($connection));
    $result = mysqli_query($connection,"SELECT img_url as url FROM gallery_img where img_code='".$code."'") or die("Error in Selecting " . mysqli_error($connection)." <br> query : SELECT img_url as url FROM gallery_img where img_code='".$code."'");
    $rows = array();
    while($r=mysqli_fetch_assoc($result)){
      $rows[]=$r;
    }

    mysqli_close($connection);
    echo json_encode($rows);
  }
?>

<?php
/* $response = array("message"=>"Hello Welcome to Home");
echo json_encode($response); */

//$conn = new mysqli("localhost", "root", "", "angular");
	
include 'config.php';
$sql = "SELECT pm.id, pd.name, pd.description, pi.image FROM `product_master` pm
		LEFT JOIN product_images pi ON pi.product_id = pm.id
		LEFT JOIN product_detail pd ON pd.product_id = pm.id
		WHERE pm.active ='Y' AND pi.active='Y'";
$results = mysqli_query($conn, $sql);
$data = array();
while($row = mysqli_fetch_assoc($results)) {
    $data[] = $row;
}
$json = json_encode( $data );
echo $json;
?>
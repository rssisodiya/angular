<?php
$conn = new mysqli("localhost", "root", "", "angular");
	
$sql = "SELECT name, email, phone FROM users ORDER BY name DESC";
$results = mysqli_query($conn, $sql);
$data = array();

while($row = mysqli_fetch_assoc($results)) {
    $data[] = $row;
}
$json = json_encode( $data );
echo $json;
	
?>
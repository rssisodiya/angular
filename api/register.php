<?php
include 'config.php';
$detail = '';
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$detail['name'] = $request->name;
$detail['email'] = $request->email;
$detail['phone'] = $request->phone;
$response['status'] = '' ;
if(!empty($detail['name'])){
	$sql = 'INSERT INTO users (name,email,phone) VALUES("'.$detail['name'].'", "'.$detail['email'].'", "'.$detail['phone'].'") ';
	$result  = mysqli_query($conn, $sql);
}
if( mysqli_affected_rows($conn) > 0 ){
		$response['status'] = 'Data inserted successfully' ;
}else{
	$response['status'] = "Some error";
}
$output=json_encode($response);
echo $output;
flush();

?>
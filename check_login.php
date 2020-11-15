<?php 
	//Importing Database
	require_once('connection.php');
	if($_SERVER['REQUEST_METHOD'] == 'POST') {

	//mendapatkan nilai dari variabel email 
    $email = $_POST['email'];


	// Mencari User dengan email yang di input
	$sql = "SELECT * FROM tb_login WHERE email = '$email';";

	$r = mysqli_query($con, $sql);

	$result = array();
	$row = mysqli_fetch_array($r);

	array_push($result, array(
		"id_user" => $row['id_user'],
		"username" => $row['username'],
		"password" => $row['password'],
		"email" => $row['email']
	));
	
	echo json_encode($result);
	
	mysqli_close($con);
}
 ?>
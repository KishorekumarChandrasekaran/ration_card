<?php 
	include_once 'header.php';
	$conn = db_connect();
	$where = "`aadhar_number` = '". $_POST['aadhar_number']."' AND `ration_card_number` = '".$_POST['ration_card_number']."'";
	$result = select('*', 'users', $where, $conn);
	echo "<pre>";
	print_r($result);

 ?>
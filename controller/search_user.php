<?php 
	include_once 'header.php';
	print_r($_POST);
	function search_user()
	{
	$conn = db_connect();
	$where = "`aadhar_no` = '".$_POST['aadhar_no']."' AND `card_no` = '".$_POST['card_no']."'";
	$result = select('*', 'users', $where, $conn);
	return $result;
	}
 ?>
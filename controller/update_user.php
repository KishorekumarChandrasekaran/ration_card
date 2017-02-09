<?php 

	include_once 'header.php';
	echo "<pre>";
	print_r($_POST);
	$condition = "`id` = ".$_POST['id'];
	unset($_POST['id']);
	print_r($_POST);
	$conn = db_connect();
	if(update($_POST, 'users', $condition, $conn)){
		echo "updated";
	}else{
		echo "not updated";
	}
	



 ?>
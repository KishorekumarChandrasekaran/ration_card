<?php 
	include_once 'header.php';
	$connect=db_connect();
	
	// print_r($_POST);
	$username = $_POST['name'];
	$password = $_POST['password'];
	$condition = "`user_name` = '".$username."' AND `password` = '".$password."'";
	$result = select("*",'login', $condition, $connect);
	if($result != "empty"){
		echo "loged in";
		header('location:../view/add_user.php');
	}else{
		echo "Invalid credits";
	}
	
 ?>
<?php 
	
	include_once '../model/db.php';
	include_once '../common_files/common_functions.php';

	session_start();
	echo "<pre>";
	print_r($_SESSION);
	print_r($_REQUEST);
	echo "</pre>";
	$user_mail = $_REQUEST['email'];
	$user_pass = $_REQUEST['pass'];
	

	$connection = db_connect();
	$sql = "SELECT * FROM `users` WHERE `email`='".$email."' AND `pass`= '".$pass."'";
	echo $sql;
	$result = execute_query($connection,$sql);
	$user_data = mysqli_fetch_array($result,MYSQLI_ASSOC);
	/*echo "<pre>";
	print_r($user_data);
	echo "</pre>";*/

	if (empty($user_data)) {
		header('Location:../view/login.php?status=User_Does_Not_Exist');
	}
	else{
		$_SESSION['user_data'] = $user_data;
		//print_r($_SESSION);	
		header('Location:../view/home.php');
	}

 ?>
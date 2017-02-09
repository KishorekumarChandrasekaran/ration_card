<?php 

	include_once 'header.php';

	add_user($_POST);
	function add_user($raw_values){
		if(empty($raw_values)){
			header('location: ../view/404.php');
		}else{
			$conn = db_connect();
			if(insert('users', $raw_values, $conn)){
				echo "insered";
			}else{
				echo "not inserted";
			}
		}
	}

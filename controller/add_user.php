<?php 
	include_once '../model/db.php';
	include_once 'common_functions.php';


	$conn = db_connect();
	if(insert('users', $_GET, $conn)){
		echo "inserted";
	}else{
		echo "not inserted";
	}

	

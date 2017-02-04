<?php 
	include_once '../model/db.php';
	include_once 'common_functions.php';
	function get_data()
	{
		$connect = db_connect();
		$column_name="`id`,`name`, `age`, `gender`, `mobile_number`, `Address`, `date`,`aadhar_number`,`ration_card_number`,`ration_card_type`";
		$condition = "";
		return select($column_name, 'users', $condition, $connect);
	}
 ?>
	<?php 
		include_once 'header.php';
		delete_user($_GET);
		$raw_values = $_GET;
		function delete_user($raw_values){
			if(empty($raw_values)){
				echo "no values present";
			}else{
				$conn = db_connect();
				if(delete('users', $raw_values, $conn)){
					echo "User deleted";
					
				}else{
					echo "User Not deleted";
				}
			}
		}

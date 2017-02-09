<?php 
 include_once '../model/db.php';
 include_once 'common_functions.php';
 function select_data($condition = "")
 {
  $conn=db_connect();
  $column_name="*";
  return select($column_name, 'users', $condition, $conn);

 }
 
 ?>
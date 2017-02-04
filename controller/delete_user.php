<?php 

 include_once 'header.php';
 //$id = $_GET['id'];
 $conn = db_connect();
 //$condition = "'id'" = $id";
 if(delete('users',$_GET, $conn)){
 	echo "deleted";
 }else{
 	echo "Not deleted";
 }


 ?>
<?php include_once 'header.php';
 include_once '../controller/view_user_controller.php';
 $data_to_display = get_data();
  ?>
  <table style="width: 100%">
  <tr>
  	<th>name</th>
  	<th>age</th>
  	<th>gender</th>
  	<th>mobile_number</th>
  	<th>Address</th>
  	<th>date</th>
  	<th>aadhar_number</th>
  	<th>ration_card_number</th>
  	<th>ration_card_type</th>
  </tr>
  	<?php 
		foreach ($data_to_display as $key => $value) {
			echo "<tr><td>".$value['name']."</td><td>".$value['age']."</td><td>".$value['gender']."</td><td>".$value['mobile_number']."</td><td>".$value['Address']."</td><td>".$value['date']."</td><td>".$value['aadhar_number']."</td><td>".$value['ration_card_number']."</td><td>".$value['ration_card_type']." </td><td><a href='../controller/delete_user.php?id=".$value['id']."'><button class='btn btn_error'>Delete</button></a> <a href='../controller/edit_user.php?id=".$value['id']."'><button class='btn btn-warning'>Edit</button></a></td><tr>";
		}
 ?>


  </table>






















<?php include_once 'footer.php'; ?>
<?php include_once 'header.php';
 include_once '../controller/view_user.php';
 $return_data= select_data();
 
?>
<table style="width: 100%">
 <tr>
  <th>Name</th>
  <th>Age</th>
  <th>Gender</th>
  <th>Mobile No</th>
  <th>Address</th>
  <th>Date</th>
  <th>Aadhar No</th>
  <th>Card No</th>
  <th>Card Type</th> 
  <th>Action</th>
 </tr> 
 <?php 
  foreach ($return_data as $key => $value) {
    echo "<tr><td>".$value['name']."</td>";
    echo "<td>".$value['age']."</td>";
    echo "<td>".$value['gender']."</td>";
    echo "<td>".$value['mobile_no']."</td>";
    echo "<td>".$value['address']."</td>";
    echo "<td>".$value['dob']."</td>";
    echo "<td>".$value['aadhar_no']."</td>";
    echo "<td>".$value['card_no']."</td>";
    echo "<td>".$value['card_type']."</td>";
    echo "<td><a href='../controller/delete_user.php?id=".$value['id']."' class='btn btn-danger'>Delete</a><a href='edit_user.php?id=".$value['id']."' class='btn btn-warning'>Update</a></td></tr>";

   } 
   ?>
</table>
<?
php include_once 'footer.php';
?>
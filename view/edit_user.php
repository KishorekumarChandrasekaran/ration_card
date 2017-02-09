<?php 
	include_once 'header.php'; 
	include_once '../controller/view_user.php';
	$id = $_GET['id'];
	$condition = "`id`=$id";
	$get_data = select_data($condition);
	$select_data = $get_data[0];
	echo "<pre>";
	print_r($select_data);
	echo "</pre>";
?>



<div class="container">
<form method="POST" action="../controller/update_user.php">
					<input type="hidden" name="id" value="<?php  echo $select_data['id'];?>">
					<input type="text" name="name" class="form-control" placeholder="Name" value="<?php echo $select_data['name'] ?>" required autofocus>
					<input type="number" name="age" class="form-control" placeholder="Age Number"  value="<?php echo $select_data['age'] ?>"  required autofocus>
					<?php 
						if ($select_data['gender'] == "male") {
							echo '<input type="radio" name="gender" value="male" checked="checked" />Male <br>';
							echo '<input type="radio" name="gender" value="female" />Female <br>';
						}else{
							echo '<input type="radio" name="gender" value="male" />Male <br>';
							echo '<input type="radio" name="gender" value="female" checked="checked" />Female <br>';
						}
					?>
					<input type="number" name="mobile_no" class="form-control" placeholder="Mobile Number"   value="<?php echo $select_data['mobile_no'] ?>" required autofocus>
					<input type="date" name="dob" class="form-control" placeholder="DOB"  value="<?php echo $select_data['dob'] ?>" required autofocus>
					<input type="number" name="aadhar_no" class="form-control" placeholder="Adhaar Number"   value="<?php echo $select_data['aadhar_no'] ?>" required autofocus>
					<input type="text" name="card_no" class="form-control" placeholder="card number"   value="<?php echo $select_data['card_no'] ?>" required autofocus>
					<?php 
						if ($select_data['gender'] == "sugar") {
							echo '<input type="radio" name="card_type" value="sugar" checked="checked" />Sugar <br>';
							echo '<input type="radio" name="card_type" value="rice" />Rice <br>';
						}else{
							echo '<input type="radio" name="card_type" value="sugar" />Sugar <br>';
							echo '<input type="radio" name="card_type" value="rice" checked="checked" />Rice <br>';
						}
					?>
					<button type="submit" class="btn btn-success" style="width: 208px;">update</button>
	
</form>

	 
</div>
<?php include_once 'footer.php'; ?>
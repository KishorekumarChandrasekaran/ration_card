<?php include_once 'header.php'; ?>
	<form method="post" action="../controller/add_user.php">
		<table class="table" style="width:44%;">
			<tr>
				<td>
					<p>Name:- </p>
				</td>
				<td>
					<input type="text" name="name" class="form-control" placeholder="Name" required autofocus>
				</td>
			</tr>
					
			<tr>
				<td>
					<p>Age :- </p>
				</td>
				<td>
					<input type="number" name="age" class="form-control" placeholder="Age Number" required autofocus>
				</td>
			</tr>
			<tr>
				<td>
					<p>Gender </p>
				</td>
				<td>
				<form action="">
					<input type="radio" name="gender" value="male"> Male <br>
					<input type="radio" name="gender" value="female"> Female <br>
				</td>
			</tr>
			<tr>
				<td>
					<p>Enter Mobile Number :- </p>
				</td>
				<td>
					<input type="number" name="mobile_no" class="form-control" placeholder="Mobile Number" required autofocus>
				</td>
			</tr>
			<tr>
				<td>
					<p>Address :- </p>
				</td>
				<td>
					<textarea class="form-control" rows="5" name="address" id="address" placeholder="Address"></textarea>
				</td>
			</tr>
			<tr>
				<td>
					<p>Date of birth:- </p>
				</td>
				<td>
					<input type="date" name="dob" class="form-control" placeholder="DOB" required autofocus>
				</td>
			</tr>
			<tr>
				<td>
					<p>Adhaar Number :- </p>
				</td>
				<td>
					<input type="number" name="aadhar_no" class="form-control" placeholder="Adhaar Number" required autofocus>
				</td>
			</tr>
			<tr>
				<td>
					<p>Card number:- </p>
				</td>
				<td>
					<input type="text" name="card_no" class="form-control" placeholder="card number" required autofocus>
				</td>
			</tr>
			<tr>
				<td>
					<p>Ration card type:- </p>
				</td>
				<td>
				<form action="">
					<input type="radio" name="card_type" value="sugar"> Sugar <br>
					<input type="radio" name="card_type" value="rice"> Rice <br>
				</td>
			</tr>
			
			
				<td>
				</td>
				<td>
					<button type="submit" class="btn btn-success" style="width: 208px;">Add User</button>
				</td>
			</tr>
		</table>
	</form>	
<?php include_once 'footer.php'; ?>
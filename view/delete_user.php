<?php include_once 'header.php'; ?>
	<form method="post" action="../controller/delete_user.php">
		<table class="table" style="width:44%;">
			
			<tr>
				<td>
					<p>Aadhar Card :- </p>
				</td>
				<td>
					<input type="number" name="aadhar_no" class="form-control" placeholder="Aadhar Number" required autofocus>
				</td>
			</tr>
			<tr>
				<td>
				</td>
				<td>
					<button type="submit" class="btn btn-success" style="width: 208px;">Delete User</button>
				</td>
			</tr>
		</table>
	</form>
<?php include_once 'footer.php'; ?>
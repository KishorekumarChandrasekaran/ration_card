<?php include_once 'header.php'; ?>
	<form method="post" action="../controller/delete_user.php">

		
			<div style="container">
				<table style="width:100%;">
					<tr>
						<td>
							<h3>Delete By Aadhar Card</h3>
							<input type="search" name="search" class="form-control" placeholder="Search Here" required autofocus>
						</td>
						<td>
							<h3>Delete By Ration Card</h3>
						<input type="search" name="search" class="form-control" placeholder="Ration Card Number" required autofocus>
						</td><br></tr></table>
		</div>
		<div class="container">
						<td style="text-align: center;">
						<button type="submit" class="btn btn-success form-control" style="width: 208px;">Delete User</button></td>
		</div>	
		
	</form>
<?php include_once 'footer.php'; ?>
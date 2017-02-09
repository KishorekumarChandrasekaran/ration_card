<?php 

	include_once 'header.php';
	?>
	
		<form action="../controller/search_user.php" method="POST">
		
			<div class="container">
				<input type="text" id="search" name="aadhar_no" placeholder="Aadhar code" class="form-control" required><br>
				<input type="text" id="search" name="card_no" placeholder="Ration card" class="form-control" required><br>
				<input id="submit" type="submit" value="search" class="form-control btn btn-info" required><br>
			</div>
		</form>
<?php 

	include_once 'footer.php';
	?>

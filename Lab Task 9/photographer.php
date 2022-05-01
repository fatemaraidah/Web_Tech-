<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Event Select</title>
</head>
<body>
	 <style>
     body {
  background-color: mistyrose;
}

	<?php
	$name =""; 
	session_start();
	if(isset( $_SESSION['uname'])){
		$name = $_SESSION['uname'];
	}
	if(empty($name)){
		header("location:LoginPage.php");
	}
	?>

	<div>
		<?php include 'header.php'?>
	</div>

	<br>

	<div style="border: 1px  DimGray; color:DimGray; font-size: 20px;">
		<fieldset>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" novalidate>
				<div>
					<table>
						<tr>
							<td style="width:300px;">
								<br>
								<ul>
									<li><a href="DashBoard.php">Dashboard</a></li>
									<li><a href="OfferService.php">Offer Package Deals</a></li>
									<li><a href="clientrequest.php">Client Request</a></li>
                                    <li><a href="ProfilePage.php">View Profile</a></li>
                                    
                                    <li><a href="ChangeProfilePicture.php">Change Profile Picture</a></li>
                                    <li><a href="ChangePassword.php">Change Password</a></li>
                                    <li><a href="LogOut.php">Logout</a></li>
								</ul>
							</td>
						
						<div>
						<td>
								<fieldset style="width:300px; height:300px;color: DimGray;">
									<legend><h2>Requests For</h2></legend>
									<table>
										<tr>
											<ul>
											<li><a href="photographer.php">Wedding Photography</a></li>
												<li><a href="cinematography.php">Cinematography</a></li>
												<li><a href="weddingshoot.php">Wedding Shoot</a></li>
												<li><a href="destinationwedding.php">Destination Wedding</a></li>
												
											</ul>
										</tr>										
									</table> <br>
								</fieldset>
							</td>
        
							<td>
								<fieldset style="width:300px; height:300px;">
									<legend><h2>Check</h2></legend>
									<table>
										<tr>
											<ul>
											<li><a href="review.php">Client Review</a></li>
												<li><a href="portfolio.php">Portfolio</a></li>
												<li><a href="OfferedRequest.php">Offered Request</a></li>
												
											</ul>
										</tr>										
									</table> <br>
								</fieldset>
							</td>
						</tr>
					</table>
				</div>
			</form>
		</fieldset>
	</div>

	<div align="center">
		<?php include 'footer.php'?>
	</div>
</body>
</html>
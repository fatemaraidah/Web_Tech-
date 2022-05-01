<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Vendor Type</title>
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
	<div style="border: 1px solid blue; color: blue; font-size: 20px;">
		<fieldset>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" novalidate>
				<div>
					<table>
						<tr>
							<td style="width:300px;">
								<br>
								<ul>
									<li><a href="DashBoard.php">Dashboard</a></li>
									<li><a href="OfferService.php">Offer Service</a></li>
									<li><a href="clientrequest.php">Client Request</a></li>
                                    <li><a href="ProfilePage.php">View Profile</a></li>
                                    
                                    <li><a href="ChangeProfilePicture.php">Change Profile Picture</a></li>
                                    <li><a href="ChangePassword.php">Change Password</a></li>
                                    <li><a href="LogOut.php">Logout</a></li>
								</ul>
							</td>

							<td>
								<fieldset style="width:300px; height:300px;">
									<legend><h2>weddingrequest</h2></legend>
									<table>
										<tr>
											<ul>
												<li><a href="Photography.php">Photographer</a></li>
												<li><a href="Decoration.php">Decorator</a></li>
												<li><a href="Caterer.php">Caterer</a></li>
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

	<br>

	<div align="center">
		<?php include 'footer.php'?>
	</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Event Select</title>
</head>
<style>
	* {
  box-sizing: border-box;
}

.columns {
  float: left;
  width: 33.3%;
  padding: 8px;
}

.price {
  list-style-type: none;
  border: 1px solid #eee;
  margin: 0;
  padding: 0;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}

.price:hover {
  box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
}

.price .header {
  background-color: #111;
  color: white;
  font-size: 25px;
}

.price li {
  border-bottom: 1px solid #eee;
  padding: 20px;
  text-align: center;
}

.price .grey {
  background-color: #eee;
  font-size: 20px;
}

.button {
  background-color: #04AA6D;
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  font-size: 18px;
}

@media only screen and (max-width: 600px) {
  .columns {
    width: 100%;
  }
}
</style>
<body>

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
							<td style="width:300px; height:900px">
								<br>
								<ul>
									<li><a href="DashBoard.php">Dashboard</a></li>
									<li><a href="EventSelect.php">Select Event</a></li>
                  <li><a href="ProfilePage.php">View Profile</a></li>
                  <li><a href="EditProfile.php">Edit Profile</a></li>
                  <li><a href="ChangeProfilePicture.php">Change Profile Picture</a></li>
                  <li><a href="ChangePassword.php">Change Password</a></li>
                  <li><a href="LogOut.php">Logout</a></li>
								</ul>
							</td>

							<td>
								<fieldset style="width: 600px; height: 600px;">
									<legend><h2>Requests</h2></legend>
									<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" novalidate>
										<table>
											<tr>
												<td>
													<div class="columns">
													  <ul class="price">
													    <li class="header" style="background-color:#04AA6D">Customer 2</li>
													    <li class="grey">$ 800</li>
													    <li>Videographer</li>
													    <li class="grey"><a href="clientrequest.php" class="button">Approve</a></li>
													    <li class="grey"><a href="DashBoard.php" class="button">Reject</a></li>
													  </ul>
													</div>

													<div class="columns">
													  <ul class="price">
													  	<li class="header">Customer 1</li>
													    <li class="grey">$ 1000</li>
													    <li>Potographer</li>
													    <li>Music Pros</li>
													    <li class="grey"><a href="clientrequest.php" class="button">Approve</a></li>
													    <li class="grey"><a href="DashBoard.php" class="button">Reject</a></li>										    
													  </ul>
													</div>

													<div class="columns">
													  <ul class="price">
													    <li class="header">Premium</li>
													    <li class="grey">$ 2000</li>
													    <li>Videographer</li>
													    <li>Vanue</li>
													    <li>Attire</li>
													    <li class="grey"><a href="clientrequest.php" class="button">Approve</a></li>
													    <li class="grey"><a href="DashBoard.php" class="button">Reject</a></li>	
													  </ul>
													</div>
												</td>
											</tr>
										</table>
									</form>
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
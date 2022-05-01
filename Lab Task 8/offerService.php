<?php
$name = "";
$l = $im = ""; 
session_start();
if(isset( $_SESSION['uname'])){
  $name = $_SESSION['uname'];
}
if(empty($name)){
    header("location:LoginPage.php");
}
    $info = file_get_contents("data.json");
    $info = json_decode($info);
    foreach ($info as $Info) {
      $un = $Info->User_Name;
    if($un==$name){
       $im = $Info->Image ;

      }
    }
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <title>Change Profile Picture</title>
<div>
<body>
    <body>
     <style>
     body {
  background-color: lavender;
}
<div>
<div>
    <div>
        <?php include 'header.php'; ?>
    </div>
<div>
<div>
<div>
    <div class="full-page">
        <div style="border: 5px solid RosyBrown; width: 25%; height: 250px;margin-top: 140px; color: black; font-size: 20px; float: left">
            <ul>
                <li ><a href='Dashboard.php' style= "color:black;">Dashboard </a></li>
                <li><a href='portfolio.php' style= "color:black;>Portfolio</a></li>
                <li><a href='OfferService.php' style= "color:black;>Offer Package Deals</a></li>
                <li><a href='clientrequest.php' style= "color:black;">Client Request</a></li>
                <li ><a href='ProfilePage.php' style= "color:black;">View Profile  </a></li>
                
                <li ><a href='ChangeProfilePicture.php' style= "color:black;">Change Profile Picture </a></li>
                <li ><a href='ChangePassword.php' style= "color:black;">Change Password  </a></li>
                <li ><a href='LogOut.php' style= "color:black;">Logout  </a></li>
            </ul>         
        </div>

    <div class="full-page3">
        <div style="border: 10px solid RosyBrown; width: 25%; height: 110px;margin-top: 150px; margin-left: 20px; color: black; font-size: 20px; float: left">
            <ul>
                <li ><a href='showAllVendors.php' style= "color:black;">Show All Vendors </a></li>
                
            </ul>         
        </div>

    </div>

<div>
<!DOCTYPE html>
<html>
<head>
<style>

p {
  border: 2px solid black;
  outline: RosyBrown solid 20px;
  margin: auto;  
  padding: 25px;
  text-align: center;
  background-color: LavenderBlush;
}


</style>
</head>
<body>

<h2>SnapShot Vendor Packages</h2>
<p> Showing all the package offers and their details for any Update</p>

</body>
</html>

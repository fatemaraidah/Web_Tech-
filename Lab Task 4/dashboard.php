<?php
$name =""; 
session_start();
if(isset( $_SESSION['uname'])){
    $name = $_SESSION['uname'];
}
if(empty($name)){
    header("location:login page.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>DashBoard</title>

</head>
<body >
    <div class="full-page">
            <?php include 'header.php'; ?>

        <div style="border: 1px solid blue; width: 25%; height: 500px;margin-top: 140px; color: blue; font-size: 30px; float: left">
                    <ul>
                        <li ><a href='dashboard.php' style= "color:blue;">Dashboard </a></li>
                        <li ><a href='profile page.php' style= "color:blue;">View Profile  </a></li>
                        <li ><a href='editProfile.php' style= "color:blue;">Edit Profile  </a></li>
                        <li ><a href='changeProPic.php' style= "color:blue;">Change Profile Picture </a></li>
                        <li ><a href='change password.php' style= "color:blue;">Change Password  </a></li>
                        <li ><a href='LogOut.php' style= "color:blue;">Logout  </a></li>
                    </ul>           
</div>
        <div style="border: 1px solid blue; width: 74%; height: 500px;margin-top: 140px;color: blue; font-size: 30px; float: left; padding-left: 10px">
            <h1> Welcome <?php echo $name?> </h1>
        </div>
 </div>
<?php include 'footer.php'; ?>           
</body>
</html>
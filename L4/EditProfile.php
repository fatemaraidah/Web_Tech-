<?php
$name =""; 
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
               $n = $Info->Name;
               $e = $Info->Email ;
               $g = $Info->Gender ;
               $db =$Info->Date_of_Birth ;
               $im = $Info->Image ;

              }
            }

if(isset ($_POST['Submit'])){
            require("user.class.php");
            $user = new User('data.json');
            $user->updateUser($name,'Name',$_POST['name']);
            $user->updateUser($name,'Email',$_POST['email']);
            $user->updateUser($name,'Gender',$_POST['gender']);
            $user->updateUser($name,'Date_of_Birth',$_POST['dob']);
            header("location:ProfilePage.php");
}            
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title>Edit Profile</title>

</head>
<body >
    <div class="full-page">
            <?php include'header.php';?> 
        <div style="border: 1px solid blue; width: 25%; height: 500px;margin-top: 140px; color: blue; font-size: 30px; float: left">
                    <ul>
                        <li ><a href='Dashboard.php' style= "color:blue;">Dashboard </a></li>
                        <li ><a href='ProfilePage.php' style= "color:blue;">View Profile  </a></li>
                        <li ><a href='EditProfile.php' style= "color:blue;">Edit Profile  </a></li>
                        <li ><a href='ChangeProfilePicture.php' style= "color:blue;">Change Profile Picture </a></li>
                        <li ><a href='ChangePassword.php' style= "color:blue;">Change Password  </a></li>
                        <li ><a href='LogOut.php' style= "color:blue;">Logout  </a></li>
                    </ul>        	
</div>
        <div style="border: 1px solid blue; width: 74%; height: 500px;margin-top: 140px;color: blue; font-size: 25px+; float: left; padding-left: 10px">
    <form method= "post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <fieldset>
        <legend> <h3 class="main-heading">Edit Profile</h3> </legend>
        <label for="name">Name  : </label><input type="text" name="name" value = "<?php echo $n?>" ><br>
        <span class="underline">______________________</span><br> 
        <label for="email">Email  : </label><input type="text" name="email" value = "<?php echo $e?>" ><br>
        <span class="underline">______________________</span><br> 
        <label for="gender">Gender  : </label>        
        <input type="radio" name="gender" value="Male" required <?php if($g=="Male"){echo "checked";}?> >Male
        <input type="radio" name="gender" value="Female" required <?php if($g=="Female"){echo "checked";}?> >Female
        <input type="radio" name="gender" value="Other" required <?php if($g=="Other"){echo "checked";}?> >Other<br>
        <span class="underline">______________________</span><br>
        <label for="dob">Date of Birth  : </label><input type="date" name="dob" value = "<?php echo $db?>" ><br>
        <span class="underline">______________________</span><br><br>          

        <input type="submit" name="Submit" value="Submit">
    </fieldset>
</form>
        </div>
 </div>
<?php include'footer.php';?>          
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Change Password</title>

</head>
<body>
     <style>
     body {
  background-color: thistle;
}

<?php

$Err = $pErr = $npErr = $cpErr = $h = "";
$p = $np =$cp = "";
$name =""; 
session_start();
if(isset( $_SESSION['uname'])){
	$name = $_SESSION['uname'];
}
if(empty($name)){
	header("location:LoginPage.php");
}
if(isset ($_POST['Submit'])){
	$p = $_POST['pass'];
	$np = $_POST['npass'];
	$cp = $_POST['cpass'];

if(empty($p) || empty($np) || empty($cp)){
		$Err = "Please fill up all the informations!";
	}
	else{ 
		if(!preg_match(	"/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/", $np)){
		$npErr =" Minimum eight characters, at least one letter, one number and one special character!";
	     }
	     else{  
		    $cu = "jb";
            $info = file_get_contents("data.json");
            $info = json_decode($info);
            foreach ($info as $Info) {
              $un = $Info->User_Name;
              $pn = $Info->Password;
              if($un==$name && $pn==$p){
               $cu = "";
              }
            }
		if(!empty($cu)){
          $pErr ="Password doesn't match with the current password!";
		}
		else{
	    if(!strcmp($p, $np)){
          $npErr = "New Password should not be same as the Current Password!";
	     }
	     else{
	    if(strcmp($np, $cp))
	     {
	     	$cpErr = "New Password must match with the Retyped Password!";
	      }
	      else{
	       require("user.class.php");
           $user = new User('data.json');
           $user->updateUser($name,'Password',$np);
           $h = "Password is changed.";
	      }
	  }
	   }  
	 }
	}
}
?>


<div>
	<?php include 'header.php'; ?>
</div>

<div class="full-page">            
    <div style="border: 1px solid blue ; width: 25%; height: 500px;margin-top: 140px; color: blue; font-size: 25px; float:left">
        <ul>
            <li ><a href='Dashboard.php' style= "color:blue;">Dashboard </a></li>
            <li><a href="OfferService.php">Offer Package Deals</a></li>
            <li><a href="clientrequest.php">Client Request</a></li>
            <li ><a href='ProfilePage.php' style= "color:blue;">View Profile  </a></li>
            
            <li ><a href='ChangeProfilePicture.php' style= "color:blue;">Change Profile Picture </a></li>
            <li ><a href='ChangePassword.php' style= "color:blue;">Change Password  </a></li>
            <li ><a href='LogOut.php' style= "color:blue;">Logout  </a></li>
        </ul>        	
	</div>
</div>

<div style="border: 1px solid blue; width: 74%; height: 500px;margin-top: 140px;color: blue; font-size: 25px; float: left; padding-left: 10px">    
    <form method= "post" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<fieldset>
	        <legend> <h3 class="main-heading">Change Password</h3> </legend>
	        <label for="pass"> <b>Current Password :</b> </label>
	        <input type="text" name="pass"><span style="color: red; font-size: 15px">*<?php echo $pErr?><br></span>
	        <label for="npass"style="color: green"> <b>New Password :</b> </label>
	        <input type="text" name="npass"><span style="color: red; font-size: 15px">*<?php echo $npErr?><br></span> 
	        <label for="cpass" style="color: red"> <b>Retype New Password :</b> </label>
	        <input type="text" name="cpass"><span style="color: red; font-size: 15px">*<?php echo $cpErr?><br></span>     
	        <span class="underline">______________________</span><br><br> 
	        <label style="color: red; font-size: 15px"><?php echo $Err ?></label>  <br>
	        <input type="submit" name="Submit" value="Submit">
	    </fieldset>
    	<h3><?php echo $h ?></h3>
    </form> 
</div>

<div>
	<?php include 'footer.php'; ?>
</div>
</body>
</html>
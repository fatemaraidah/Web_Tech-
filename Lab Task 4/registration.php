<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registration Page</title>

</head>
<body>
<?php
$success = "";
if(isset ($_POST['Submit'])){
 $data = array(
         "Name" =>$_POST['name'],
         "Email" =>$_POST['email'],
         "User_Name" =>$_POST['uname'],
         "Password" =>$_POST['pass'],
         "Gender" =>$_POST['gender'],
         "Date_of_Birth" =>$_POST['dob'],
         "Image" => "images/images.png"
          );
                 require("user.class.php");
            $user = new User('data.json');
            $user->insertNewUser($data);
            $success = "Your account has been created. Please go to login page.";
}

else if(isset ($_POST['Reset'])){
        $_POST['name'] = "";
        $_POST['email'] = "";
        $_POST['uname'] = "";
        $_POST['pass'] = "";
        $_POST['cpass'] = "";
        $_POST['gender'] = "";
        $_POST['dob'] = "";  
}

?>  

<div class="full-page">
        <div class="sub-page">
           <?php include'header.php';?> 
                <div class="row">
                <div class="col-1">
                    <div class="Registrationform-box">
                        <div class="form">   
     <form method= "post" class="register-form"  action="<?php echo $_SERVER['PHP_SELF'];?>">
    <fieldset>
        <legend> <h3 class="main-heading">REGISTRATION</h3> </legend>
        <label for="name">Name  : </label>
        <input type="text" name="name"><br>
        <hr>
        <label for="email">Email  : </label>
        <input type="text" name="email"><br>
        <hr>
        <label for="uname">User Name  : </label>
        <input type="text" name="uname"><br>
        <hr>
        <label for="pass">Password  : </label>
        <input type="text" name="pass"><br>
        <hr>
        <label for="cpass">Conform Password  : </label>
        <input type="text" name="cpass"><br>
        <hr>
    <fieldset>
        <legend> Gender </legend>
        <input type="radio" name="gender" value="Male" >Male
        <input type="radio" name="gender" value="Female">Female
        <input type="radio" name="gender" value="Other">Other
    </fieldset>
        <hr>
        <fieldset>
        <legend> Date of Birth </legend>
        <input type="date" name="dob">
    </fieldset>
        <hr>
        <input type="submit" name="Submit" value="Submit">
        <input type="reset" name="Reset" value="Reset"><br>
        <label><?php echo $success ?></label>
    </fieldset>
</form>
    </div>
 </div>
 </div>
</div>
              
            </div>
 <?php include'footer.php';?> 
</body>
</html>
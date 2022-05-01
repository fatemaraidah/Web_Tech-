
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <script src="JS/Form_Validation.js"></script>
</head>
<body>

     <style>
     body {
  background-color: lavender;
}

    <?php
    $nameErr = $passErr = $l = "";

    if(isset ($_POST['Submit'])){
    	$n = $_POST['uname'];
    	$p = $_POST['pass'];
    	if(empty($n)){
    		$nameErr = "Please Enter Your Name";
    	}
    	else{
    		if(strlen($n)<2){
    	     	$nameErr = "User Name should contains at least two characters";
             }
    	    else{
    	     	if(!preg_match("/^[a-zA-Z0-9_]+([a-zA-Z0-9_]*[.-]?[a-zA-Z0-9_]*)*[a-zA-Z0-9_]+$/", $n)){
    		$nameErr =" User Name can contain alpha numeric characters, period, dash or underscore only. Please renter user name.";
    	     	}
    	   }
    	}
    	if(empty($p)){
    		$passErr = "Please Enter Password";
    	}
    	
    	else{
    		if(!preg_match(	"/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/", $p)){
    		$passErr =" Minimum eight characters, at least one letter, one number and one special character";
    	     }
             else{
                 $cu = $cp = "jb";
                $info = file_get_contents("data.json");
                $info = json_decode($info);
                foreach ($info as $Info) {
                  $un = $Info->User_Name;
                  if($un==$n){
                   $cu = "";
                  }
                }
                foreach ($info as $Infos) {
                  $pn = $Infos->Password;
                  if($pn==$p){
                   $cp = "";
                  }
                }            
                if(empty($cu) && empty($cp)){
                    session_start();
                 $_SESSION['uname']  = $n; 
                 if(isset($_POST['remember'])){
                  setcookie("uname", $n, time()+60*60*7);
                  setcookie("pass", $p, time()+60*60*7);
                 }
                header("location:DashBoard.php");
                 }
            else{
              $l = "Invalid User Name Or Password!";
             }
            }
    	}

    }

	?>

    <div class="full-page">
        <div class="sub-page">
<?php include'header.php';?>

            </div>


	            <div class="row">
                <div class="col-1">
                    <div class="form-box">
                        <div class="form">
                          
    <form class="login-form" color="blue" method= "post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	<fieldset>
        <legend> <h2 class="main-heading">Login</h2> </legend>
        <label><span style="color: red"><?php echo $l ?></span></label><br><br>
        <label for="name"> <b>User Name :</b> </label>
        <input type="text" name="fname" id="fname" onblur="checkName()" onkeyup="checkName()">
                                    <br>
                                    <span class="red">
                                        <p id="nameErr">
                                            <?php
                                            if ($nameErr) {
                                                echo $nameErr;
                                            }
                                            ?>
                                        </p>
                                    </span>
                                    <hr>

        <label for="pass"> <b>Password :</b> </label>
        <input type="text" name="pass" id="pass" onblur="checkPass()">
                                    <br>
                                    <span class="red">
                                        <p id="passErr">
                                            <?php
                                            if ($passErr) {
                                                echo $passErr;
                                            }
                                            ?>
                                        </p>
                                    </span>
                                    <hr>
           
        <span class="underline">____________________________________________________________________</span><br><br>
        
        <input type="checkbox" name="remember" value =1 > <label for="remember"> Remember me</label><br>   
        <input type="submit" name="Submit" value="Submit">
        <a href="ForgotPassword.php">Forgot Password?</a>
    </fieldset>
    </form> 
    </div>
 </div>
 </div>
</div>
<?php include'footer.php';?>
</body>
</html>
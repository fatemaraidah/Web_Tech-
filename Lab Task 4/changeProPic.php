<?php
$name = "";
$l = $im = ""; 
session_start();
if(isset( $_SESSION['uname'])){
    $name = $_SESSION['uname'];
}
if(empty($name)){
    header("location:login page.php");
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

</head>
<body >
    <div class="full-page">
            <?php include'header.php';?>
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
        <div style="border: 1px solid blue; width: 74%; height: 500px;margin-top: 140px;color: blue; font-size: 25px; float: left; padding-left: 10px">
    <form method= "post" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
          <fieldset>
  <legend> <h3 class="main-heading">PROFILE PICTURE</h3> </legend>
  <img src="<?php echo $im?> "><br>
  <input type="file" name="fileToUpload" id="fileToUpload"><br>
  <hr>
  <label for="name"><?php echo $l?> </label><br> 
  <input type="submit" value="Submit" name="submit"><br>
  
</fieldset>
</form>

        </div>
 </div>
<?php include'footer.php';?>          
</body>
</html>

<?php
$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST["submit"]) && isset($_FILES["fileToUpload"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    $uploadOk = 1;
     if ($_FILES["fileToUpload"]["size"] > 4000000) {
        echo "Sorry, the file is too large.";
        $uploadOk = 0;
      }
      else{
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
            echo "Only JPG, JPEG & PNG files are allowed.";
            $uploadOk = 0;
        }
        else{
          if ($uploadOk == 0) {
          echo "Sorry, the file was not uploaded.";
          } else {
                  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    $img = "images/".htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]));
                               require("user.class.php");
                               $user = new User('data.json');
                              $user->updateUser($name,'Image',$img);
                    header("location:ProfilePage.php");
                    $l =  "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                  } else {
                      echo "Sorry, there was an error uploading your file.";
                    }
                  }
                }
        }
      }
   else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}
?>
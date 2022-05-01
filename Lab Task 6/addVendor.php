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

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <?php 
        include "nav.php";

     ?>
   

 <form action="controller/createVendor.php" method="POST" enctype="multipart/form-data">
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="Package">Package:</label><br>
  <input type="text" id="package" name="package"><br>
  <label for="Details">Details:</label><br>
  <input type="text" id="details" name="details"><br>
  <label for="Price">Price:</label><br>
  <input type="Price" id="price" name="price"><br>
  <input type="file" name="image"><br><br>
  <input type="submit" name = "createVendor" value="Create">
  <input type="reset"> 
</form> 

</body>
</html>


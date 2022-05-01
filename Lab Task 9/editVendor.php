<?php 

require_once 'controller/VendorInfo.php';
$student = fetchVendor($_GET['id']);


 include "nav.php";



 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <form action="controller/updateVendor.php" method="POST" enctype="multipart/form-data">
  <label for="name">name:</label><br>
  <input value="<?php echo $student['name'] ?>" type="text" id="name" name="name"><br>
  <label for="package">package:</label><br>
  <input value="<?php echo $student['package'] ?>" type="text" id="package" name="package"><br>
  <label for="details">details:</label><br>
  <input value="<?php echo $student['details'] ?>" type="text" id="details" name="details"><br>
  <label for="name">price:</label><br>
  <input value="<?php echo $student['price'] ?>" type="text" id="price" name="price"><br>
  <input type="file" name="image"><br><br>
  <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
  <input type="submit" name = "updateVendor" value="Update">
  <input type="reset"> 
</form> 

<body>
     <style>
     body {
  background-color: lavender;
}
</body>
</html>


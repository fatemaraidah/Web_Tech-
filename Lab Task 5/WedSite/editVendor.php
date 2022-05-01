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
  <label for="name">Name:</label><br>
  <input value="<?php echo $student['Name'] ?>" type="text" id="name" name="name"><br>
  <label for="Package">Package:</label><br>
  <input value="<?php echo $student['Package'] ?>" type="text" id="Package" name="Package"><br>
  <label for="Details">Details:</label><br>
  <input value="<?php echo $student['Details'] ?>" type="text" id="Details" name="Details"><br>
  <label for="name">Price:</label><br>
  <input value="<?php echo $student['Price'] ?>" type="text" id="Price" name="Price"><br>
  <input type="file" name="image"><br><br>
  <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
  <input type="submit" name = "updateVendor" value="Update">
  <input type="reset"> 
</form> 

</body>
</html>


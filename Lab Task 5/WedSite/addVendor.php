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
  <input type="text" id="Package" name="Package"><br>
  <label for="Details">Details:</label><br>
  <input type="text" id="username" name="username"><br>
  <label for="Price">Price:</label><br>
  <input type="Price" id="Price" name="Price"><br>
  <input type="file" name="image"><br><br>
  <input type="submit" name = "createVendor" value="Create">
  <input type="reset"> 
</form> 

</body>
</html>


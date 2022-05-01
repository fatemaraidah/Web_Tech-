<?php  
require_once 'controller/VendorInfo.php';

$vendor = fetchVendor($_GET['id']);


    include "nav.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<tr>
		<th>name</th>
		<th>package</th>
		<th>details</th>
		<th>password</th>
		<th>image</th>
	</tr>
	<tr>
		<td><a href="showvendor.php?id=<?php echo $vendor['id'] ?>"><?php echo $vendor['name'] ?></a></td>
		<td><?php echo $vendor['package'] ?></td>
		<td><?php echo $vendor['details'] ?></td>
		<td><?php echo $vendor['price'] ?></td>
		<td><img width="100px" src="uploads/<?php echo $vendor['image'] ?>" alt="<?php echo $vendor['name'] ?>"></td>
	</tr>

</table>


</body>
</html>
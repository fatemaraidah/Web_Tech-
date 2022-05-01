<?php  
require_once 'controller/VendorInfo.php';

$vendors = fetchAllVendors();


    include "nav.php";



?>
<!DOCTYPE html>
<html>
<head>
		<style>
  background-color: thistle;
  opacity: 0.3;
</style>
	<title></title>
</head>
<body>

<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Package</th>
			<th>Details</th>
			<th>Price</th>
			<th>Image</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($vendors as $i => $vendor): ?>
			<tr>
				<td><a href="showvendor.php?id=<?php echo $vendor['ID'] ?>"><?php echo $vendor['Name'] ?></a></td>
				<td><?php echo $vendor['Package'] ?></td>
				<td><?php echo $vendor['Details'] ?></td>
				<td><?php echo $vendor['Price'] ?></td>
				<td><img width="100px" src="uploads/<?php echo $vendor['image'] ?>" alt="<?php echo $vendor['Name'] ?>"></td>
				<td><a href="editvendor.php?id=<?php echo $vendor['ID'] ?>">Edit</a>&nbsp<a href="controller/deletevendor.php?id=<?php echo $vendor['ID'] ?>" onclick="return confirm('Are you sure want to delete this vendor?')">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>
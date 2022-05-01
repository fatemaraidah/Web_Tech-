
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		table,td,th{
			border:1px solid black;
		}
	</style>
</head>
<body>

<?php 
    include "nav.php";

?>

<table>
	<thead>
		<tr>
			<th>User_id</th>
			<th>User_name</th>
			<th>package</th>
			<th>details</th>
			<th>price</th>
			<th>image</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($allSearchedUsers as $i => $user): ?>
			<tr>
				<td><a href="../showVendor.php?id=<?php echo $user['id'] ?>"><?php echo $user['id'] ?></a></td>
				<td><?php echo $user['name'] ?></td>
				<td><a href="../editVendor.php?id=<?php echo $user['id'] ?>">Edit</a>&nbsp<a href="deleteVendor.php?id=<?php echo $user['id'] ?>">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>

</html>
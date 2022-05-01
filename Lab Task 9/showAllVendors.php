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

<table border="2">
	<thead>
		<tr>
			<th>name</th>
			<th>package</th>
			<th>details</th>
			<th>price</th>
			<th>image</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($vendors as $i => $vendor): ?>
			<tr>
				<td><a href="showvendor.php?id=<?php echo $vendor['id'] ?>"><?php echo $vendor['name'] ?></a></td>
				<td><?php echo $vendor['package'] ?></td>
				<td><?php echo $vendor['details'] ?></td>
				<td><?php echo $vendor['price'] ?></td>
				<td><img width="100px" src="uploads/<?php echo $vendor['image'] ?>" alt="<?php echo $vendor['name'] ?>"></td>
				<td><a href="editvendor.php?id=<?php echo $vendor['id'] ?>">Edit</a>&nbsp<a href="controller/deletevendor.php?id=<?php echo $vendor['id'] ?>" onclick="return confirm('Are you sure want to delete this vendor?')">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>

<body>
     <style>
     body {
  background-color: mistyrose;
}
</body>

</html>
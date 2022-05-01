<?php  
require_once '../model/model.php';


if (isset($_POST['updateVendor'])) {
	$data['name'] = $_POST['name'];
	$data['package'] = $_POST['package'];
	$data['details'] = $_POST['details'];
	$data['price'] = $_POST['price'];
	// $data['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT, ["cost" => 12]);;
	$data['image'] = basename($_FILES["image"]["name"]);

	$target_dir = "../uploads/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);


  if (updateVendor($_POST['id'], $data)) {
  	echo 'Vendor Successfully updated!!';
  	//redirect to showStudent
  	header('Location: ../showVendor.php?id=' . $_POST["id"]);
  }
} else {
	echo 'You are not allowed to access this page.';
}


?>
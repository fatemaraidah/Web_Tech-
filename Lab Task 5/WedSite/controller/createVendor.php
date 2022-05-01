<?php  
require_once '../model/model.php';


if (isset($_POST['createVendor'])) {
	$data['name'] = $_POST['name'];
	$data['Package'] = $_POST['Package'];
	$data['username'] = $_POST['username'];
	$data['Price'] = password_hash($_POST['Price'], PASSWORD_BCRYPT, ["cost" => 12]);
	$data['image'] = basename($_FILES["image"]["name"]);

	$target_dir = "../uploads/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);

	if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }

  if (addStudent($data)) {
  	echo 'Successfully added!!';
  }
} else {
	echo 'You are not allowed to access this page.';
}

?>
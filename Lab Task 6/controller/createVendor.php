

<?php  
require_once '../model/model.php';


if (isset($_POST['createVendor'])) {
	$data['name'] = $_POST['name'];
	$data['package'] = $_POST['package'];
	$data['details'] = $_POST['details'];
	$data['price'] = password_hash($_POST['price'], PASSWORD_BCRYPT, ["cost" => 12]);
	$data['image'] = basename($_FILES["image"]["name"]);

	$target_dir = "../uploads/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);

	if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }

  if (addVendor($data)) {
  	echo 'Successfully added!!';
  }
} else {
	echo 'You are not allowed to access this page.';
}

?>
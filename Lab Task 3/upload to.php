<?php
$target_dir = "uploaded folder/";
$target_file = $target_dir . basename($_FILES["file_to_upload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

//fake image checking
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["file_to_upload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

//check if already exists
if (file_exists($target_file)) {
  echo "File already exists.";
  $uploadOk = 0;
}

//check file size
if ($_FILES["file_to_upload"]["size"] > 500000) {
  echo "File size exceeds 5MB";
  $uploadOk = 0;
}

//check format size
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"){
  echo "Only JPG, JPEG, PNG files are uploadable here";
  $uploadOk = 0;
}

//Checking if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "File could not be uploaded";
//upload file
} else {
  if (move_uploaded_file($_FILES["file_to_upload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["file_to_upload"]["name"])). " has been uploaded successfully.";
  } else {
    echo "There was an error while uploading the file";
  }
}
?>
<?php

require_once '../model/model.php';

if (isset($_POST['findVendor'])) {
	
		echo $_POST['user_name'];

    try {
    	
    	$allSearchedUsers = searchUser($_POST['user_name']);
    	require_once '../showSearchedUser.php';

    } catch (Exception $ex) {
    	echo $ex->getMessage();
    }
}


<?php 

require_once ('model/model.php');

function fetchAllVendors(){
	return showAllVendors();

}
function fetchVendor($id){
	return showVendor($id);

}
<?php 

require_once '../model/model.php';

if (deleteVendor($_GET['id'])) {
    header('Location: ../showAllVendors.php');
}

 ?>
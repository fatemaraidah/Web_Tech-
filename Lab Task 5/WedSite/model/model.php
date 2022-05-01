<?php 

require_once 'db_connect.php';


function showAllVendors(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `vendor` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showVendor($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `vendor` where ID = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function searchUser($user_name){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `vendor` WHERE Username LIKE '%$user_name%'";

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function addVendor($data){
	$conn = db_conn();
    $selectQuery = "INSERT into vendor (Name, Package, Details, Price, image)
VALUES (:name, :Package, :username, :password, :image)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
        	':Package' => $data['Package'],
        	':Details' => $data['Details'],
        	':Price' => $data['Price'],
        	':image' => $data['image']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


function updateVendor($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE vendor set Name = ?, Package = ?, Details = ? where ID = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['name'], $data['Package'], $data['Details'], $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function deleteVendor($id){
	$conn = db_conn();
    $selectQuery = "DELETE FROM `vendor` WHERE `ID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}
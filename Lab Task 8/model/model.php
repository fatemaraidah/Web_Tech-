<?php 

require_once 'db_connect.php';

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function addCustomer($data)
{
    $conn = db_conn();
    $selectQuery = "INSERT into registration (Name, email, uname, pass, image, cpass, gender, dob) VALUES (:Name, :email, :uname, :pass, :image, :cpass, :gender, :dob)";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':Name'          =>         test_input($data['Name']),
            ':email'         =>         test_input($data['email']),
            ':uname'         =>         test_input($data['uname']),
            ':pass'          =>         test_input($data['pass']),
            ':image'         =>         'Dummy.png',
            ':cpass'         =>         test_input($data['cpass']),
            ':gender'        =>         test_input($data['gender']),
            ':dob'           =>         test_input($data['dob']),
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $conn = null;
    return '<span class="green">Registered successfully</span>';
}


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

function searchUser($name){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `vendor` WHERE name = ?";

    
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
    $selectQuery = "INSERT into vendor (name, package, details, price, image)
VALUES (:name, :package, :details, :price, :image)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
        	':package' => $data['package'],
        	':details' => $data['details'],
        	':price' => $data['price'],
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
    $selectQuery = "UPDATE vendor set name = ?, package = ?, details = ? where id = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['name'], $data['package'], $data['details'], $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function deleteVendor($id){
	$conn = db_conn();
    $selectQuery = "DELETE FROM `vendor` WHERE `id` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}
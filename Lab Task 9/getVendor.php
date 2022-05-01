<?php
require_once 'controller/VendorInfo.php';

$vendors = fetchAllVendors();


    include "nav.php";

    
$mysqli = new mysqli("localhost", "root", "", "registrationdb");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT * FROM `vendor` WHERE name = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($id, $name, $details, $package, $price, $image);
$stmt->fetch();
$stmt->close();

echo "<table>";
echo "<tr>";
echo "<th>Vendor ID</th>";
echo "<td>" . $id . "</td>";
echo "<th>Name</th>";
echo "<td>" . $name . "</td>";
echo "<th>Details</th>";
echo "<td>" . $details . "</td>";
echo "<th>Package</th>";
echo "<td>" . $package . "</td>";
echo "<th>Price</th>";
echo "<td>" . $price . "</td>";
echo "<th>Image</th>";
echo "<td>" . $image . "</td>";
echo "</tr>";
echo "</table>";
?>


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
    <?php foreach ($vendors as $id => $vendor): ?>
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
?>
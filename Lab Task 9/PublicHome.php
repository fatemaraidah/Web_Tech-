<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Wed Site</title>

</head>
<body>
    <style>
     body {
  background-color: mistyrose;
}
    <?php include 'header.php'; ?>
    
    <div align="center">
        <span>   
        <?php
        echo "<h3>Welcome to Wedsite</h3></p>";
        ?>


<div id="demo">
<h2></h2>
<button type="button" onclick="loadDoc()">About US</button>
</div>



<script>
function loadDoc() {
const xhttp = new XMLHttpRequest();
xhttp.onload = function() {
document.getElementById("demo").innerHTML =
this.responseText;
}
xhttp.open("GET", "ajax_info.json");
xhttp.send();
}
</script>




        </span>
    </div>
     
    
    <?php include 'footer.php';?>

</body>
</html>
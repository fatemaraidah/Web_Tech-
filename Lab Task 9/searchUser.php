<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Event Select</title>
</head>
<body>
   <style>
     body {
  background-color: mistyrose;
}

  <?php
  $name =""; 
  session_start();
  if(isset( $_SESSION['uname'])){
    $name = $_SESSION['uname'];
  }
  if(empty($name)){
    header("location:LoginPage.php");
  }
  ?>

  <div>
    <?php include 'header.php'?>
  </div>

  <br>


<!DOCTYPE html>
<html>
  <body>
<?php 
    include "nav.php";

?>
    <!-- [SEARCH FORM] -->
    <form method="post" action="controller/findVendor.php">
      <h1>Search For Vendors</h1>
      <p>Vendors suggestions: <span id="txtHint"></span></p>
      <p>First name: <input type="text" id="txt1" onkeyup="showHint(this.value)"></p>

      <script>
        function showHint(str) {
  if (str.length == 0) { 
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("txtHint").innerHTML =
    this.responseText;
  }
  xhttp.open("GET", "getVendor.php?q="+str);
  xhttp.send();   
}

</script>

    </form>  
  </body>

</html>
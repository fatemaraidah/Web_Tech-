<!DOCTYPE html>
<html>
<head>
<style>
  {
    box-sizing: border-box;
  }

  .row {
    display: flex;
  }

  .column {
    flex: 50%;
    padding: 10px;
    height: 10%;
  }
  /* Style the header */
.header {
  
  padding-left: 70px;
  display: block;
  padding-top: 10px;
  text-align: center;
  width: 100%;
  margin-left: auto;
  margin-right: auto;
}
</style>
</head>
<body>

  <div class="row">

    <div class="column">
      <img src="images/logo.jpg" alt="LOGO" height="80px;" width="250px;">
    </div>
    <div class="header">
      <img src="images/photographer.jpg" alt="LOGO" height="80px;" width="250px;">
    </div>

    <span style = "display:inline-block; width:100%; height:10%; text-align:right">
    <div class="column" >

    <?php

    if (isset($_SESSION['uname'])) {
      echo " Logged in as ";
      echo '<a href="VIEW PROFILE.php">';
      echo $_SESSION["uname"];
      echo '</a> |';
      echo "<a href='logout.php'>Logout</a>";

    }
    else{
      echo '<a href="PublicHome.php">Home</a> |
      <a href="LoginPage.php">Login</a> |
      <a href="RegistrationPage.php">Registration</a> ';   
      }
    ?>
    </div>
    </span>
  </div>

</body>
</html>
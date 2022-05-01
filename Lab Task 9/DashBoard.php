
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
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title>DashBoard</title>

</head>
<body >
    <style>
.right {
  float: right;
  width: 300px;
  border: 3px solid #73AD21;
  padding: 10px;
}
</style>
    <style>
     body {
  background-color: mistyrose;
}
    <div class="full-page">
            <?php include 'header.php'; ?>
    </div>
    

    <div style="border: 1px solid RosyBrown; color: DimGray; font-size: 20px;">                  
                        
        <fieldset>
         <td style="width: 900px; font-size: 75px; text-align: center; vertical-align: text-top;">Welcome to Wed Site <b><?php echo $_SESSION['uname'];?></b></td>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" novalidate>
                <div>
                    <table>
                        <tr>
                            <td style="width:350px;">
                                <br>
                                <ul>
                                    <li><a href="DashBoard.php">Dashboard</a></li>
                                    <li><a href="portfolio.php">Portfolio</a></li>
                                    <li><a href="OfferService.php">Offer Package Deals</a></li>
                                    <li><a href="clientrequest.php">Client Request</a></li>
                                    <li><a href="ProfilePage.php">View Profile</a></li>                              
                                    <li><a href="ChangeProfilePicture.php">Change Profile Picture</a></li>
                                    <li><a href="ChangePassword.php">Change Password</a></li>
                                    <li><a href="LogOut.php">Logout</a></li>
                                </ul>
                            </td>

                            <td>
                                <fieldset style="width:750px; height:300px;color: DimGray;">
                                    <legend><h2>Look for available event names: </h2></legend>
                                    <table>
                                        <tr>
                                            <ul>
                                            <div style="text-align : center;">
<h3 style="color:red">Start Typing Our Event Name</h3>

<h3>Suggestions: <span id="txtHint"></span><h3/>
<h3 style="color:#000080">Our Event Name: <input type="text" id="txt1" onkeyup="showHint(this.value)"></h3>

</div>

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
  xhttp.open("GET", "gethint2.php?q="+str);
  xhttp.send();   
}
</script>
                                                
                                            </ul>
                                        </tr>                                       
                                    </table> <br>
                                </fieldset>
                            </td>
                        </tr>
                    </table>
                </div>
            </form>
        </fieldset>
    </div>

    <br>

    <div align="center">
        <?php include 'footer.php'?>
    </div>
</body>
</html>





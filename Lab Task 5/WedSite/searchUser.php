
<!DOCTYPE html>
<html>
  <body>
<?php 
    include "nav.php";

?>
    <!-- [SEARCH FORM] -->
    <form method="post" action="controller/findVendor.php">
      <h1>SEARCH FOR USERS</h1>
      <p>Suggestions: <span id="txtHint"></span></p>
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
  xhttp.open("GET", "findVendor.php?q="+str);
  xhttp.send();   
}
</script>

      <input type="text" name="user_name" />
      <input type="submit" name="findVendor" value="Search"/>
    </form>


 
  </body>
</html>
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


<h2>Serch your client names</h2>
<h3>Type the name below:</h3>

<p> Client names Suggestions:  <span id="txtHint"></span></p> 
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
  xhttp.open("GET", "gethint.php?q="+str);
  xhttp.send();   
}
</script>

</body>
<td>
                <style="width:1200px; height:300px;color: DimGray;">
                  <legend><h2>Client List</h2></legend>
                  
                    <tr>
                      <style>
table,th,td {
  border : 2px solid black;
  border-collapse: collapse;
}
th,td {
  padding: 20px;
}
</style>
<body>

<h2>Clients' request for the following events</h2>

<button type="button" onclick="loadDoc()">Check requests</button>
<br><br>
<table id="demo"></table>

<script>
function loadDoc() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    myFunction(this);
  }
  xhttp.open("GET", "cd_catalog.xml");
  xhttp.send();
}
function myFunction(xml) {
  const xmlDoc = xml.responseXML;
  const x = xmlDoc.getElementsByTagName("CD");
  let table="<tr><th>Name</th><th>City</th><th>Budget</th><th>Package</th><th>Date</th></tr>";
  for (let i = 0; i <x.length; i++) { 
    table += "<tr><td>" +
    x[i].getElementsByTagName("NAME")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("COUNTRY")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("PRICE")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("YEAR")[0].childNodes[0].nodeValue +
    "</td></tr>";
    
  }
  document.getElementById("demo").innerHTML = table;
}
</script>
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
<style>
     body {
  background-color: ;
}
</html>

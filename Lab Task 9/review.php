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
     body {
  background-color: mistyrose;
}
    <div class="full-page">
            <?php include 'header.php'; ?>
    </div>
    
    <br>

  
        
</body>
</html>

<!DOCTYPE html>
<html>
<head>
<style>
div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body>

<h2>My Clients Reviews</h2>

<h4>Snapshot Weeding Filmer capturing your best memories forever...</h4>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="image1.jpg">
      <img src="image22.jpg" alt="Cinque Terre" width="600" height="400">
    </a>
    <div class="desc">Sarah: Outstanding photography by SnapShot! Loved all the photos and videos.</div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="image22.jpg">
      <img src="image99.jpg" alt="Forest" width="600" height="400">
    </a>
    <div class="desc">Mylen: Great photography skills, very patient. Budget friendly.</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="image33.jpg">
      <img src="image33.jpg" alt="Northern Lights" width="600" height="400">
    </a>
    <div class="desc">Zoya: In love with Snapshot photography! The best in town.</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="image55.jpg">
      <img src="image55.jpg" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc">Zayaan: Such a budget friendly packet with outstanding services!!</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="image55.jpg">
      <img src="image66.jpg" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc">Melisa: One of my favourite Shots for the day!!</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="image55.jpg">
      <img src="image77.jpg" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc">Ayeza: Love this capture!!</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="image55.jpg">
      <img src="image88.jpg" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc">Ahad: What an incredible photography skill!</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="image55.jpg">
      <img src="image1.jpg" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc">Sayjal: One of my favourite Shots for the day!!</div>
  </div>
</div>

<div class="clearfix"></div>

<div style="padding:6px;">
  <p> SnapShot Filmer.</p>
  <p>All rights reserved.</p>
</div>

</body>
</html>

</div>

  <div align="center">
        <?php include 'footer.php'; ?>
    </div>

</body>
</html>
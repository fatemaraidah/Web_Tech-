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
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
   <style>
     body {
  background-color: mistyrose;
}
* {
  box-sizing: border-box;
}

.row::after {
  content: "";
  clear: both;
  display: table;
}

[class*="col-"] {
  float: left;
  padding: 15px;
}

html {
  font-family: "Lucida Sans", sans-serif;
}

.header {
  background-color: LightSteelBlue    ;
  color: SlateBlue;
  padding: 10px;
  font-size: 25px;
   font-style: oblique;
  font-stretch: expanded;
}

.menu ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.menu li {
  padding: 8px;
  margin-bottom: 7px;
  background-color: Thistle ;
  color: #ffffff;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.menu li:hover {
  background-color: Purple;
}

.aside {
  background-color: Thistle;
  padding: 15px;
  color: #ffffff;
  text-align: center;
  font-size: 14px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.footer {
  background-color: LightSteelBlue ;
  color: #ffffff;
  text-align: center;
  font-size: 12px;
  padding: 15px;
}

/* For mobile phones: */
[class*="col-"] {
  width: 100%;
}

@media only screen and (min-width: 768px) {
  /* For desktop: */
  .col-1 {width: 8.33%;}
  .col-2 {width: 16.66%;}
  .col-3 {width: 25%;}
  .col-4 {width: 43.33%;}
  .col-5 {width: 41.66%;}
  .col-6 {width: 50%;}
  .col-7 {width: 58.33%;}
  .col-8 {width: 66.66%;}
  .col-9 {width: 75%;}
  .col-10 {width: 83.33%;}
  .col-11 {width: 91.66%;}
  .col-12 {width: 100%;}
}
</style>
</head>
<body>


<div class="header">
  <h1>Snapshot Wedding Filmer </h1>
</div>

<div class="row">
  <div class="col-3 menu">
    <ul>
      <li>Years of Experience:  6</li>
      <li>Payment Mode:  Cash/Account Payee Cheque (50% advance & rest upon delivery)</li>
      <li>Cancellation Policy:  No refund policy</li>
      <li>Delivery Period of footages:  Within 30 days</li>
    </ul>
  </div>

  <div class="col-6">
    <h1>Our Story...</h1>
      <p>Welcome to our world of photography service with an eye for the perfect moment! For years we have 
  been passionately crafting beautiful images with creativity and professionalism with one single 
  motive of ensuring 100 percent client satisfaction. At Snapshot Weeding Filmer, we bring our own 
  unique perspective into play when we snap that shutter, combining our skills to develop photos
   that we feel define your unique and special moment in time. We give utmost importance to building 
  a strong relationship with our customers so that expectations are exceeded in regards to both 
  quality and service. We are only happy, when you're happy. As a team, Snapshot Weeding Filmer has always thrived 
  to tell the stories of the couple and their family. Our biggest strength lies in our ability to dissolve
   into your family and shoot candid, intricate photographs of your special days. We are the photographers 
  whose images will bring your story to life every time you see them. Thus, we are Snapshot Weeding Filmer.</p>
    </div>
    

  <div class="col-3 right">
    <div class="aside">
      <h2>What's Our speciality?</h2>
      <p> Captures your littlest magical momments to cherish forever!</p>
      <h2>Where we're located?</h2>
      <p>Banani, Dhaka, Bangladesh</p>
      <h2>How can you reach Us?</h2>
      <p> +880 17 2884 9514</p>
    </div>
  </div>
</div>

<div class="footer">
  <p>All rights reseved to Indigo Filmer</p>
</div>



<div align="center">
        <?php include 'footer.php'; ?>
    </div>
</body>
</html>

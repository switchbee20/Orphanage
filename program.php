<?php
session_start();
if(!isset($_SESSION['loggedin'])||$_SESSION['loggedin']!=true){
header("location:login.php");
exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome -<?php echo $_SESSION['username']?></title>
    <link rel="stylesheet" href="/orphanage/style.css">
</head>
<body>
<?php  require 'partials/_nav.php' ?>
<!-- progams section -->
<section class="programs" id="programssection">
<div class="container1">
<h2 class="sectionTitle">Programs</h2>

<div class="boxContainer">
  <div class="box"> 
     <div class="cardImage"></div>
      <div class="programTitle">Education To every Child</div>
      <div class="donationCount">
        Donation Goal:<span>$9845</span>
      </div>
      <button onclick="window.location.href='/orphanage/donation.php';">Donate Now</button>
     </div>
     <!-- box end -->
     <div class="box"> 
     <div class="cardImage"></div>
      <div class="programTitle">Make life easier for them
      </div>
      <div class="donationCount">
        Donation Goal:<span>$9845</span>
      </div>
      <button onclick="window.location.href='/orphanage/donation.php';">Donate Now</button>
     </div>
     <!-- box end -->
     <div class="box"> 
     <div class="cardImage"></div>
      <div class="programTitle">Dedicating to helping kids
      </div>
      <div class="donationCount">
        Donation Goal:<span>$9845</span>
      </div>
      <button  onclick="window.location.href='/orphanage/donation.php';">Donate Now </button>
     </div>
     <!-- box end -->
     <div class="box"> 
     <div class="cardImage"></div>
      <div class="programTitle">For Healthy Life..
      </div>
      <div class="donationCount">
        Donation Goal:<span>$9845</span>
      </div>
      <button onclick="window.location.href='/orphanage/donation.php';">Donate Now</button>
     </div>
     <!-- box end -->
</div>
<!-- box conatiner end here -->
</div>
</section>
<!-- program section end here -->
<?php  require 'partials/footer.php' ?>


</body>
</html>

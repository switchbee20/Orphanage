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
<!-- banner section -->
<div class="fullcontainer banner" id="homesection">

<?php  require 'partials/_nav.php' ?>
  <div class="container1">
     <h1>Together We can <span> Save Lives </span></h1>
     <p>Every child has the right to a safe, stable, and permanent home. And yet millions of children remain in orphanages, are removed from their birth family, or are moved too often between foster homes. It's time to change this. Here's how we're doing it</p>
      <button onclick="window.location.href='/orphanage/donation.php';">Start with a little</button>
  </div>
</div>  
 <!-- banner section end up -->

<?php  require 'partials/footer.php' ?>


</body>
</html>

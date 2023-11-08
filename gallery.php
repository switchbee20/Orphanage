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
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<style>
  .item img {
 width:100%;
 height: 400px;
}
</style>
<body>
<?php  require 'partials/_nav.php' ?>
<section class="gallery" id="gallerySection">
    <div class="container1">
        <div class="sectionTitle">Gallery</div>
        <div class="galleryContainer">
            <div class="item">
                <!-- <span class="title">Image Title</span> -->
                <img src="./image/gallery/img1.jpg" alt="">
            </div>
            <!-- item -->
            <div class="item">
                <!-- <span class="title">Image Title</span> -->
                <img src="./image/gallery/img2.jpg" alt="">
            </div>
            <!-- item -->
            <div class="item">
                <!-- <span class="title">Image Title</span> -->
                <img src="./image/gallery/img3.jpg" alt="">
            </div>
            <!-- item -->
            <div class="item">
                <!-- <span class="title">Image Title</span> -->
                <img src="./image/gallery/img4.jpg" alt="">
            </div>
            <!-- item -->
            <div class="item">
                <!-- <span class="title">Image Title</span> -->
                <img src="./image/gallery/img5.jpg" alt="">
            </div>
            <!-- item -->
            <div class="item">
                <!-- <span class="title">Image Title</span> -->
                <img src="./image/gallery/img6.jpg" alt="">
            </div>
            <!-- item -->
            <div class="item">
                <!-- <span class="title">Image Title</span> -->
                <img src="./image/gallery/img7.jpg" alt="">
            </div>
            <!-- item -->
            <div class="item">
                <!-- <span class="title">Image Title</span> -->
                <img src="./image/gallery/img8.jpg" alt="">
            </div>
            <!-- item -->
        </div>

    </div>
</section>
</body>
</html>
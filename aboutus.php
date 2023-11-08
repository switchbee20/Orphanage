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
    <title>ABOUT US</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<body>
    
<?php  require 'partials/_nav.php' ?>
    <div class="services">
        <h1>~~ABOUT US~~</h1>
        <div class="content">
            <div class="cardss">
               <div class="carrd">
                <div class="sbox">
                    <i class="fas fa-book"></i>
                
                    <h3>MISSION</h3>
                    <P>Dedicated to looking after the welfare of orphan children.We support orphaned and vulnerable children worldwide by providing for their physical, educational, nutritional, medical, and emotional needs.
                        Our aim is to raise awareness and funds for orphans in India as well as poor & needy families. 
                        To relieve poverty & sickness and give the tools needed to have hope for a brighter future.</P>
                </div>
               </div>
               <div class="carrd">
                <div class="sbox">
                    <i class="fas fa-globe"></i>
             
                    <h3>VISION</h3>
                    <P>Deeply rooted in love and compassion, little homes embarks itself in providing service to children, especially the unloved and uncared, and help them to achieve their full potential.</P>
                </div>
               </div>
               <div class="carrd">
                <div class="sbox">
                    <i class="fas fa-pencil"></i>
                
                    <h3>ACHIEVEMENTS</h3>
                    <P>Little Home Orphanage achievement on education foe the orphans and vulnerable children.
                        Little Home orphanage achievement in terms of quality healthcare.
                        Achievement in term of the psycological wellness of the children.</P>
            </div>
        </div>
    </div>
</body>
</html>
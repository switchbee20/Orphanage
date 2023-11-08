
<?php
if(isset($_SESSION['loggedin'])&& $_SESSION['loggedin']==true){
$loggedin=true;
}
else{
    $loggedin=false;
}
echo'
<nav>
    <div class="logo">
      <a href="#"><img src="/orphanage/image/logo.jpg" alt="logo"></a>
    </div>
    <ul class="menu"> ';
if(!$loggedin){    
 echo' <li><a href="/orphanage/welcome.php">Home</a></li>
 <li><a href="/orphanage/signup.php">Signup</a></li>
        <li><a href="/orphanage/login.php">Login</a></li>';}
if($loggedin){      
 echo'
 <li><a href="/orphanage/welcome.php/#homesection">Home</a></li>
 <li><a href="\orphanage\adoption\adoption.php">Adoption</a></li>
 <li><a href="/orphanage/aboutus.php">About Us</a></li>
 <li><a href="/orphanage/program.php">Programs</a></li> 
 <li><a href="/orphanage/gallery.php">Gallery</a></li></li>
 <li><a href="/orphanage/logout.php">Logout</a></li>';}
  echo' </ul>
 </nav>';
?>


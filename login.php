<?php
 $login=false;
 $showerror=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
include 'partials/_dbconnect.php';
$username=$_POST["username"];
$password=$_POST["password"];

$sql="Select * from users where username='$username' AND password='$password'";

$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
if($num==1){
  $login=true;
  session_start();
  $_SESSION['loggedin']=true;
  $_SESSION['username']=$username;
  header("location:welcome.php");
}

else{
  $showerror="Invalid Credentials";
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/orphanage/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body >
    <?php require 'partials/_nav.php' ?>
    <?php
if($login){
    echo '<div class="alert success">
    <span class="closebtn">&times;</span>  
    <strong>Success!</strong> Your are Logged in...
  </div>'; 
}
if($showerror){
   echo ' <div class="alert warning">
  <span class="closebtn">&times;</span>  
  <strong>Error!</strong>'.$showerror.'
</div>';
}
?>

<script>
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
  close[i].onclick = function(){
    var div = this.parentElement;
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}
</script>
    <div class="box1"> 
        <form action="/orphanage/login.php" method="post" >
    <div class="container">

        <div class="top">
            <span>Welcome Back!!!</span>
            <header>Login</header>
        </div>

        <div class="input-field">
            <input type="text" class="input" placeholder="Username" id="username" name="username">
            <i class='bx bx-user' ></i>
        </div>

        <div class="input-field">
            <input type="Password" class="input" placeholder="Password" id="password" name="password">
            <i class='bx bx-lock-alt'></i>

        <div class="input-field">
        <button type="submit" class="submit"  id="">Login</button>
        </div>

    </div>
</div>  
</form>
</body>
</html>
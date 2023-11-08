 <?php
 $showalert=false;
 $showerror=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
include 'partials/_dbconnect.php';
$username=$_POST["username"];
$password=$_POST["password"];
$cpassword=$_POST["cpassword"];
$email=$_POST["email"];
// $exists=false;
//query to check if this username exist
$existSql="SELECT * FROM `users` WHERE username='$username'";
$result=mysqli_query($conn,$existSql);
$numExistRows=mysqli_num_rows($result);
if($numExistRows>0){
    // $exists=true;
    $showerror="Username already exist";
}
else{
    // $exists=false;
       if($password==$cpassword){
           $sql="INSERT INTO `users` (`username`, `email`, `password`, `dt`) VALUES ( '$username', '$email', '$password', current_timestamp())";
           $result=mysqli_query($conn,$sql);
       if($result){
           $showalert=true;
       }
       }
       else{
           $showerror="Password does not match";
       }
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
if($showalert){
    echo '<div class="alert success">
    <span class="closebtn">&times;</span>  
    <strong>Success!</strong> Your account is created and you can login...
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
    <div class="box2 ">
      <form action="/orphanage/signup.php" method="post" >
    <div class="container">
        <div class="top">
            <span>Welcome To Little Homes!!!</span>
            <header>SignUp</header>
        </div>

        <div class="input-field">
            <input type="text" class="input" placeholder="Username" id="username" name="username">
            <i class='bx bx-user' ></i>
        </div>
        <div class="input-field">
            <input type="email" class="input" placeholder="Email" id="email" name= email>
            <i class='bx bx-envelope' ></i>
        </div>
        <div class="input-field">
            <input type="Password" class="input" placeholder="Password" id="password" name="password">
            <i class='bx bx-lock-alt'></i>
        </div>
        <div class="input-field">
            <input type="Password" class="input" placeholder=" Confirm Password" id="cpassword" name="cpassword">
            <i class='bx bx-lock-alt'></i>
        </div>
        <div class="input-field">
            <button type="submit" class="submit"  id="">Signup</button>
        </div>
        </div>
        </form>
</div>  
</body>
</html>
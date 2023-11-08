<?php
	session_start();
	
	if(!isset($_SESSION['loggedin'])||$_SESSION['loggedin']!=true){
	header("location:login.php");
	exit;
	}
	$showsuccess=false;
  $login=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
	include '../orphanage/partials/_dbconnect.php';
	$fullname=$_POST['fullname'];
	$email=$_POST['email'];
  $message=$_POST['message'];
  $feedback=$_POST['feedback'];
	$sql="INSERT INTO `feedback` ( `fullname`, `email`, `feedback`, `message`) VALUES ( '$fullname', '$email','$feedback' , '$message')";
	$result=mysqli_query($conn,$sql);
    $showsuccess=true;
    $login=true;
	
}

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Feedback</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/orphanage/style.css">
    <style>
      body {
        background-color: #ccc;
        font-family: Arial, sans-serif;
        
      }
      
      h1 {
        padding-top:35px;
        padding-bottom:20px;
        text-align: center;
        color: #333;
      }
      
      form {
        width: 40%;
        margin: 0 auto;
        background-color: #fff;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      }
      
      label {
        display: block;
        margin-bottom: 10px;
        color: #333;
        font-weight: bold;
      }
      
      input[type=text], input[type=email], input[type=tel], textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-bottom: 20px;
        font-size: 16px;
      }
      
      textarea {
        height: 150px;
      }
      
      input[type=submit] {
        background-color: #4CAF50;
        color: #fff;
        border: none;
        padding: 12px 20px;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
      }
      
      input[type=submit]:hover {
        background-color: #45a049;
      }
    </style>
  </head>
  <body>
  <?php require 'partials/_nav.php' ?>
  <?php
if($showsuccess){
    echo '<div class="alert success">
    <span class="closebtn">&times;</span>  
    <strong>Thank You For Your Valuable Feedback!</strong>
  </div>'; 
}?>
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
    <h1>Please Give your valuable feedback here</h1>
    <form action="./webform.php" method="post">
      <label for="fullname">Full Name:</label>
      <input type="text" id="fullname" name="fullname" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="feedback">Give your Feedback</label>
      <textarea id="feedback" name="feedback"></textarea>

      <label for="message">Any Query type here...</label>
      <textarea id="message" name="message"></textarea>

      <input type="submit" value="Submit">
    </form>
  </body>
</html>

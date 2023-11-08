<?php
	session_start();
	
	if(!isset($_SESSION['loggedin'])||$_SESSION['loggedin']!=true){
	header("location:login.php");
	exit;
	}
	$showsuccess=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
	include '../partials/_dbconnect.php';
	$fullname=$_POST['fullname'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$city=$_POST['city'];
  $state=$_POST['state'];
  $zip=$_POST['zip'];
  $reason=$_POST['reason'];
  $message=$_POST['message'];
  $phone=$_POST['phone'];
	$sql="INSERT INTO `adoption` (`fullname`,`email`, `address`, `city`, `state`, `zip`, `reason`, `message`,`phone`) VALUES ( '$fullname', '$email', '$address', '$city', ' $state', ' $zip', '$reason', '$message','$phone')";
	$result=mysqli_query($conn,$sql);
    $showsuccess=true;
    header("location:adoption.php");
	
}

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Child Adoption Enquiry Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      body {
        background-color: #ccc;
        font-family: Arial, sans-serif;
      }
      
      h1 {
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
    <h1>Child Adoption Inquiry Form</h1>
    <form action="../adoption/form.php" method="post">
      <label for="fullname">Full Name:</label>
      <input type="text" id="fullname" name="fullname" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="phone">Phone Number:</label>
      <input type="tel" id="phone" name="phone" required>

      <label for="address">Address:</label>
      <input type="text" id="address" name="address" required>

      <label for="city">City:</label>
      <input type="text" id="city" name="city" required>

      <label for="state">State:</label>
      <input type="text" id="state" name="state" required>

      <label for="zip">Zip Code:</label>
      <input type="text" id="zip" name="zip" required>

      <label for="reason">Reason for Adoption:</label>
      <textarea id="reason" name="reason" required></textarea>

      <label for="message">Additional Message:</label>
      <textarea id="message" name="message"></textarea>

      <input type="submit" value="Submit">
    </form>
  </body>
</html>

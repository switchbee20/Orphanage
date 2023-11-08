<?php
	session_start();
	
	if(!isset($_SESSION['loggedin'])||$_SESSION['loggedin']!=true){
	header("location:login.php");
	exit;
	}
	$showsuccess=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
	include 'partials/_dbconnect.php';
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$adharno=$_POST['adharno'];
	$amt=$_POST['amt'];
	$sql="INSERT INTO `donation` ( `name`, `email`, `phoneno`, `amount`) VALUES ( '$name', '$email', '$phone', '$amt')";
	$result=mysqli_query($conn,$sql);
    $showsuccess=true;
	
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
	<link rel="stylesheet" href="/orphanage/style.css">
</head>
<body class="bg-dark">
<?php require 'partials/_nav.php' ?>
<?php
if($showsuccess){
    echo '<div class="alert success">
    <span class="closebtn">&times;</span>  
    <strong>Thank You For Your Kind Help!</strong>Transaction has been succesfully done...
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
		<div class="container2">
			<form action="/orphanage/donation.php" method="post" >
			<div class="row justify-content-center mt-4">
				<div class="col-md-5">
					<div class="card border-0">
						<div class="card-header bg-white">
							<h4 class="card-title">
								Every Little Help Matters...
							</h4>
						</div>
						<div class="card-body">
								<label for="">Name:</label>
								<div class="form-group">
									<input type="text" name="name" id="name" class="form-control" placeholder="Enter the name..." required>
								</div>
								<label for="">Email:</label>
								<div class="form-group">
									<input type="email" name="email" id="email" class="form-control" placeholder="Enter the email..." required>
								</div>
								<label for="">Phone No:</label>
								<div class="form-group">
									<input type="number" name="phone" id="phone" class="form-control" placeholder="Enter the phone..." required>
								</div>
								<label for="">Adhar Number:</label>
								<div class="form-group">
									<input type="number" name="Adharno" id="Adharno" class="form-control" placeholder="Enter the Adharno..." required>
								</div>
								<label for="">Amount:</label>
								<div class="form-group">
									<input type="text" name="amt" id="amt" class="form-control" placeholder="Enter the Amount..." required>
								</div>
								<div class="form-group">
									<button type="submit" name="payment" class="btn btn-dark btn-block font-weight-bold" onclick="validate()">Proccess</button>
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</form>
</body>
</html>
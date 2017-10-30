<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
 
<!--
- tool bar ...
-->

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="home_page.php">Home</a></li>
      </ul>
	  
	  <ul class="nav navbar-nav navbar-right">
        <li><a href="sign_up.php"><span class="glyphicon glyphicon-log-in"</span> Signup</a></li>
      </ul>
	  
    </div>
  </div>
</nav>

<!--
- form sign up ...
-->
<div class="container">
  <h2>Form SignUp</h2>
  <form action="sign_up.php" method="POST">
  <div class="form-group">
      <label for="userName">Name:</label>
      <input type="text" class="form-control" id="userName" placeholder="Enter user name" name="userName">
    </div>
	
	 <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
	
	<div class="form-group">
      <label for="cfpwd">Confirm password:</label>
      <input type="password" class="form-control" id="cfpwd" placeholder="Confirm password" name="cfpwd">
    </div>
	
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
   
     <div class="form-group">
      <label for="address">Your address:</label>
      <input type="text" class="form-control" id="addr" placeholder="Enter your address" name="addr">
    </div>
	<div class="form-group">
      <label for="address">Your phone number:</label>
      <input type="number" class="form-control" id="phoneNumber" placeholder="Enter phone number" name="phoneNumber">
    </div>
    <button type="submit" name="submit" class="btn btn-success" onclick="return confirm('Bạn đã chắc chắn')">Submit</button>
  </form>
</div>

<!--Code php-->
<center>
<?php
	if(isset($_POST['submit'])){
		
		$name = $_POST['userName'];
		$pass = $_POST['pwd'];
		$cfpass = $_POST['cfpwd'];
		$email = $_POST['email'];
		$phone = $_POST['phoneNumber'];
		$address = $_POST['addr'];
		
		//-- check null
		if($name == null) 
			echo 'Notifies: Truong name trong, moi nhap lai ! ';
		else if($pass == null) 
			echo 'Notifies: Truong password trong, moi nhap lai ! ';
		else if($cfpass == null || $pass != $cfpass) 
			echo 'Notifies: Truong confirm password trong hoac khong dung, moi nhap lai ! ';
		else if($email == null) 
			echo 'Notifies: Truong mail chong, moi nhap lai ! ';
		else if($address == null) 
			echo 'Notifies: Truong dia chi chong, moi nhap lai ! ';
		else if($phone == null) 
			echo 'Notifies: Truong phone number chong, moi nhap lai ! ';
		else echo 'thanh cong!';

	}
?>
</center>
</body>
</html>

<?php 
session_start();
if(isset($_SESSION['name']) && $_SESSION['role'] == 0)
    header('Location: home_page_user.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>log in</title>
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
        <li ><a href="home_page_guest.php"><span class="glyphicon glyphicon-home"></span>  Home</a></li>
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
<div class="col-sm-3">
  <image width = "100%;" src="image/welcome/heart.gif"></image>
  <image width = "100%;" src="image/welcome/heart.gif"></image>
  <image width = "100%;" src="image/welcome/heart.gif"></image>
</div>
<div class="col-sm-3">
  <br>
  <br>
  <br>
  <h2>Form Login</h2>
  <form action="login.php" method="POST">
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
	
    <button type="submit" name="submit" class="btn btn-success" onclick="return confirm('Bạn đã chắc chắn')">Submit</button>
  </form>
  <image width = "100%;" src="image/welcome/heart.gif"></image>

</div>
<div class="col-sm-6">
  <image width = "100%;" src="image/welcome/welcome1.gif"></image>
</div>

<!--Code php-->
<center>
  <?php
  	if(isset($_POST['submit'])){
  		
  		$name = $_POST['userName'];
  		$pass = $_POST['pwd'];
  		$cfpass = $_POST['cfpwd'];  
  		
  		//-- check null
  		include 'model/check_null_login.php';
  	}
  ?>
</center>

</body>
</html>

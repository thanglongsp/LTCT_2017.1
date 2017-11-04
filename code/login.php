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
<div class="container">
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
	
    <button type="submit" name="submit" class="btn btn-success" onclick="return confirm('Bạn đã chắc chắn')">Submit</button>
  </form>
</div>

<!--Code php-->
<center>
  <?php
  	if(isset($_POST['submit'])){
  		
  		//-- check null
      if(isset($_POST['ok']))
      {
        $truename="admin";
        $truepass="123";
      $name=$pass="";
       if($_POST['userName'] == NULL)
       {
        echo "Please enter your username<br />";
       }
       else
       {
        $name=$_POST['userName'];
       }
       if($_POST['pwd'] == NULL)
       {
        echo "Please enter your password<br />";
       }
       else
       {
       $pass=$_POST['pwd'];
       }
        if($name && $pass) {
          if($name!=$truename||$pass!=$truepass){
              echo "Username or password is not correct, please try again";
          }else{
            echo "string";
          }
        }
      }
  	}

  ?>
</center>

</body>
</html>

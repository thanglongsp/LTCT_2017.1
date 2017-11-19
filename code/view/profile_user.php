<?php
session_start();
if (!isset($_SESSION['name'])) {
     header('Location: login.php');
}else{
  $name = $_SESSION['name'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>home page user</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css"  href="css/css_form.css">
  <style>
    .ul1 {
        background: #808080;
        padding: 20px;
    }

   
    .li1 {
        background: #FFFAF0;
        margin: 5px;
    }
  </style>
</head>

<body >

<!--toolbar-->
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
        <li><a href="home_page_user.php"><span class="glyphicon glyphicon-home"></span>  Home</a></li>
      </ul>

      <!--^^-->
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown"  href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $name;?><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-toggle" data-toggle="dropdown" href="profile_user.php"><span class="glyphicon glyphicon-user"></span>  Profile</a></li>
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>  logout</a></li>
          </ul>
          </li>
        </ul>
    

	    <ul class="nav navbar-nav navbar-right">
        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-send"></span> FollowBill</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="rating.php"><span class="glyphicon glyphicon-star"></span> Rating</a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="favorite.php"><span class="glyphicon glyphicon-bookmark"></span> Favorite</a></li>
      </ul>
	  
    </div>
  </div>
</nav>
  
<!--content-->
</center>
  <div class="col-sm-6">
      <center><h2>You want to update your information?</h2></center>
      <form action="profile_user.php" method="POST">

      <div class="form-group">
        <label for="fullname">Full name?</label>
        <input type="text" class="form-control" id="fullname" placeholder="Nguyen Tung Son" name="fullname">
      </div>

      <div class="form-group">
         <label for="password">Pass word?</label>
         <input type="password" class="form-control" id="password" placeholder="strong: 8 character" name="password">
      </div>
      
      <div class="form-group">
          <label for="address">Address ?</label>
          <input type="text" class="form-control" id="address" placeholder="Tran Duy Hung" name="address">
      </div>
      
      <div class="form-group">
          <label for="email">Email ?</label>
          <input type="email" class="form-control" id="email" placeholder="@gmail.com" name="email">
      </div>
      
      <div class="form-group">
        <label for="phone">Phone number ?</label>
        <input type="number" class="form-control" id="phone" placeholder="0123456789" name="phone">
      </div>
       
       <div class="form-group">
        <label for="gender">Gender ?</label>
        <input type="number" class="form-control" id="gender" placeholder="1: female, 0 :male" name="gender">
      </div>
  
      <button type="submit" name="submit" class="btn btn-success" onclick="return confirm('Bạn đã chắc chắn')">Submit</button>
      </form>
  </div>
  <!--Code php-->
  <center>
    <?php

        // ket noi database
        include 'model/connection_db.php';

        // check null add update data php
        include 'model/check_profile_db.php';
        
      ?>
  </center>


  <div class="col-sm-6">

  <center><h2>Information about you! </h2></center>
  <br>
        <?php                      
          //ket noi database
            include 'model/connection_db.php';
            $sql = "SELECT  uid,fullname,address,phone,email,gender from user where uid = '$name'" ;
            $result = $conn->query($sql);

            /* fetch associative array */
            while ($row = $result->fetch_assoc()) {
                $_SESSION['uid'] = $row["uid"];
                $_SESSION['fullname'] = $row["fullname"];
                $_SESSION['address'] = $row["address"];
                $_SESSION['phone'] = $row["phone"];
                $_SESSION['email'] = $row["email"];
                $_SESSION['gender'] = $row["gender"];
            }
          ?>
              
              <ul class="ul1">
              <li class="li1">User name:    <?php echo $_SESSION['uid'];?></li>
              <li class="li1">Full name:    <?php echo $_SESSION['fullname']; ?></li>
              <li class="li1">Address:      <?php echo $_SESSION['address'];?></li>
              <li class="li1">Phone number: <?php echo $_SESSION['phone'];?></li>
              <li class="li1">Email:        <?php echo $_SESSION['email']; ?></li>
              <li class="li1">Gender:       <?php echo $_SESSION['gender'] ;?></li>
              </ul>

  </div>

<!--Footer-->

</body>
</html>
